<!--Autores ADJ Software -->
<!DOCTYPE html5>
<html lang="es">


    <head>
        <meta charset="utf-8">
        <meta name="description">
        <meta name="keyboards">
        
        <title>productos.php</title>
        <link rel="stylesheet" href="Css/Usuarios.css">
    
        <meta content="width=device-width, initial-scale=1" maximum-scale="1" user-scaleble="no" name="viewport">
        <link rel="icon" href="Imagenes/icon-page.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style type="text/css">
        body{
        background-image:url(Imagenes/box-font.jpg);
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
            width: 70%;
            height: 90%;
            padding: 20px;
            border-top: 0px;
            color:#666;
            margin: 0;
            margin-left: 20%;
            margin-top: 8%;
            text-align: center;
            padding: 0 20px 20px 20px;
            padding-top: 3%;
            padding-bottom: 5%;
         }

             
            .text{
              color: yellow;

            }
            h4 {
             color: yellow;
            }


        



            
             .btn btn-primary{
              width: 5%;


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


 
<div class="category-box">
<form  action="agregar_productos.php"   class="row g-3" method="post" enctype="multipart/form-data" style="margin-left:100px; margin-right:100px;">
       <h4 class="text-center">AGREGAR PRODUCTOS</h4>
        <div class="col-12">
            <div class="col-md-8">
                <input type="text" class="form-control" id="cod_prod" name="cod_prod" placeholder="cod_prod">
                
                </div>  
        </div>

       
        <div class="col-md-6">
        <p><input type="text" class="form-control" id="nombre_prod" name="nombre_prod" placeholder="nombre_prod"></p>
        </div>

        <div class="col-md-6">
         <input type="text" class="form-control" id="'desc_prod" name="'desc_prod" placeholder="'desc_prod">
        </div>
        <!-- #region  -->
        
        <div class="col-md-6">
         <p id="text">descripcion_prod</p>
        <textarea  name="descripcion_prod" class="form-control" id="descripcion_prod" name="descripcion_prod" cols="6" rows="4" placeholder="descripcion_prod">
         
        </textarea>
         </div>
       
         <div class="col-md-6">
         <input type="text" class="form-control" id="color_prod" name="color_prod" placeholder="color_prod">
        </div>
        
        <div class="col-md-6">
         <input type="text" class="form-control" id="costoFijo_prod" name="costoFijo_prod" placeholder="costoFijo_prod">

        </div>
        Select image to upload:
        <div class="col-md-6">
         <input type="file" class="form-control" id="imagen_prod" name="imagen_prod" placeholder="imagen_prod">

        </div>
        </Select>
        

        <div class="col-md-6">
         <input type="text" class="form-control" id="categoria_id" name="categoria_id" placeholder="categoria_id">

        </div>

         <div class="col-12 text-center">
         
        <button type="submit" class="btn btn-primary" value="UPLOAD">Registrar</button>
        <button type="reset" class="btn btn-primary">Borrar</button>

    </div>


       
      
       

</form>

    </div>






    <!------------------------------------------------------------------------------------------>
  <!--Nota esta funcion es cuando se ingresa los datos erroneos, funcion con operaciones en php>-->  
 <!--<div class="alert alert-danger">Error al ingresar, intentalo de nuevo</div>-->


 </div>-->
 










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

