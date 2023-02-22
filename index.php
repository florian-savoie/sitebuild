<?php
session_start();
require('actions\questions\affichageBatPodbase.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container blockjeux">
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
                        ?><tr>
                                <td class="affichagebatprod"><?= $batprod['nombresBat']; ?></td>
                                <td class="affichagebatprod affichagebatprodnom"  ><?= $batprod['nom']; ?></td>
                                <td class="affichagebatprod"><?= $batprod['productionBatNombres']; ?></td>
                                <td class="affichagebatprod"><?= $batprod['productionOuvrierNombres']; ?></td>
                                <td class="affichagebatprod"><a href="index.php?construction=<?= $batprod['id']; ?>"><img src="http://www.buildandfight.com/images/details.gif" alt=""></a></td>
                            </tr>
                        <?php
                        } ?>

                    </tbody>
                </table>

            </div>
            <div class="blockdroit">
                <h2>dddd</h2>
            </div>
        </div>

    </div>

</body>

</html>