<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: acceuil2.php');
}