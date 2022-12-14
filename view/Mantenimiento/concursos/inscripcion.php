<?php
$idconcurso = $_GET['id'];
$c = new Conexion();
$conex = $c->conectabd();
?>
<div id="contenedor">
<div id="central">
    <div id="login">
        <h3>Vuelve a ingresar tus datos para participar.</h3>
        <form id="loginform" method="POST" action="?menu=inscrito">
            <label>Correo</label>
            <input type="text" name="correo" placeholder="Correo" required>
            <label>Contraseña</label>
            <input type="password" placeholder="Contraseña" name="contrasena" required>
            <input name="id_concurso" value="<?php echo $idconcurso ?>" type='hidden'>
            <button type="submit" name="ingresar" class="button-azul">Participar.</button>
        </form>
    </div>
    <div class="inferior">
        <a href="?menu=concursosactivos">Salir</a>
    </div>
</div>
</div>
