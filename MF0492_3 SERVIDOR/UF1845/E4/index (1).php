<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM clientes ORDER BY id DESC');
	$sentencia_select1=$con->prepare('SELECT *FROM clientes ORDER BY ciudad DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
   
	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE nombre LIKE :campo OR apellidos LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}else{
	if(isset($_POST['btn_buscar1'])){
		$buscar_text1=$_POST['buscar1'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE ciudad LIKE :campo ;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text1."%"
		));

		$resultado=$select_buscar->fetchAll();
	}
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2 style="color:blue"> CONTROL DE CLIENTES</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre o apellidos" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<input type="text" name="buscar1" placeholder="buscar ciudad" 
				value="<?php if(isset($buscar_text1)) echo $buscar_text1; ?>" class="input__text text1 ">
				<input type="submit" class="btn btn_btn1" name="btn_buscar1" value="Buscar Ciudad">
				<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
				<a href="../index.php" class="btn btn__sist">Inicio</a>	
			</form>
		</div>
		<table>
			<tr class="head">
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Teléfono</td>
				<td>Ciudad</td>
				<td>Correo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
       <footer>
                <div class="iconos">
                    <center><a href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.esthersola.com%2Fintegrar-redes-sociales-web%2F&t=Como%20integrar%20las%20redes%20sociales%20en%20nuestra%20web"><img src="iconos/icon-facebook.png" width="25" height="25"></a>
                  	<a href="https://twitter.com/"><img src="iconos/icon-twitter.png" width="25" height="25" /></a>
                 	<a href="https://plus.google.com/discover"><img src="iconos/icon-googleplus.png" width="25" height="25"></a></center>
                </div>
         
              <center>
                <p style="color:blue">Copyright &copy; Anabel Rodriguez Abril 2019 , todos los derechos reservados.</p>
            </center>
        </footer>

</body>
</html>