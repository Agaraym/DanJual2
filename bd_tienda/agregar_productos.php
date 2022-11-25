<?php

$cod_prod=$_POST['cod_prod'];
$nombre_prod=$_POST['nombre_prod'];
$desc_prod=$_POST['desc_prod'];
$descripcion_prod=$_POST['descripcion_prod'];
$color_prod=$_POST['color_prod'];
$costoFijo_prod=$_POST['costoFijo_prod'];
$imagen_prod=$_FILES['imagen_prod'];
$categoria_id=$_POST['categoria_id'];


//1. conectar la base de datos con el servidor

include("servidor.php");

//2. Ejecutar la consulta

$Insertar_productos="INSERT INTO `producto`(`cod_prod`, `nombre_prod`, `desc_prod`, `descripcion_prod`, `color_prod`, `costoFijo_prod`, `imagen_prod`, `categoria_id`) VALUES ('$cod_prod','$nombre_prod','$desc_prod','$descripcion_prod','$color_prod','$costoFijo_prod','$imagen_prod','$categoria_id')";

mysqli_query($conn, $Insertar_productos);






//3. cerrar la conexión de la base de datos 

mysqli_close($conn);

echo "Sus datos han sido guardados  exitosamente";

?>

<!doctype html5>
<html lang="es">

<body>
<script type="text/javascript">
alert("Producto ingresado exitosamente");
window.location.href="productos.php";
</script>
</body>

</html>