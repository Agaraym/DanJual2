<?php
 // conectamos la base de datos 

 include ("servidor.php");
 
 // ejecutar la base de datos

 $Seleccionar_Registros="SELECT * FROM `usuarios` ORDER BY  `nombre_usuario`";
$Respuesta__seleccion_Registros =mysqli_query($conn,  $Seleccionar_Registros );

?>
<!doctype html5>
<html lang="en">
<head>
<<meta charset="utf-8">
        <meta name="description">
        <meta name="keyboards">
        
        <title>consulta_usuario.php</title>
       <meta content="width=device-width, initial-scale=1" maximum-scale="1" user-scaleble="no" name="viewport">
        <link rel="icon" href="Imagenes/icon-page.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style type="text/css">

            <style type:txt/css>
            @font-face{
             font-family=:"titulo";
            src:url(Fuentes/AdrenalinesDemoRegular.woff);

            }


          h1{
          font-family: "titulo";


          }
          body{
         background-image: url(Imagenes/font-table.jpg);
         background-repeat: no-repeat;
         background-size: cover;
         background-attachment: fixed;
         color: black;
         line-height:  1.42857143;



          }
          .table {
            box-shadow: 10px 2px 5px 0px rgba(0,0,0,0.75);
            opacity: 0.8;
            background: black;
            width: 50%;
            height: 100%;
            padding: 20px;
            border-top: 0px;
            color:#666;
            margin-left: 25%;
            margin-top: 5%;
            text-align: center;
            padding: 0 20px 20px 20px;

          }
            .text{
             padding-top: 5%;


            }


            </style>

</head>
<body>
<h1 class="text-center">
VISUALIZAR USUARIOS
</h1>
<table class="table" text-center>
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE_USUARIO</th>
            <th scope="col">CLAVE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">EDITAR </th>
            <th scope="col">ELIMINAR</th>
        </tr>
  </thead>
        <tbody>
            <tr>
            <?php
                while($Mostrar_Registro=mysqli_fetch_array($Respuesta__seleccion_Registros)) {
                echo "<tr>";   
                    echo "<td>".$Mostrar_Registro['id']."</td>";
                    echo "<td>".$Mostrar_Registro['nombre_usuario']."</td>";
                    echo "<td>".$Mostrar_Registro['clave']."</td>";
                    echo "<td>".$Mostrar_Registro['estado']."</td>";
                    
                    ?> 
                    <div class="imagenes">  
                     <td><a href=""><img src="Imagenes/modificar-1.png" width="45%" alt="" ></a></td>
                     <td><a href=""><img src="Imagenes/borrar.jpg" width="80%" alt=""></a></td>
                    </div>
               <?php
                 }
                ?>

            </tr>
        </tbody>
    </table>
    <a href="Menu.php" ><img src="Imagenes/imagen-menu.png" width="8%"></a>


</body>






<footer>
 <p class="text">2022 Copyright derechos reservados ADJ Software</p>

</footer>



</html>
