<?php
session_start();                   //SCRIPT QUE USAMOS PARA VALIDAR EL LOGIN ---------------------
$user = $_POST['mail'];
$pass = $_POST['pass'];


$_SESSION['suc'] = $user;
$conexion = mysqli_connect("127.0.0.1", "root", "", "olarte_db");
$resultado = mysqli_query($conexion, "SELECT id_user,email,contrasena,rol FROM usuarios WHERE email = '" . $user . "' and contrasena='" . $pass . "'");
$filas = mysqli_fetch_array($resultado);
if ($filas['rol'] == 1) {
    $_SESSION['id'] = $filas['id'];
    header("location: " . __DIR__ . "inicio.php");
} else if ($filas['rol'] == 2) {
    $_SESSION['client'] = $filas['id_user'];
    header("location: ../inicio.php");
} else {


    echo ' <script> alert("hola")</script>';


?>
        <?php header("<h1>ERROR</h1>"); ?>
    
                <?php
            }

            mysqli_free_result($resultado);
            mysqli_close($conexion);
                ?>