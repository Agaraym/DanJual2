<?php
 // conectamos la base de datos 

 include ("servidor.php");
 
 // ejecutar la base de datos

 $Seleccionar_Registros="SELECT * FROM `producto` ORDER BY `nombre_prod`";
$Respuesta__seleccion_Registros =mysqli_query($conn,  $Seleccionar_Registros );

?>
<!doctype html5>
<html lang="en">
<head>
<<meta charset="utf-8">
        <meta name="description">
        <meta name="keyboards">
        
        <title>consulta_productos.php</title>
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
            margin-left: 2%;
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
VISUALIZAR PRODUCTOS
</h1>
<table class="table" text-center>
        <thead>
            <tr>
            <th scope="col">COD_PROD</th>
            <th scope="col">NOMBRE_PROD</th>
            <th scope="col">DESC_PROD</th>
            <th scope="col">DESCRIPCION_PROD</th>
            <th scope="col">COLOR_PROD</th>
            <th scope="col">COSTOFIJO_PROD</th>
            <th scope="col">IMAGEN_PROD</th>
            <th scope="col">CATEGORIA_ID</th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>

        </tr>
  </thead>
        <tbody>
            <tr>
            <?php
                while($Mostrar_Registro=mysqli_fetch_array($Respuesta__seleccion_Registros)) {
                echo "<tr>";   
                    echo "<td>".$Mostrar_Registro['cod_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['nombre_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['desc_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['descripcion_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['color_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['costoFijo_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['imagen_prod']."</td>";
                    echo "<td>".$Mostrar_Registro['categoria_id']."</td>";
                    
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
