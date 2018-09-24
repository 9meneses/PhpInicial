<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #666666">
        <div class ="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white">EJEMPLO DE INICIO DE SESIÓN EN PHP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                
                 </div>
                <div class="col-4">
                    <br><br>
                    <form action="index2.php">
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br>
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                    <br>
                    <button id="boton1" class="btn btn-primary btn-block">Primary</button>
                    <br>
                    
                     <p>
    Year (yyyy-mm-dd):
    <input data-validation="date" data-validation-format="yyyy-mm-dd">
  </p></form>
                </div>
                <div class="col-4"></div>
               
            </div>
        </div>
    </body>
        <?php
        // put your code here
      
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
        //document ready se ejecuta cuando la página se ha cargado correctamente
       $(document).ready(function(){
           //$('#cajaNombre').hide(); 
       });
       
       $.validate({
           lang: 'es'
       })
       
        $('#boton1').click(function(){
            console.log("aqui si que llega");
             $('#cajaNombre').show(2000); 
            //$('#nombre').val("Why you running?");
            //$('input[name = usuario_nombre]').val("Why you running?");
        });
        
    </script>
</html>
