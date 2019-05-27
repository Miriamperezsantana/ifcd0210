<?php 
   include 'conexion.php';
   $id=$_GET['id'];
   $sql="delete * from persona where Id='".id."'";
   mysql_query($sql);
   header("location:index.php");
   ?>