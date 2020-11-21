<?php
session_start();
require __DIR__ .'/../classes/DB.php';
require __DIR__ .'/../models/Model.php';

$model = new Model;
$drop = $model->drop();


$_SESSION['alert'] = [
    'message' => 'El club se borro con exito',
    'type' => 'success'
];

header('location: ../admin/clubes/index.php');