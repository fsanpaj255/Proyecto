
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Registro</title>
       <link rel="stylesheet" href="/CSS/style.css">
      
   </head>
   <body>
       <form action="./controllers/controladorLogin.php" method="post" id="formulario" class="login">
           <input type="text" name="correo" placeholder="Correo electrónico">      
           <br>
           <input type="password" name="contraseña" placeholder="Contraseña">       
           <br>
           <input type="submit" value="Iniciar sesión" name="inicioSesion"/>
       </form>
   </body>
   </html>

