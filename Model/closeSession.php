<?php
//ESTE ES EL SCRIPT PARA CERRAR LA SESION EN CURSO
if (isset($_GET['cerrar_sesion'])) {
    session_unset();

    session_destroy();
    header('location: ../index.php');
}
