<?php
session_start();
$usuario = $_SESSION['suc'];
$sucursal = $_SESSION['id'];

include_once(__DIR__ . '/Model/conexion.php');
