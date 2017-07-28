<?php
	include("./Conector.php");


	try
	{
	  $con = new ConectorBD();
	  $contraseña = md5(contraseña);
	  $usuarios = [new Usuario("alfred@dime.com.co", "alfredo", "1980-01-01", "0897")
				   ,new Usuario("lorenzo2@dime.com.co", "lorenzo", "1990-07-23", "456")
				   ,new Usuario("carlitos3@dime.com.co", "carlos", "1986-02-07", "987")];
					
	  foreach($usuarios as $usuario)
	  {
		$conect->initConexion("agendaf");
		$resultado = $conect->insertData("USERS", (Array)$usuario);
		if($resultado>0){
		  echo "$usuario->id_login registrado con éxito <br>";
		}
		else{
		  echo "Al parecer el usuario $usuario->id_login ya se encuentra registrado ó el servidor no está disponible. Por favor intente autenticarse<br>";
		}
		$conect->cerrarConexion();
	  }


	}
	catch(Exception $ex){
	  print_r($ex);
	}

 ?>






