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
                    <form id="loginform" method="POST" action="?menu=register">
                        <label>Nombre de usuario</label>
                        <input type="text" name="nombreusuario" required>
                        <label>Identificador</label>
                        <input type="text" name="identificador" required>
                        <label>Correo electrónico</label>
                        <input type="text" name="correo"  required>
                        <label>Contraseña</label>
                        <input type="password" name="contrasena" required>
                        <label>Foto</label>
                        <div class="video-wrap">
                            <video id="video" playsinline autoplay></video>
                        </div>
                        <div class="controller">
                            <button id="btnFoto" class="button-camara"><img src="../../source/camara.png" class="editele"></button>
                        </div>
                        <canvas hidden id="canvas" width="200" height="200"></canvas>
                        <input type="file" id="inpFile" name="foto">
                        <label>Latitud</label>
                        <input type="text" name="latitud" id="latitudex" required>
                        <label>Longitud</label>
                        <input type="text" name="longitud" id="longitudey"  required>
                        <input type="button" name="localizacionbtn" id="btncapturar" class="button-azul" value="Capturar Localización">
                        <button type="submit" title="registrar" name="registrarse" class="button-azul">Registrarse</button>
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
    
