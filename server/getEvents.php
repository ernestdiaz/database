<?php
	require('./conector.php');
	
		$con = new ConectorBD();

		$response['conexion'] = $con->initConexion('agendaf')== "OK";
	
	if ($response['conexion']=='OK'){ 
		$resultado_consulta = $con->consultar(["eventos"], ["*"],"WHERE id= '${idEventos}'");
		$dataJson = [];
		
		while ($row = $data->fetch_assoc()) {
			$evento["id"] = $row['idEventos'];
			$evento["title"] = $row['Titulo']; 
			$evento["allDay"] = ($row['dia_completo']=="" && $row['true']=="" && $row['false']==""); 
			$evento["start"] = $row['Fec_inicio']." ".$row['Hora_inicio']; 
			$evento["end"] = $row['Fec_fin']." ".$row['Hora_fin']; 
			array_push($dataJson, $evento); 
			
		}
		
		$on = $conect->cerrarConexion();
		
		if($data->num_rows > 0){ 
			echo '{"msg":"OK", "eventos": '.json_encode($dataJson).'}';
			} else{ 
				echo '{"msg":"No Events with user '.$usr_login.'"}'; 
				} 
	}
	catch(Exception $ex){echo $ex;}
?>



 
