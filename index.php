<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if ($actualsesion == null || $actualsesion == '') {
    header('location: nouser.php');   //NO USER indica que se rediccionara a el archivo el cual contiene el HTML vista para un cliente no registrado
} else {
    header('location: inicio.php');   //SI EXISTE UNA SESION INICIADA ENTONCES MANDAR A INICIO (Index) respectivo
}
