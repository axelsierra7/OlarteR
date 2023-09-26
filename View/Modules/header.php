<?php

$conexion = mysqli_connect("127.0.0.1", "root", "", "olarte_db");
if (!$conexion)

    die("Parece que se cayo el servidor");

?>
<header>
    <div class="barra-cabecera">
        <ul class="menu">
            <a href="inicio.php?pagina=usuario"><img alt=""><i class="fa-solid fa-bars fa-2xl"></i></a>
            <a href="inicio.php?pagina=catalog"><img alt=""><i class="fa-solid fa-book-bookmark fa-2xl"></i></a>
            <img class="logo" src="View/Resources/Img/LOGO1.png" alt="Logo">

            <form action="Model/closeSession.php" method="GET">
                <button class="menu__a" name="cerrar_sesion" type="submit">
                    <i class="fa-solid fa-right-from-bracket fa-2xl"></i>
                </button>
            </form>
            <a href="./login.php"><img class="carrito" src="" alt="">
                <i class="fa-solid fa-cart-shopping fa-2xl"></i>
            </a>
            <a href="./login.php"><img class="auto" src="View/Resources/Img/" alt="">
                <i class="fa-solid fa-car fa-2xl"></i>
            </a>
        </ul>

    </div>
</header>