<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olarte refaccionaria</title>
    <!----------------------PRELOADS------------------------------------->

    <!-- Normalize -->
    <link rel="preload" href="View/Resources/CSS/Normalize.css" as="style">
    <link rel="stylesheet" href="View/Resources/CSS/Normalize.css">
    <!-- HOJA DE ESTILOS -->
    <link rel="preload" href="View/Resources/CSS/Stylesheet.css" as="style">
    <link rel="stylesheet" href="View/Resources/CSS/Stylesheet.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<body>

    <header>
        <div class="sidebar" id="sidebar">
            <div class="content_siderbar"> <!--sidebar INICIO -->

                <ul>
                    <li><a href="">Iniciar Sesion</a></li>
                    <li><a href="">registrarse</a></li>
                </ul>
                <hr>
                <p class="side_titu">Categorias</p>
                <hr>
                <p class="side_titu">Promociones</p>
                <hr>
                <p class="side_titu">Encuentranos</p>
                <hr>
                <p class="side_titu">Contactános</p>


            </div>
        </div>
        <div class="barra-cabecera">
            <ul class="menu">
                <a href="./nouser.php">
                    <img class="logo" src="View/Resources/Img/iconos/Logo_Olarte.png" alt="Logo"></a>

                <div class="search">
                    <input type="search" class="search__input" placeholder="Busca tu Archivo" id="Buscador">
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

    <div class="container">









    </div>

    <script src="https://kit.fontawesome.com/f8ecd0f0cc.js" crossorigin="anonymous"></script>
    <script src="View/Resources/JS/Main.js"></script>
</body>


</html>