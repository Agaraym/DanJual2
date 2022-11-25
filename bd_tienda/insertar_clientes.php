<?php

$cod_cliente=$_POST['cod_cliente'];
$nombre_cliente=$_POST['nombre_cliente'];
$dni_cliente=$_POST['dni_cliente'];
$fecNacimiento_cliente=$_POST['fecNacimiento_cliente'];
$NumTarjeta_cliente=$_POST['$NumTarjeta_cliente'];
$ciudad_cliente=$_POST['$ciudad_cliente'];
$numUnico_scrsl=$_POST['$numUnico_scrsl'];


//1. conectar la base de datos con el servidor

include("servidor.php");

//2. Ejecutar la consulta

$Insertar_clientes="INSERT INTO `clientes`(`cod_cliente`, `nombre_cliente`, `dni_cliente`, `fecNacimiento_cliente`, `NumTarjeta_cliente`, `ciudad_cliente`, `numUnico_scrsl`) VALUES ('$cod_cliente','$nombre_cliente','$dni_cliente','$fecNacimiento_cliente','$NumTarjeta_cliente','$ciudad_cliente','$numUnico_scrsl')";

mysqli_query($conn, $Insertar_clientes);

//3. cerrar la conexión de la base de datos 

mysqli_close($conn);

echo "Sus datos han sido guardados  exitosamente";

?>

<!doctype html5>
<html lang="es">

<body>
<script type="text/javascript">
alert("Usuario ingresado exitosamente");
window.location.href="form_clientes.php";
</script>
</body>

</html>
