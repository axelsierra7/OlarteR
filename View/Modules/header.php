<?php

$conexion = mysqli_connect("127.0.0.1", "root", "", "olarte_db");
if (!$conexion)

    die("Parece que se cayo el servidor");

?>
<header>
    <?php include "menu.php" ?>
    <div class="barra-cabecera">
        <ul class="menu">
            <a href="inicio.php">
                <img class="logo" src="View/Resources/Img/iconos/Logo_Olarte.png" alt="Logo">
            </a>

            <div class="search">
                <input type="search" class="search__input" placeholder="Busca tu Archivo" id="Buscador" />
            </div>

            <a href="inicio.php?pagina=catalog"><img alt=""><i class="fa-solid fa-book-bookmark fa-xl"></i></a>
            <a href="login.php"><img class="carrito" src="" alt="">
                <i class="fa-solid fa-cart-shopping fa-xl"></i>
            </a>
            <a href="login.php"><img class="auto" src="View/Resources/Img/" alt="">
                <i class="fa-solid fa-car fa-xl"></i>
            </a>
            <input onclick="mostrarSidebar()" type="checkbox" id="check">
            <label for="check"><i class="fa-solid fa-bars fa-xl" id="btn"></i></label>
            <!-- CERRAR-->
            <input type="checkbox" id="cancel">
            <label onclick="ocultarSidebar()" class="cancel" for="cancel"><i class="fa-solid fa-circle-xmark fa-2xl" id="cancel-btn" style="color: #ff0000;"></i></label>
        </ul>

    </div>
</header>