<?php
 require('actions/users/profilplayer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <br><br>

    <div class="container blockjeux">
    <?php include 'includes/navbf.php'; ?>

        <div class="row col-12">
       
<h2 style="color:green;">Bienvenue <?= $info["pseudo"] ?></h2>
<h2 style="color:green;">vous avez  <?= $info["date"] ?>jour d'ancienneter</h2>
<img src="<?= $info["img"] ?>" alt="" style="height:150px;width:150px">


<form method="POST">
  <div class=" row col-12 mb-3">
   <div class="col-6">
    <label for="imd" class="form-label"style="color:white;">img</label></div>
   <div class="col-6">
    <input type="text" class="form-control" id="img" placeholder="Enter la nouvel image" name="img"style="width:300px;"></div>
  </div>
  <button type="submit" class="btn btn-primary">Evoyer</button>
</form>
        </div>

    </div>

</body>

</html>