<?php
require('actions/database.php');
require('actions\users\securityAction.php');
$idOfUser = $_SESSION['id'];
$idbat = $_GET['id'];

$affichebat = $bdd->prepare('SELECT bp.id, bp.nom, bp.img, bp.description, bp.prix, bpp.nombresBat AS nombre_batiments,
 bpp.nombresOuvrier AS nombre_ouvriers, (bp.productionBat * bpp.nombresBat) + ( bp.productionOuvrier * bpp.nombresOuvrier) AS production_totale
  FROM batiments_prod AS bp INNER JOIN batimentproductionplayer AS bpp 
  ON bp.id = bpp.idBatiment WHERE bpp.id_player = ? AND bpp.idBatiment = ?');
$affichebat->execute(array($idOfUser,$idbat));
 $infosbat = $affichebat->fetch();

