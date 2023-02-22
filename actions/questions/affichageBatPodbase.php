<?php
require('actions/database.php');

$idOfUser = $_SESSION['id'];

        //Récupérer toutes les batiments de production de l'utilisateur
        $getbatprod = $bdd->prepare('SELECT bp.id, bp.nom, SUM(bpp.nombresBat) AS nombresBat, SUM(bpp.nombresOuvrier) AS nombresOuvrier, SUM(bp.productionBat * bpp.nombresBat) AS productionBatNombres, SUM(bp.productionOuvrier * bpp.nombresOuvrier) AS productionOuvrierNombres
        FROM batimentproductionplayer bpp
        INNER JOIN batiments_prod bp ON bpp.idBatiment = bp.id
        WHERE bpp.id_player = ?
        GROUP BY bp.nom');
        $getbatprod->execute(array($idOfUser));