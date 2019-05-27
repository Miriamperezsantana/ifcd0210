<div>
	<form>
		<label>Usuario</label>
		<input type="text" name="txtuser"><br>
		<label>Email</label>
        <input type="text" name="txtemail"><hr>
		<input type="submit" name="" value="Agregar">
		<a href="index.php">Regresar</a>
	</form>
</div>
<?php
	include 'conexion.php';
    $user=$_GET['txtuser'];
    $email=$_GET['txtemail'];
    if($user!=null||$email!=null){
    	$sql="insert into persona(Usuario,Email)values('".$user."','".$email."')";
    	mysql_query($sql);
    	if($user=1){
    		header("location:index.php");
		}
    }
?>