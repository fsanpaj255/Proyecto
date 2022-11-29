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
                    <form id="loginform" method="POST" action="?menu=logeo">
                        <label>Correo</label>
                        <input type="text" name="correo" placeholder="Correo" required>
                        <label>Contraseña</label>
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        
                        <button type="submit" name="ingresar">Iniciar sesión</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="?menu=registrarse">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="?menu=salir">Salir</a>
                </div>
            </div>
        </div>
            
    </body>
</body>
</html>
    
