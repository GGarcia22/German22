<?php

require __DIR__.'/../classes/DB.php';
$db=DB::getConn();

if (isset($_FILES['escudo']) && $_FILES['escudo']['tmp_name']) {
    $destino = __DIR__ . '../../../escudos/';
    $nombre = uniqid();
    $ext = pathinfo($_FILES['escudo']['name'], PATHINFO_EXTENSION);
    $escudo = "$nombre.$ext";
    move_uploaded_file($_FILES['escudo']['tmp_name'], "$destino$escudo");
}

$query = $db->prepare('INSERT INTO clubes (nombre, ciudad, año_fundacion, origenes, escudo, id_categoria) VALUES (:nombre, :ciudad, :año_fundacion
:origenes, :escudo, :id_categoria)');

$query->execute([
    ':nombre' => $_POST["nombre"],
    ':ciudad' => $_POST["ciudad"],
    ':fundacion' => $_POST["año_fundacion"], 
    ':origenes' => $_POST["origenes"],
    ':escudo' => $escudo,
    ':id_categoria' => $_POST["id_categoria"]
]);


$_SESSION['alert'] = [
    'message' => 'Se agrego el club',
    'type' => 'success'
];

header('location: ../admin/clubes/upload.php');