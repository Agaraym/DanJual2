<!--Autores ADJ Software -->
<!DOCTYPE html5>
<html lang="es">


    <head>
        <meta charset="utf-8">
        <meta name="description">
        <meta name="keyboards">
        
        <title>Categorias.php</title>
        <link rel="stylesheet" href="Css/Usuarios.css">
    
        <meta content="width=device-width, initial-scale=1" maximum-scale="1" user-scaleble="no" name="viewport">
        <link rel="icon" href="Imagenes/icon-page.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style type="text/css">
        body{
        background-image:url(Imagenes/background-category.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        box-shadow: ;
        color:black;
         line-height: 1.42857143;
         background-repeat:repeat;
         img-responsive;
}       
         .category-box{
            box-shadow: 10px 2px 5px 0px rgba(0,0,0,0.75);
            opacity: 0.7;
            background: black;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 35%;
            height: 50%;
            padding: 20px;
            border-top: 0px;
            color:#666;
            margin: 0;
            margin-left: 31%;
            margin-top: 8%;
            text-align: center;
            padding: 0 20px 20px 20px;
            padding-top: 3%;
            padding-bottom: 5%;
         }
            .text{
              color: yellow;

            }
            
           .btn-primary{
             padding-left: -5%;
             margin-left: 100%;
             

           }
           .btn-secondary{
            content: center;
            padding-left: -10%;
            margin-left: 125%;
            
           }

         .Footer{
         padding-top: 3%;
         color: yellow ;


}         @media :-moz-full-screen{

            :-webkit-full-screen
        
}
           @media screen {
             scroll-behavior ::content;
             display: :content;
           }   
            @media screen {
               and (min-device-width: 100px)
               and  (max-device-height: 100px)
                and (-webkit-animation-play-state: ::content;)
                   body{
                     line-height: 1;
                   }

            }


        </style>
    </head>

<header>
    


</header>
<body>
<main>
<div>
<section>


 
<div class="category-box" style="width=100px, height: 100px">
<p class="text">INGRESAR CATEGORIA</p>

<form method="Action/Categorias.php" enctype="multipart/form-data">

    <div class="form-group has-feedback">
     <input type="text" class="form-control" placeholder="Id" name="ingId" required>
     <span class="glyphicon glyphicon-lock form-control-feedback"></span>


    </div>
   <div class="form-group has-feedback">
    <input type="text" class="form-control" placeholder="Categoria" name="ingCategorias"required>
    <span class="glyphicon glyphicon-list form-control-feedback"></span>
    
   </div>
    <div class="row">
    <div class="col-xs-4">
    <table>
        <tr>
    <td>
    <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
    </td>
     <td>
    <button type="reset" class="btn btn-secondary btn-block btn-flat">Borrar</button>
   </td> 
     </tr>
    </table>
    </div>
    </div>
    <!------------------------------------------------------------------------------------------>
  <!--Nota esta funcion es cuando se ingresa los datos erroneos, funcion con operaciones en php-->  
 <!--<div class="alert alert-danger">Error al ingresar, intentalo de nuevo</div>


 </div>-->
 





</form>




</div>
    





</section>




</div>





</main>




</body>





<footer>
<div class="footer">
<p class="Mensaje">2022 Copyright derechos reservados ADJ Software</p>
</div>

</footer>


</html>

