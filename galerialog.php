<?php 
session_start();


$login = $_POST['login'];
$haslo = $_POST['pass'];
$_SESSION['haslo']=$haslo;

header("Location: https://mmevents.pl/$login.php");





?>