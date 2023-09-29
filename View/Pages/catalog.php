<div class="catalog">
    <div class="search">
        <input type="search" placeholder="Busca tu Archivo" id="Buscador" />
    </div>
    <div class="productos">
        <?php foreach ($conexion->query("SELECT * FROM stockrefacciones") as $consult) { ?>
            <div class="producto">


                <p class="titulo-p"><?php print $consult['nombre'] ?></p>
                <p class="titulo-p"><?php print $consult['marca'] ?></p>
                <p class="p-titu"><?php print "$" . $consult['price'] ?></p>

                <img class="img-p" src="View/Resources/Img/iconos/AGSF-32C CHAMPION.png" alt="">
                <p class="titulo-p">Refaccion</p>

                <hr>

                <div class="botones">
                    <a href="">AÑADIR AL CARRITO</a>
                    <a href="">Detalles</a>
                </div>

            </div>
        <?php  }  ?>
    </div>

</div>