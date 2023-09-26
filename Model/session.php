<?php
session_start();                         //ESTE SCRIPT AYUDA A TENER Y USAR LA SESION INICIADA
$usuario = $_SESSION['suc'];
$sucursal = $_SESSION['id'];
include_once(__DIR__ . '/Model/conexion.php');
