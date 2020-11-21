<?php


require __DIR__ .'/../../classes/DB.php';
require __DIR__ .'/../../models/Model.php';


$model = new Model;

$clubes=$model->find($_GET["id"]);