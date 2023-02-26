<?php
require('actions\questions\affichageBatPodbase.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <br><br>
    <div class="container blockjeux">
        <?php require('includes/navbf.php'); ?>

        <div class="row">
            <div class="blockgauche">


                <p class="mabase p-2"><strong> Ma base</strong></p>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <td>
                                <font color="#95cd99"><b>Qté</b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>Bâtiment </b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>Production bat / jour</b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>production ouvrier / jour</b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>detail</b></font>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($batprod = $getbatprod->fetch()) {

                        ?>
                            <?php if ($batprod['nombresBat'] > 0) {      ?>
                                <tr>
                                    <td class="affichagebatprod"><?= $batprod['nombresBat']; ?></td>
                                    <td class="affichagebatprod affichagebatprodnom"><?= $batprod['nom']; ?></td>
                                    <td class="affichagebatprod"><?= $batprod['productionBatNombres']; ?></td>
                                    <td class="affichagebatprod"><?= $batprod['productionOuvrierNombres']; ?></td>
                                    <td class="affichagebatprod"><a href="achat.php?id=<?= $batprod['id']; ?>"><img src="http://www.buildandfight.com/images/details.gif" alt=""></a></td>
                                </tr>

                        <?php
                            }
                        } ?>

                    </tbody>
                </table>
                <p>Batiment de guerre</p>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <td>
                                <font color="#95cd99"><b>Qté</b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>Bâtiment </b></font>
                            </td>
                            <td>
                                <font color="#95cd99"><b>Details </b></font>
                            </td>

                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($batg = $getbatguerre->fetch()) {

                        ?>
                            <?php if ($batg['nb_batiments'] > 0) {      ?>
                                <tr>
                                    <td class="affichagebatprod"><?= $batg['nb_batiments']; ?></td>
                                    <td class="affichagebatprod affichagebatprodnom"><?= $batg['nom_batiment']; ?></td>
                                    <td class="affichagebatprod"><a href="achat.php?id=<?= $batg['id']; ?>"><img src="http://www.buildandfight.com/images/details.gif" alt=""></a></td>

                                </tr>

                        <?php
                            }
                        } ?>

                    </tbody>
                </table>


                <div class="d-flex mb-2">

                    <table>
                        <tbody>
                            <tr>
                                <td style="padding-left:4px;padding-top:1px;"><a href="#"><img src="assets/img/ongletdirection/historiquenew.jpg" border="0"></a></td>
                                <td style="padding-left:4px;padding-top:1px;"><a href="#"><img src="assets/img/ongletdirection/vos_objectifsnew.jpg" border="0"></a></td>
                                <td style="padding-left:4px;color:#95cd99;font-size:11px;">
                                    <p style="margin:0px; padding:0px; "><b><?= $_SESSION['pseudo'] ?></b><span style="color:#FFFFFF;">, Terrain :</span>
                                   <?= $terrain ?></p>
                                    <p style="margin:0px; position:relative;margin-top:-6px;font-size:10px;"><span style="color:#FFFFFF;">Grade 7:</span> Capitaine <img src="images/grades/cpt.gif" border="0" alt="" style="position:relative; top:2px;"></p>
                                    <table style="margin:0px; position:relative;margin-top:-2px;font-size:10px;width:130px;">
                                        <tbody>
                                            <tr>
                                                <td><a href="?content=bifees" style="color:#FFFFFF;">Bifees: </a><a href="?content=bifees" style="color:#95cd99;">30</a></td>
                                                <td style="text-align: right;"><a href="?content=recompenses" style="font-size:10px;">Recompenses</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="blockdroit">
                <div class="d-flex">
                    <a href=""><img src="assets/img/ongletbat/information sur votre empire.jpg" alt="" style="width: 352px;height:21px;"></a>
                </div>
                <div class="d-flex mt-2">
                    <a href=""><img src="assets/img/ongletbat/organisation.jpg" alt="" style="width: 176px;height:39px;"></a>
                    <a href=""><img src="assets/img/ongletbat/strategiedorganisation.jpg" alt="" style="width: 176px;height:39px;"></a>
                </div>
                <div class="d-flex mb-2">
                    <a href=""><img src="assets/img/ongletbat/statistique.jpg" alt="" style="width: 176px;height:39px;"></a>
                    <a href=""><img src="assets/img/ongletbat/strategiedefensive.jpg" alt="" style="width: 176px;height:39px;"></a>
                </div>
                <div class="d-flex mt-2">
                    <a href=""><img src="assets/img/ongletbat/menu de construction.jpg" alt="" style="width: 352px;height:21px;"></a>
                </div>
                <div class="d-flex">
                    <a href=""><img src="assets/img/ongletbat/dortoir2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/centrale_ther2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/puit_petrole2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/mine_or2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/cuisine2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/banque2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/universite2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/rafinerie2.jpg" alt="" style="width:44px;height:44px;"></a>
                </div>
                <div class="d-flex">
                    <a href=""></a><img src="assets/img/ongletbat/laboratoire2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/hangar_tank2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/aeroport2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/armurerie2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/mine_berium2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/trait_berium2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/centrale_nuc2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/puit_petrole2.jpg" alt="" style="width:44px;height:44px;"></a>
                </div>
                <div class="d-flex mb-2">
                    <a href=""><img src="assets/img/ongletbat/panel_construction_empty_item.gif" alt="" style="width:44px;height:44px;"></a>
                    <a href=""><img src="assets/img/ongletbat/tourelle2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/tourelle_canon2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/panel_construction_empty_item.gif" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/caserne2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/usine_guerre2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/dortoir2.jpg" alt="" style="width:44px;height:44px;"></a>
                    <a href=""></a><img src="assets/img/ongletbat/dortoir2.jpg" alt="" style="width:44px;height:44px;"></a>
                </div>
                <div class="d-flex">
                    <a href=""><img src="assets/img/ongletbat/panneau ressource.jpg" alt="" style="width: 352px;height:21px;"></a>
                </div>

                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td width="100%" valign="top">
                                <table cellpadding="0" cellspacing="0" width="95%" align="center" border="0">
                                    <tbody>
                                        <tr>
                                            <td>

                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/food.gif" border="0">&nbsp;Nourriture
                                                            </td>
                                                            <td align="right" style="color:#FF6600" nowrap="" width="40%">
                                                                <div id="res_10"><?= $ressource['nourriture'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/elec.gif" border="0">&nbsp;Electricité
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_9"><?= $ressource['electriciter'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/sp98.gif" border="0">&nbsp;SP98
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_8"><?= $ressource['sp98'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/sp95.gif" border="0">&nbsp;SP95
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_7"><?= $ressource['sp95'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/diesel.gif" border="0">&nbsp;Diesel
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_6"><?= $ressource['diesel'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="2"></td>
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/plutonium.gif" border="0">&nbsp;Plutonium
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_5"><?= $ressource['plutonium'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/uranium.gif" border="0">&nbsp;Uranium
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_4"><?= $ressource['uranium'] ?></div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/down.gif" border="0" alt="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/tiberium.gif" border="0">&nbsp;Berium
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_3"><?= $ressource['berium'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/gold.gif" border="0">&nbsp;Or
                                                            </td>
                                                            <td align="right" style="color:#FF0000" nowrap="" width="40%">
                                                                <div id="res_2"><?= $ressource['or'] ?></div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/down.gif" border="0" alt="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/petrol.gif" border="0">&nbsp;Pétrole
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_1"><?= $ressource['petrol'] ?>&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr height="1">
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="70" nowrap="">
                                                                <img src="assets/img/ongletbat/renta.gif" border="0">&nbsp;Renta
                                                            </td>
                                                            <td align="right" style="color:#FFFFFF" nowrap="" width="40%">
                                                                <div id="res_11">0&nbsp;</div>
                                                            </td>
                                                            <td align="right" nowrap="">
                                                                <img src="images/pause.gif" border="0" alt="" width="9">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </div>

    </div>

</body>

</html>