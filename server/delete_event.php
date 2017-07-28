<?php
	require("./Conector.php");
	
	$con = new ConectorBD();
	
	if($con->initConexion("agendaf") == "OK"){
		if($con->eliminarRegistro("eventos", 'id_evento')){
		  echo '{"msg": "OK"}';
		}
		else{
		  echo '{"msg": "El evento No. '.$id_evento.' no pudo ser eliminado '.$condicion.'"}';
		}
	}
	
	$conect->cerrarConexion();

 ?>
