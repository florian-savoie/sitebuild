<?php

session_start();
require('../../actions/database.php');


            //Insérer l'utilisateur dans la bdd partie users 
            $insertUserdatedeco = $bdd->prepare('UPDATE users SET date_derniere_co = ? where id = ?');
            $insertUserdatedeco->execute(array(time(),$_SESSION['id']));
$_SESSION = [];
session_destroy();
header('Location: ../../acceuil2.php');