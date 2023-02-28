<?php
session_start();
require('../../actions/questions/majressourceplayer.php');

$_SESSION = [];
session_destroy();
header('Location: ../../acceuil2.php');