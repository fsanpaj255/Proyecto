<?php
   if (!isset($_GET['id']))
   {
    header("Location: ?menu=listadoconcursos");
   }

   $id= $_GET['id'];

   $c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioConcurso($conex);
$concurso = $rp->getConcurso($id);
var_dump($concurso);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 class="h3table">Editar Concursos</h3>
		<form method="POST" action="?menu=procesareditar">
			<table class="styled-table">
				<tbody></tbody>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre" value="<?php echo $concurso->getNombre() ?>"></td>
				</tr>
				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="desc" value="<?php echo $concurso->getDesc() ?>"></td>
				</tr>
				<tr>
					<td>Fecha de inicio: </td>
					<td><input type="datetime-local" name="fini" value="<?php echo $concurso->getFIni() ?>"></td>
				</tr>
				<tr>
					<td>Fecha de finalización:</td>
					<td><input type="datetime-local" name="ffin" value="<?php echo $concurso->getFFin() ?>"></td>
				</tr>
				<tr>
					<td>Fecha inicio del concurso: </td>
					<td><input type="datetime-local" name="finiInscrip" value="<?php echo $concurso->getFIniInsc() ?>"></td>
				</tr>
                <tr>
					<td>Fecha fin del concurso:  </td>
					<td><input type="datetime-local" name="ffinInscrip" value="<?php echo $concurso->getFFinUnsc() ?>"></td>
				</tr>
                <tr>
					<td>Cartel: </td>
					<td><input type="text" name="cartel" value="<?php echo $concurso->getCartel() ?>"></td>
				</tr>
				<tr>
					<td><input type="reset" value="LIMPIAR"></td>
					<td><input type="submit" value="EDITAR"></td>
				</tr>
			</table>
		</form>
</body>
</html>
