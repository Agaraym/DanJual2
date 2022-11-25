<?php

//  se carga el inicio
session_start();

// se crean las variables, par tomar los valores
$nombre_usuario = $_GET['nombre_usuario'];
$clave= $_GET['clave'];


include ("servidor.php");



$validar = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND clave = '$clave'";
mysqli_query($conn, $validar);


// esto válida si la consulta se ejecuto correctamente o no

// pero en ningún caso válida si devolvió algún registro


if(!$validar){

 echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error ";


echo mysqli_error($conn);

// si no se ingresa los datos correctos, arroja un error



} else {


echo "Bienvenido";
}



?>
<!DOCTYPE html5>
<html lang="es">
<body>
<script scr="txt/javascript">
 alert ("Ingreso correcto");
 window.location.href="Menu.php";
</script>


</body>



</html>