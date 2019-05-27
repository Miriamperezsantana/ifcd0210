<?php 
   include 'conexion.php';
   $id=$_GET['id'];
   $sql="select * from persona where Id='".id."'";
   $resultado=mysql_query($sql);
     while ($filas=mysql_fetch_assoc($resultado))
   ?>
<div>
	<form>
		<input type="hidden" name="txtid" value="<?php echo $fila['Id'] ?>">
		<label>Usuario</label>
		<input type="text" name="txtuser" value="<?php echo $fila['Usuario'] ?>"><br>
		<label>Email</label>
        <input type="text" name="txtemail" value="<?php echo $fila['Email'] ?>"><hr>
		<input type="submit" name="" value="Agctualizar">
		<a href="index.php">Regresar</a>
	</form>
<?php }  
	$idp=$_GET['txtid'];
    $email=$_GET['txtemail'];
		if($user!=null||$email!=null){
    	$sql2="update persona set Usuario= '".$user."',Email='".$email."' where Id='".$idp."'";
    	mysql_query($sql2);
    	if($user=1){
    		header("location:index.php");
		}
    }
?>
</div>