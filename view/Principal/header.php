<?php
echo '<header>';
echo '<div class="topnav">';
    if (!isset($_SESSION['rol'])){
      echo '<a class="active" href="?menu=concursosactivos"><img src="source/logo34.png"></a>';
      echo  '<a href="?menu=pantallainfo">¿Quienes somos?</a>';
      echo  '<a href="?menu=concursosactivos">Concursos</a>';
      echo '<a href="?menu=autentifica"><button type="submit" class="button-azul" href="?menu=autentifica">Iniciar sesión</button></a>';
    }else{
      if ($_SESSION['rol'] == 0){
        echo '<a class="active" href="?menu=concursosactivos"><img src="source/logo34.png"></a>';
        echo  '<a href="?menu=concursosactivos">Concursos</a>';
        echo  '<a href="?menu=misconcursos">Mis concursos</a>';
        echo '<li><a href=""><img src="source/usuario.png"></a>';
echo '<ul>';
echo '<li><a href="">Mi perfil</a></li>';
echo '<li><a href="?menu=salir">Cerrar sesión</a></li>';
echo '</ul>';
echo '</li>';
     }else{
      echo '<a class="active" href="?menu=concursosactivos"><img src="source/logo34.png"></a>';
      echo '<a class="active" href="?menu=listarparticipantes">Usuarios</a>';
      echo '<a class="active" href="?menu=listadoconcursos">Concursos</a>';
      echo '<a class="active" href="?menu=listadomodos">Modos</a>';
      echo '<a class="active" href="?menu=listarbandas">Bandas</a>';
echo '<li><a href=""><img src="source/usuario.png"></a>';
echo '<ul>';
echo '<li><a href="">Mi perfil</a></li>';
echo '<li><a href="?menu=salir">Cerrar sesión</a></li>';
echo '</ul>';
echo '</li>';
     }
  }

echo '</div>';
echo '</header>';
?>
