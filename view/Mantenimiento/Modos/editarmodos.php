<?php
   if (!isset($_GET['id']))
   {
    header("Location: ?menu=listadomodos");
   }

   $id= $_GET['id'];

   $c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioModo($conex);
$modo = $rp->getModo($id);
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
<h3 class="h3table">Editar Modo</h3>
		<form method="POST" action="?menu=procesaeditajemodo">
			<table class="styled-table">
				<tbody></tbody>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre" value="<?php echo $modo->getNombre() ?>"></td>
				</tr>
				<tr>
					<td>Premio: </td>
					<td><input type="text" name="id_premio" value="<?php echo $modo->getPremioId() ?>"></td>
				</tr>
				<tr>
                    <input type="hidden" value="oculto">
					<input type="hidden" name="id2" value="<?php echo $modo->getId() ?>">
					<td><input type="submit" value="EDITAR" class="button-azul"></td>
				</tr>
			</table>
		</form>
</body>
</html>