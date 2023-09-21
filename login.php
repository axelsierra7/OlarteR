<?php echo __DIR__ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="View/Resources/CSS/Stylesheet.css">
    <title>Inicio de Sesion</title>
</head>

<body>
    <header>
        <div class="barra-cabecera">
            <ul class="menu">
                <a href="nouser.php"><img class="flechita" src="View/Resources/Img/flechareg.png" alt=""></a>
                <a href="catalogo.php"><img alt=""><i class="fa-solid fa-book-bookmark fa-2xl"></i></a>
                <img class="logo" src="View/Resources/Img/LOGO1.png" alt="Logo">


                <a href="login.php"><img class="carrito" src="" alt="">
                    <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                </a>
                <a href="login.php"><img class="auto" src="View/Resources/Img/" alt="">
                    <i class="fa-solid fa-car fa-2xl"></i>
                </a>
            </ul>

        </div>
    </header>

    <div class="formulario">
        <h1>Inicia Sesion</h1>
        <form method="post" action="Model/validarUser.php">
            <div class="username">
                <input type="text" required name="mail" placeholder="Correo Electronico" style="color: white;">

            </div>
            <div class="contra">
                <input type="password" required name="pass" placeholder="Contraseña" style="color: white;">

            </div>
            <div class="recordar">Olvide la contraseña</div>
            <input type="submit" value="Acceder">
            <div class="registrarse">
                <a href="./register.html">Crear Cuenta</a>
            </div>

        </form>

    </div>
    <img class="camioneta" src="View/Resources/Img/camioneta.png" alt="">

</body>

</html>