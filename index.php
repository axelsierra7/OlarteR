<?php

error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if ($actualsesion == null || $actualsesion == '') {
    header('location: nouser.php');
} else {
    header('location: inicio.php');
}
