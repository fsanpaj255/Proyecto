<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
</head>
<body>
		<table class="styled-table">
			<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Fecha de inicio</td>
				<td>Fecha de finalización</td>
				<td>Fecha inicial de inscripción</td>
				<td>Fecha final de inscripción</td>
                <td>Cartel</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			</thead>
			<?php 
             $c = new Conexion();
             $conex = $c->conectabd();
             $rp = new repositorioConcurso($conex);
             $concursos = $rp->getallConcursos();
				foreach ($concursos as $dato) {
					?>
					<tbody>
					<tr class="active-row">
						<td><?php echo $dato->getId() ?></td>
						<td><?php echo $dato->getNombre() ?></td>
						<td><?php echo $dato->getDesc() ?></td>
						<td><?php echo $dato->getFIni() ?></td>
						<td><?php echo $dato->getFFin() ?></td>
                        <td><?php echo $dato->getFIniInsc() ?></td>
                        <td><?php echo $dato->getFFinUnsc() ?></td>
                        <td><?php echo 'imagen'; ?></td>
						<td><a href="?menu=editarconcursos&id=<?php echo $dato->getId(); ?>"><img class="editele" src="/source/editar.png"></a></td>
						<td><a href="?menu=eliminarconcurso&id=<?php echo $dato->getId(); ?>"><img class="editele" src="/source/borrarphp.png"></a></td>
					</tr>
					<?php
				}
			?>
			</tbody>
		</table>

		<!-- inicio insert -->
		<hr>
		<h3 class="h3table">Añadir Concursos</h3>
		<form method="POST" action="?menu=insertaconcursos">
			<table class="styled-table">
				<tbody></tbody>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="desc"></td>
				</tr>
				<tr>
					<td>Fecha de inicio: </td>
					<td><input type="datetime-local" name="fini"></td>
				</tr>
				<tr>
					<td>Fecha de finalización:</td>
					<td><input type="datetime-local" name="ffin"></td>
				</tr>
				<tr>
					<td>Fecha inicio del concurso: </td>
					<td><input type="datetime-local" name="finiInscrip"></td>
				</tr>
                <tr>
					<td>Fecha fin del concurso:  </td>
					<td><input type="datetime-local" name="ffinInscrip"></td>
				</tr>
                <tr>
					<td>Cartel: </td>
					<td><input type="text" name="cartel"></td>
				</tr>
				<tr>
					<td><input type="reset" value="LIMPIAR"></td>
					<td><input type="submit" value="AÑADIR"></td>
				</tr>
			</table>
		</form>
</body>
</html>