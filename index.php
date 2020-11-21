<?php
session_start();
include_once("head.php");
include_once("nav.php");




if(!isset($_SESSION['auth'])|| !$_SESSION['auth']){
    header('location: /davinci/ProduccionWeb/TP2/acceso.php');
}


