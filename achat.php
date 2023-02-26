<?php
require('actions\questions\acheterdivers.php')
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
                <div class="row">
                    <div class="col-6"><img src="<?= $infosbat['img'] ?>" alt="" style="width:100%;">
                    </div>
                    <div class="col-6">
                        <p style="color:white;"> vous avez <?= $infosbat['nombre_batiments'] ?><?= $infosbat['nom'] ?></p>
                        <p style="color:white;">contenant <?= $infosbat['nombre_ouvriers'] ?>ouvriers</p>
                        <p style="color:white;">  vous produisez  chaques jour <?= $infosbat['production_totale'] ?> grace a vos batiment et ouvrier</p>
                    </div>

                </div>
                <p style="color:white;">description </p>
                <p style="color:white;"><?= $infosbat['description'] ?></p>



            </div>
            <div class="blockdroit">
                <div class="row my-4">
                    <form>
                        <label for="achat">acheter :</label>
                        <input type="number" id="achat" name="achat" style="display: inline-block; width:100px;"><strong>unites <input type="submit" value="Envoyer" style="display: inline-block;"></strong><br><br>
                    </form>
                    <p>prix unitaire <?= $infosbat['prix'] ?></p>
                </div>
                <h2>dddd </h2>
            </div>
        </div>

    </div>

</body>

</html>