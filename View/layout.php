<!DOCTYPE html> <!------------------Layout o plantilla principal del sistema ----------------->
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
    <!-- FUENTES Y RECURSOS JS O MAS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<body>

    <?php include "View/Modules/header.php" ?>

    <div class="container">




        <?php
        error_reporting(0);

        if (isset($_GET["pagina"])) {

            if (
                $_GET["pagina"] == "usuario" ||

                $_GET["pagina"] == "roles" ||
                $_GET["pagina"] == "catalog"

            ) {

                include "Pages/" . $_GET["pagina"] . ".php";
            }
        } else ($_GET == null)[include 'Pages/prueba.php']

        ?>


    </div>
    <!-- SCRIPTS DE JS -->
    <script src="https://kit.fontawesome.com/f8ecd0f0cc.js" crossorigin="anonymous"></script>
    <script src="View/Resources/JS/Main.js"></script>
</body>


</html>