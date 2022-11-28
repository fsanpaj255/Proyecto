<?php
echo '<header>';
echo '<div class="topnav">';
    if (!isset($_SESSION['rol'])){
      echo '<a class="active" href="?menu=listadoconcursos"><img src="source/ondas2.png"></a>';
      echo  '<a href="?menu=listadoconcursos"><img class="logos" src="source/trofeo.png">Concursos</a>';
      echo '<a href="?menu=autentifica"><button type="submit" href="?menu=autentifica"><img class="logos" src="source/userLogin2.png">Iniciar sesión</button></a>';
    }else{
      if ($_SESSION['rol'] == 0){
        echo '<a href="?menu=autentifica"><button type="submit" href="?menu=autentifica"><img class="logos" src="source/userLogin2.png">Iniciar sesión</button></a>';
        echo "ERES PUTA!";
     }else{
      echo '<a class="active" href="?menu=listadoconcursos"><img src="source/ondas2.png"></a>';
      echo '<a href="?menu=salir"><button type="submit" href="?menu=salir"><img class="logos" src="source/userLogin2.png">Salir</button></a>';
     }
  }

echo '</div>';
echo '</header>';
?>
