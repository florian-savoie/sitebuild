<?php

require('actions/database.php');
require('actions/users/signupAction.php');
$idOfUser = $_SESSION['id'];

$afficheinfos = $bdd->prepare('SELECT u.pseudo, u.email, DATEDIFF(CURDATE(), u.date) as date, p.grade ,p.img
FROM users u 
INNER JOIN profil_player p ON u.id = p.id_player 
WHERE u.id = ?');
$afficheinfos->execute(array($idOfUser));
 $info = $afficheinfos->fetch();

