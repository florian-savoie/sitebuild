<?php 
    require('actions/users/showOneUsersProfileAction.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($getHisQuestions)){

                ?>
                <div class="card">
                    <div class="card-body">
                        <h4>@<?= $user_pseudo; ?></h4>
                        <hr>
                        <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                    </div>
                </div>
                <br>
                <?php
                while($batprod = $getbatprod->fetch()){ 
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <?= $batprod['titre']; ?>
                        </div>
                        <div class="card-body">
                            <?= $batprod['description']; ?>
                        </div>
                        <div class="card-footer">
                            Par <?= $batprod['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                        </div>
                    </div>
                    <br>
                    <?php
                }

            }
        ?>  
    </div>

</body>
</html>