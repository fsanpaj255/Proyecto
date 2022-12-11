<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de modos</title>
	<meta charset="utf-8">
</head>
<body>
		<h2 class="h3enunciado">Listado modos</h2>
		<table class="styled-table">
			<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Premio</td>
                <td>Editar</td>
                <td>Eliminar</td>

			</tr>
			</thead>
			<?php 
             $c = new Conexion();
             $conex = $c->conectabd();
             $rp = new repositorioModo($conex);
             $modos = $rp->getallModos();
				foreach ($modos as $dato) {
					?>
					<tbody>
					<tr class="active-row">
						<td><?php echo $dato->getId() ?></td>
						<td><?php echo $dato->getNombre() ?></td>
						<td><?php echo $dato->getPremioId() ?></td>
						<td><a href="?menu=editarmodos&id=<?php echo $dato->getId(); ?>"><img class="editele" src="/source/editar.png"></a></td>
						<td><a href="?menu=eliminamodos&id=<?php echo $dato->getId(); ?>"><img class="editele" src="/source/borrarphp.png"></a></td>
					</tr>
					<?php
				}
			?>
			</tbody>
		</table>

		<!-- inicio insert -->
		<hr>
		<h3 class="h3table">Añadir Modos</h3>
		<form method="POST" action="?menu=insertamodos">
			<table class="styled-table">
				<tbody></tbody>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre"></td>
				</tr>
                <td>Premio: </td>
					<td><input type="text" name="premio_id"></td>
				<tr>
					<td><input type="reset" value="LIMPIAR" class="button-azul"></td>
					<td><input type="submit" value="AÑADIR" class="button-azul"></td>
				</tr>
			</table>
		</form>
</body>
</html>