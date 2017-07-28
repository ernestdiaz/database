<?php
	
	require('./conector.php');

	$con = new ConectorBD();
  
	$response['conexion'] = $con->initConexion('agendaf');
	 
	 try {
	 $bdd = new PDO('mysql:host=localhost;dbname=agendaf', 'ernesto', '123456');
	 } catch(Exception $e) {
	 exit('Impossible de se connecter à la base de datos.');
	 }
	 
	$sql = "INSERT INTO evenement (title, start, end) VALUES (:title, :start, :end)";
	$q = $bdd->prepare($sql);
	 
	$con->cerrarConexion();

  

 ?>
