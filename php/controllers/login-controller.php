<?php
session_start();

require __DIR__ . '/../classes/DB.php';

$db= DB::getConn();

$sql = 'SELECT * FROM admins WHERE email = "' . $_POST['email'] . '"';

$query = $db->prepare($sql);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_OBJ);

echo '<pre>';
var_dump($usuario);

if($usuario && $usuario->password == $_POST['password']){
     $_SESSION['auth']=true;
     $_SESSION['id']=$usuario->id;
     header('location: /TP2/home.php');
}else{
    $_SESSION['message']=[
        'type'=> 'danger',
        'text'=> 'El usuario o la contraseña son incorrectas'
    ];
    header('location: /TP2/acceso.php');
}