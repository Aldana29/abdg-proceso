<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda - Kits imprimibles</title>
    <link href="img/favicon.png" rel="shortcut icon">
    <link href="css/tienda1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400i,500,700,900&display=swap" rel="stylesheet">

        <!-- META -->
        <meta name="description" content="Detallistas, obsesivas, fans del cafe y el chocolate. Cósmicamente conectadas. Amamos diseñar y eso se refleja en nuestros proyectos">
        <meta name="ABDG ESTUDIO DE DISEÑO" content="2019">
        <meta name="geo.region" content="AR">
        <meta name="geo.placename" content="Buenos Aires">
        <meta name="keywords" content="estudio de diseño, estudio de diseño grafico, kits imprimible, kit, imprimible, diseño de pagina web, redes sociales, diseño web responsive,
        diseño adaptable, responsivo, diseño de packaging, diseno, sitios web, desarrollo de sitio, branding, logotipo, editorial, animacion, eventos, ilustración">
</head>

<body>

    <header>
        <nav>
            <div class="hamburguesa">
                <div class="lineah"></div>
                <div class="lineah"></div>
                <div class="lineah"></div>
            </div>
            <a href="index.html"><img class="logo" src="img/logo.png" alt="AB logo"></a>
            <ul class="nav-lista">
                <li><a href="index.html#quienessomos">QUIENES SOMOS</a></li>
                <li><a href="index.html#quehacemos">QUE HACEMOS</a></li>
                <li><a href="galeria.html">NUESTROS TRABAJOS</a></li>
                <li><a href="tienda1.html">TIENDA</a></li>
                <li><a href="index.html#contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </header>

    <main>


        <div class="inicio-nuestros-trabajos">
            <p class="titulo-inicio">KITS IMPRIMIBLES</p>
            <p class="bajada-inicio">Conocé los kits que tenemos listos para que armes tu evento</p>
        </div>


        <div id="botonera-galeria">
            <button class="boton-seleccionado-galeria" onclick="filterSelection('todos')"> Todos</button>
            <button class="boton" onclick="filterSelection('baby')"> Baby</button>
            <button class="boton" onclick="filterSelection('bautismo')"> Bautismo</button>
            <button class="boton" onclick="filterSelection('cumpleanios')"> Cumpleaños kids</button>
            <button class="boton" onclick="filterSelection('comunion')"> Comunión</button>
            <button class="boton" onclick="filterSelection('adultos')"> Cumpleaños adultos</button>
            <button class="boton" onclick="filterSelection('quince')"> 15 años</button>
            <button class="boton" onclick="filterSelection('casamiento')"> Casamiento</button>
            <button class="boton" onclick="filterSelection('props')"> Props</button>
        </div>
<!---------------------------------------------------------------------------------------------------------------------
    ABRE PHP
---------------------------------------------------------------------------------------------------------------------
-->

<?php

// 1. Me conecto a la bd 
include("conexion.php");

// 2. Creo la consulta 
$mostrar = "SELECT `nombre`, `bajada`, `precio`, `imagen` FROM `kits_imprimibles`";
    

// 3. Ejecuto 
$mostrar_ej = mysqli_query(
    $conexion,
    $mostrar)
    ;

    

// 4. Pregunto si NO funcionó
 if ($mostrar_ej === false) {
    echo "Error, ver SQL: $mostrar";
     } else {
        //   echo "Vas bien";
       
    echo '<div class="contenedor-galeria">';

     while(
         $producto=mysqli_fetch_array($mostrar_ej)
     ) {

        ?>
         
        <div>
        <!-- <img class="foto1" src="img/kits/aviador1.jpeg"> -->
        <img class="cuadrado-galeria-foto" src="imagenproducto/<?php echo $producto['imagen'];?>" alt="">
        

        <?php
         echo '<div class="titulo-galeria-tienda"';

        //  echo '<div class="titulo-galeria-tienda"';
         echo '<p>';
         echo $producto['nombre'];
         echo '</p>';
         echo '</div>';



         echo '<div class="descripcion-galeria-tienda"';
         echo '<p>';
         echo $producto['bajada'];
         echo '</p>';
         
         echo '</div>';?>

        <div class="pie-galeria-tienda">
        <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>

        <?php
        echo '<div class="precio"';
        echo '<p>';
        ?> AR $ <?php
        echo $producto['precio'];
        echo '</p>';
        echo '</div>';?>
        </div>
        </div>

    <?php
        } //cierra while
      
     } //cierra else

?>
      
    


<!---------------------------------------------------------------------------------------------------------------------
    CIERRA PHP
