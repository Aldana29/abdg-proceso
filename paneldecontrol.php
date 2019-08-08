<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda - Kits imprimibles</title>
    <link href="img/favicon.png" rel="shortcut icon">
    <link href="css/paneldecontrol.css" rel="stylesheet">
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


<!---------------------------------------------------------------------------------------------------------------------
    ABRE PHP
---------------------------------------------------------------------------------------------------------------------
-->

<?php

// 1. Me conecto a la bd 
include("conexion.php");

// 2. Creo la consulta 
$mostrar = "SELECT `id_producto`,`nombre`, `imagen` FROM `kits_imprimibles`";
    

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
       
    echo '<div class="contenedor-productos">';

     while(
         $producto=mysqli_fetch_array($mostrar_ej)
     ) {

        echo '<a href="editar.php?id=';
        echo $producto['id_producto'];
        echo'"'; 
        
        echo 'class="listado-productos">';
        echo $producto['nombre'];
        ?>

        <img src="imagenproducto/<?php echo $producto['imagen'];?>" alt"">

        <?php

        echo'</a>';

        } //Cierra While

    }//Cierra else

?>
      
<!---------------------------------------------------------------------------------------------------------------------
    CIERRA PHP
---------------------------------------------------------------------------------------------------------------------
-->

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