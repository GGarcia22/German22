<?php


require __DIR__ .'/../../classes/DB.php';
require __DIR__ .'/../../classes/Config.php';
require __DIR__ .'/../../models/Model.php';


$model = new Model;
$clubes= $model->all();
$config=Config::getConfig();

