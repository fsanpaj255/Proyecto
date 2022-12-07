<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <form id="loginform" method="POST" action="">
                        <label>Nombre de usuario</label>
                        <input type="text" name="nombreusuario" required>
                        <label>Correo electrónico</label>
                        <input type="text" name="correo"  required>
                        <label>Contraseña</label>
                        <input type="password" name="contrasena" required>
                        <label>Foto</label>
                        <input type="file" name="camara">
                        
                        <label>Latitud</label>
                        <input type="text" name="latitud" id="latitudex" required>
                        <label>Longitud</label>
                        <input type="text" name="longitud" id="longitudey"  required>
                        <button type="submit" name="localizacionbtn" id="btncapturar" class="button-azul">Capturar Localización</button>
                        
                        <button type="submit" title="registrar" name="registrar" class="button-azul">Registrarse</button>
                    </form>
                    </div>
                    <div class="inferior">
                    <a href="?menu=autentifica">Volver</a>
                    </div>
            </div>
        </div>
            
    </body>
</body>
</html>
    
