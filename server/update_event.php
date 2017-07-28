<?php
		
	require('./conector.php');

	$con = new ConectorBD();
  
	$response['conexion'] = $con->initConexion('agendaf');
	
	$id=$_POST['id'];
	$title=$_POST['title'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	 
	try {
	 $bdd = new PDO('mysql:host=localhost;dbname=agendaf', 'ernesto', '123456');
	 } catch(Exception $e) {
	 exit('Impossible de se connecter à la base de datos.');
	 }
	 
	$sql = "UPDATE evenement SET title=?, start=?, end=? WHERE id=?";
	$q = $bdd->prepare($sql);
	$q->execute(array($title,$start,$end,$id));
	 
	
	$con->cerrarConexion();


 ?>
