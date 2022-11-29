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
				<td>Identificador</td>
				<td>Admin</td>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Localización</td>
				<td>Imagen</td>
                <td>Nombre</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			</thead>
			<?php 
             $c = new Conexion();
             $conex = $c->conectabd();
             $rp = new repositorioParticipante($conex);
             $participantes = $rp->getallParticipantes();
				foreach ($participantes as $dato) {
					?>
					<tbody>
					<tr class="active-row">
						<td><?php echo $dato->getId(); ?></td>
						<td><?php echo $dato->getIdentificador(); ?></td>
						<td><?php echo $dato->getAdmin(); ?></td>
						<td><?php echo $dato->getCorreo(); ?></td>
						<td><?php echo $dato->getContrasena(); ?></td>
                        <td><?php echo $dato->getLocalizacion(); ?></td>
                        <td><?php echo 'imagen' ?></td>
                        <td><?php echo $dato->getNombre(); ?></td>
						<td><a href="editarparticipantes.php?id=<?php echo $dato->id_alumno; ?>"><img class=logos src="/source/editar.png"></a></td>
						<td><a href="eliminarparticipantes.php?id=<?php echo $dato->id_alumno; ?>"><img class=logos src="/source/eliminar.png"></a></td>
					</tr>
					</tbody>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Añadir participantes</h3>
		<form method="POST" action="?menu=anadirparticipante">
			<table>
				<tbody></tbody>
				<tr>
					<td>Identificador: </td>
					<td><input type="text" name="identificador"></td>
				</tr>
				<tr>
					<td>Admin: </td>
					<td><input type="text" name="admin"></td>
				</tr>
				<tr>
					<td>Correo: </td>
					<td><input type="text" name="correo"></td>
				</tr>
				<tr>
					<td>Contraseña: </td>
					<td><input type="text" name="contrasena"></td>
				</tr>
				<tr>
					<td>Localización: </td>
					<td><input type="text" name="localizacion"></td>
				</tr>
                <tr>
					<td>Imagen: </td>
					<td><input type="text" name="imagen"></td>
				</tr>
                <tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td><input type="submit" value="LIMPIAR"></td>
					<td><input type="submit" value="AÑADIR"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->
</body>
</html>