<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';  

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db); 
    
    $tableData = stripcslashes($_POST['pTableData']);

	// Decode the JSON array
	$tableData = json_decode($tableData,TRUE);

	// now $tableData can be accessed like a PHP array
	

    $numGuia =$_POST['numGuia'];
    	
    $result = $model->saveGuiaWHRs($tableData,$numGuia);
	if ($result !== "OK"){
   		// Hubo en error inesperado en la operacion en la base de datos.
   		// La variable $result  tiene el mensaje que se le debe
   		// desplegar al usuario  	           
	  	//header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
	  	echo $result;
	}         
    echo 'Operacion Exitosa'; 
    //header("Location: allGuiaWhrs.php?id=".$numGuia);   

?>