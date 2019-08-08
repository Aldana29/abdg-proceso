
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
      