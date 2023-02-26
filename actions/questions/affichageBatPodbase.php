<?php
require('actions/database.php');
require('actions\users\securityAction.php');
$idOfUser = $_SESSION['id'];


//afficher les ressources du joueur 

$ressourceplayer = $bdd->prepare('SELECT * from ressource_player WHERE id_player = ?');
$ressourceplayer->execute(array($idOfUser));
 $ressource = $ressourceplayer->fetch();


//afficher le terrain du joueur 
// recuperer le terrain des batiments de production
$terrainbatprod = $bdd->prepare('SELECT SUM(bp.terrain * bpp.totalBatiments) as terrain 
FROM (SELECT idBatiment, SUM(nombresBat) as totalBatiments FROM batimentproductionplayer 
WHERE id_player = ? 
GROUP BY idBatiment) bpp INNER JOIN batiments_prod bp 
ON bpp.idBatiment = bp.id');
$terrainbatprod->execute(array($idOfUser));
 $terrainprod = $terrainbatprod->fetch();

// recuperer le terrain des batiments de guerre 

$terrainbatguerre = $bdd->prepare('SELECT SUM(bat_guerre.terrain * bat_guerre_player.nombresBtaiment) as terrain_total
FROM bat_guerre_player 
INNER JOIN bat_guerre ON bat_guerre_player.id_batiment = bat_guerre.id
WHERE bat_guerre_player.id_player = ?');
$terrainbatguerre->execute(array($idOfUser));
 $terrainguerre = $terrainbatguerre->fetch();

 //additioner les differents terrain 
 $terrain = ($terrainguerre[0]+$terrainprod[0]) ;


        //Récupérer toutes les batiments de production de l'utilisateur
        $getbatprod = $bdd->prepare('SELECT bp.id, bp.nom, SUM(bpp.nombresBat) AS nombresBat, SUM(bpp.nombresOuvrier) AS nombresOuvrier, SUM(bp.productionBat * bpp.nombresBat) AS productionBatNombres, SUM(bp.productionOuvrier * bpp.nombresOuvrier) AS productionOuvrierNombres
        FROM batimentproductionplayer bpp
        INNER JOIN batiments_prod bp ON bpp.idBatiment = bp.id
        WHERE bpp.id_player = ?
        GROUP BY bp.nom');
        $getbatprod->execute(array($idOfUser));


        //Récupérer toutes les batiments de guerre  de l'utilisateur
        $getbatguerre = $bdd->prepare('SELECT 
        bat_guerre.id as id, 
        bat_guerre.nom as nom_batiment, 
        bat_guerre_player.nombresBtaiment as nb_batiments
      FROM bat_guerre_player 
      INNER JOIN bat_guerre ON bat_guerre_player.id_batiment = bat_guerre.id
      WHERE bat_guerre_player.id_player = ?;');
        $getbatguerre->execute(array($idOfUser));