---------------------------------------------------------------------------------------------------------------------
-->


        <div class="contenedor-galeria">

            <!-- ABRE CUADRADO -->
            <div class="filtro cumpleanios cuadrado-galeria-tienda">
                <div>

                    <a class="cuadrado-galeria-foto">
                        <img class="foto1" src="img/kits/aviador1.jpeg">
                        <img class="foto2" src="img/kits/aviador2.jpeg">
                    </a>

                    <div class="titulo-galeria-tienda">
                        <p>OSO AVIADOR</p>
                    </div>

                    <div class="descripcion-galeria-tienda">
                        <p>Candy bar</p>
                    </div>

                    <div class="['nombre'];">
                        <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                        <p class="precio">AR $50</p>
                    </div>

                </div>
            </div>
            <!-- CIERRA UN CUADRADO -->



            <!-- ABRE CUADRADO -->
            <div class="filtro cumpleanios cuadrado-galeria-tienda">
                <div>

                    <a class=" cuadrado-galeria-foto ">
                        <img class="foto1" src="img/kits/corona1.jpg">
                        <img class="foto2" src="img/kits/corona2.jpg">
                    </a>

                    <div class="titulo-galeria-tienda">
                        <p>Corona lima & violeta </p>
                    </div>

                    <div class="descripcion-galeria-tienda">
                        <p>Candy bar</p>
                    </div>

                    <div class="pie-galeria-tienda">
                        <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                        <p class="precio">AR $50</p>
                    </div>

                </div>
            </div>
            <!-- CIERRA UN CUADRADO -->



             <!-- ABRE CUADRADO -->
             <div class="filtro quince cuadrado-galeria-tienda">
                    <div>
    
                        <a class=" cuadrado-galeria-foto ">
                            <img class="foto1" src="img/kits/quince1.jpeg">
                            <img class="foto2" src="img/kits/quince2.jpeg">
                        </a>
    
                        <div class="titulo-galeria-tienda">
                            <p>Romántico</p>
                        </div>
    
                        <div class="descripcion-galeria-tienda">
                            <p>Stickers decorativos para envase corazón</p>
                        </div>
    
                        <div class="pie-galeria-tienda">
                            <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                            <p class="precio">AR $50</p>
                        </div>
    
                    </div>
                </div>
                <!-- CIERRA UN CUADRADO -->


                             <!-- ABRE CUADRADO -->
             <div class="filtro bautismo cuadrado-galeria-tienda">
                    <div>
    
                        <a class=" cuadrado-galeria-foto ">
                            <img class="foto1" src="img/kits/pajaritos1.jpeg">
                            <img class="foto2" src="img/kits/pajaritos2.jpeg">
                        </a>
    
                        <div class="titulo-galeria-tienda">
                            <p>Pajaritos y flores</p>
                        </div>
    
                        <div class="descripcion-galeria-tienda">
                            <p>Estampitas & invitaciones</p>
                        </div>
    
                        <div class="pie-galeria-tienda">
                            <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                            <p class="precio">AR $50</p>
                        </div>
    
                    </div>
                </div>
                <!-- CIERRA UN CUADRADO -->


                                             <!-- ABRE CUADRADO -->
             <div class="filtro comunion cuadrado-galeria-tienda">
                    <div>
    
                        <a class=" cuadrado-galeria-foto ">
                            <img class="foto1" src="img/kits/angelito1.jpeg">
                            <img class="foto2" src="img/kits/angelito2.jpeg">
                        </a>
    
                        <div class="titulo-galeria-tienda">
                            <p>Angelito celeste</p>
                        </div>
    
                        <div class="descripcion-galeria-tienda">
                            <p>Estampitas & invitaciones</p>
                        </div>
    
                        <div class="pie-galeria-tienda">
                            <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                            <p class="precio">AR $50</p>
                        </div>
    
                    </div>
                </div>
                <!-- CIERRA UN CUADRADO -->


                                                             <!-- ABRE CUADRADO -->
             <div class="filtro cumpleanios cuadrado-galeria-tienda">
                    <div>
    
                        <a class=" cuadrado-galeria-foto ">
                            <img class="foto1" src="img/kits/spiderman1.jpeg">
                            <img class="foto2" src="img/kits/spiderman2.jpeg">
                        </a>
    
                        <div class="titulo-galeria-tienda">
                            <p>Spiderman</p>
                        </div>
    
                        <div class="descripcion-galeria-tienda">
                            <p>Candy bar</p>
                        </div>
    
                        <div class="pie-galeria-tienda">
                            <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                            <p class="precio">AR $50</p>
                        </div>
    
                    </div>
                </div>
                <!-- CIERRA UN CUADRADO -->


                                                                             <!-- ABRE CUADRADO -->
             <div class="filtro baby cuadrado-galeria-tienda">
                    <div>
    
                        <a class=" cuadrado-galeria-foto ">
                            <img class="foto1" src="img/kits/baby1.jpeg">
                            <img class="foto2" src="img/kits/baby2.jpeg">
                        </a>
    
                        <div class="titulo-galeria-tienda">
                            <p>Baby animals</p>
                        </div>
    
                        <div class="descripcion-galeria-tienda">
                            <p>Cuadritos nacimiento</p>
                        </div>
    
                        <div class="pie-galeria-tienda">
                            <button class="boton-comprar"> <a href="tienda.html">COMPRAR</a></button>
                            <p class="precio">AR $50</p>
                        </div>
    
                    </div>
                </div>
                <!-- CIERRA UN CUADRADO -->

        </div>






    </main>


    <script src="js/nav.js"></script>
    <script src="js/tienda1.js"></script>


</body>

<footer>
    <div class="contenedor-footer">

        <div class="logo-footer">
            <img src="img/logo-footer.png">
        </div>


        <div class="footer-1">
            <p>© 2009-2019</p>
            <p>TODOS LOS DERECHOS RESERVADOS</p>
        </div>


        <div class="footer-2">
            <p>AB DISEÑO GRÁFICO</p>
            <p>Hecho con ❤</p>
        </div>
    </div>

</footer>





</html>