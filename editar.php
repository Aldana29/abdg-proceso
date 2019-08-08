
<html>
    <h1>Panel de Control</h1>

<?php

$id = $_GET['id'];
echo "Este es el producto N°$id";


?>

<form action="upload.php" method="post" enctype="multipart/form-data">  
    <h2>Subir nueva foto:</h2>
    <br>
    <input name="userfile" type="file">
    <br>
    <input type="submit" value="Subir imagen">
    <br>
    <input name="id" type="hidden" value="<?php 
    echo $id;
    ?>">
</form>


</html>