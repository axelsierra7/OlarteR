<?php
include 'conexion.php';

//SCRIPT PARA REGISTRAR UN NUEVO USUARIO

$nomb = $_POST['nam'];
$ape = $_POST['apepm'];
$tell = $_POST['tel'];
$email = $_POST['mail'];
$pwrd = $_POST['pass'];

$iduser = rand(1, 200);
$idrol = 2;

//CONSULTA QUE INSERTA NUEVOS DATOS EN LA TABLA USUARIOS

mysqli_query($conexion, "INSERT INTO usuarios(id_user,name,apellido_p,email,tel,contrasena,rol) VALUES ('$iduser','$nomb','$ape','$email','$tell','$pwrd','$idrol')");
header('location:../login.php');
