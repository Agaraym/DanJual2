<?php

$id=$_POST['id'];
$nombre_usuario=$_POST['nombre_usuario'];
$clave=$_POST['clave'];
$estado=$_POST['estado'];


//1. conectar la base de datos con el servidor

include("servidor.php");

//2. Ejecutar la consulta

$Insertar_Usuarios="INSERT INTO `usuarios`(`id`, `nombre_usuario`, `clave`, `estado`) VALUES ('$id','$nombre_usuario','$clave','$estado')";

mysqli_query($conn, $Insertar_Usuarios);

//3. cerrar la conexión de la base de datos 

mysqli_close($conn);

echo "Sus datos han sido guardados  exitosamente";

?>

<!doctype html5>
<html lang="es">

<body>
<script type="text/javascript">
alert("Usuario ingresado exitosamente");
window.location.href="Usuarios.php";
</script>
</body>

</html>