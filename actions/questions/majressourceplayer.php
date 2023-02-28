<?php
require('../../actions/database.php');
require('../../actions\users\securityAction.php');
$idOfUser = $_SESSION['id'];

// calculer le gain par segonde de chaque ressource 
        //Récupérer le gain de production de chaque batiment 
        $getressourceprod = $bdd->prepare('SELECT bp.nom,( bpp.nombresBat * bp.productionBat ) + ( bpp.nombresOuvrier * bp.productionOuvrier ) AS productiontotale
        FROM batiments_prod bp
        INNER JOIN batimentproductionplayer bpp ON bp.id = bpp.idBatiment
        WHERE bpp.id_player = ?');
        $getressourceprod->execute(array($idOfUser));
        $getresource = $getressourceprod->fetchAll();



//recuperer le datetimes de la dernieres maj
$affichedatetimes = $bdd->prepare('SELECT date_derniere_co from users WHERE id = ?');
$affichedatetimes->execute(array($idOfUser));
$datetimes = $affichedatetimes->fetch();
$timestamp = time() ;
$deltatimes = $timestamp - $datetimes[0];

// Définir les variables pour les gains journaliers des bâtiments

$ortimestamp = ($getresource[0][1] / 24 / 60 / 60)* $deltatimes;
$petroltimestamp = ($getresource[1][1] / 24 / 60 / 60)* $deltatimes;
$beriumtimestamp = ($getresource[2][1] / 24 / 60 / 60)* $deltatimes;
$electricitetimestamp = ($getresource[3][1] / 24 / 60 / 60)* $deltatimes;


$majressource = $bdd->prepare('UPDATE ressource_player
SET gold = gold + ? , petrol = petrol + ?
WHERE id_player = ? ');
  $majressource->execute(array($ortimestamp,$petroltimestamp,$idOfUser));


$majtime = $bdd->prepare('UPDATE users
SET date_derniere_co = ? 
WHERE id = ? ');
  $majtime->execute(array($timestamp,$idOfUser));