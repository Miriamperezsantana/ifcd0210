!<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>
	<?php
	include_once 'conexion.php';
	$sql= "select * from persona";
	$resultado=mysql_query($sql);
	?>
	<div>
		<a href="agregar.php">Nuevo</a>
		<table>
			<thead>
				<tr>
				  <th>ID</th>
				  <th>USUARIO</th>
				  <th>EMAIL</th>
				  <th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($filas=mysql_fetch_assoc($resultado)) {
					# code...
				}
				?>
				<tr>
				  <th><?php echo $flilas[Id] ?></th>
				  <th><?php echo $flilas[Usuario] ?></th>
				  <th><?php echo $flilas[Email] ?></th>
				  <th>
				  	<a href="editar.php?id=<?php echo $flilas[Id] ?>">Editar </a>
				  	<a href="eliminar.php?id=<?php echo $flilas[Id] ?>">Eliminar </a>
				  </th>
				</tr>				
			</tbody>
		</table>
	</div>
</body>
</html>