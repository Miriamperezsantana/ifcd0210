<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$telefono=$_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$correo=$_POST['correo'];

		if(!empty($nombre) && !empty($apellidos) && !empty($telefono) && !empty($ciudad) && !empty($correo) ){
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO clientes(nombre,apellidos,telefono,ciudad,correo) VALUES(:nombre,:apellidos,:telefono,:ciudad,:correo)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':apellidos' =>$apellidos,
					':telefono' =>$telefono,
					':ciudad' =>$ciudad,
					':correo' =>$correo
				));
				header('Location: index.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2 style="color:blue"> CONTROL DE CLIENTES</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text" required>
				<input type="text" name="apellidos" placeholder="Apellidos" class="input__text" required>
			</div>
			<div class="form-group">
				<input type="text" name="telefono" placeholder="Teléfono" class="input__text" required>
				<input type="text" name="ciudad" placeholder="Ciudad" class="input__text" required>
			</div>
			<div class="form-group">
				<input type="email" name="correo" placeholder="ejemplo...Correo@gmail.com" class="input__text"  maxlength="64" required>

			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" required>
				<a href="../index.php" class="btn btn__sist">Inicio</a>	
			</div>
		</form>
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
