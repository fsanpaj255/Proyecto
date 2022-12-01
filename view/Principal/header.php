<?php
echo '<header>';
echo '<div class="topnav">';
    if (!isset($_SESSION['rol'])){
      echo '<a class="active" href="?menu=concursosactivos"><img src="source/logo34.png"></a>';
      echo  '<a href="?menu=pantallainfo">¿Quienes somos?</a>';
      echo  '<a href="?menu=concursosactivos">Concursos</a>';
      echo '<a href="?menu=autentifica"><button type="submit" href="?menu=autentifica">Iniciar sesión</button></a>';
    }else{
      if ($_SESSION['rol'] == 0){
        echo '<a href="?menu=autentifica"><button type="submit" href="?menu=autentifica"><img class="logos" src="source/userLogin2.png">Iniciar sesión</button></a>';
     }else{
      echo '<a class="active" href="?menu=concursosactivos"><img src="source/logo34.png"></a>';
      echo '<a class="active" href="?menu=">Usuarios</a>';
      echo '<a class="active" href="?menu=listadoconcursos">Concursos</a>';
      echo '<a class="active" href="?menu=">Modos</a>';
      echo '<a class="active" href="?menu=">Bandas</a>';
      echo '<a class="active" href="?menu=">Premios</a>';
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
