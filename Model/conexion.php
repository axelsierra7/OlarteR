<?php

$tabla_db1 = "users";

$conexion = mysqli_connect("127.0.0.1", "root", "", "olarte_db");
if (!$conexion)

    die("Parece que se cayo el servidor");
