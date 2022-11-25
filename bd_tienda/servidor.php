


<?php
// se agrega datos del servidor

$servername= "127.0.0.1";
$database="danjual";
$username="root";
$password="";

// variable para la conexion

$conn=mysqli_connect($servername,$username,$password,$database);
 
// condicional para la conexion 

if (!$conn) {

     die("Conexion fallida".mysqli_connect_error($conn));


} else {
    
    echo "Conexion exitosa";
   
}







?>
