<?php

    // Encabezado del control que verificar si la session expiro.
    require '../../_includes/ctrl_checksession.php';

    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
    
    // A partir de aca codigo particular del modulo
    require 'model/modelData.php';
    $model = new modelData($con->db); 
    
    
    
    /* echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit; */
    
    
    $action   = $_POST["action"];
    $id       = $_POST["fId"];
    $nombt    = $_POST["fNombre"];
    $nomcia   = $_POST["fNombreCia"];
    $cjurid   = $_POST["fCjuridica"];
    $dir      = $_POST["fDireccion"];
    $ubic     = $_POST["fUbicacion"];
    $telf     = $_POST["fTelefonos"];
    $textad   = $_POST["fTextoAdicional"];
    $corr     = $_POST["fCorreoContacto"];
    $leytri   = $_POST["fLeyendaTributacion"];
    $confac   = $_POST["fConsecFactura"];
    $conpro   = $_POST["fConsecProforma"];
    $conaprt  = $_POST["fConsecApartados"];
    $conrep   = $_POST["fConsecReparaciones"];
    $conajs   = $_POST["fConsecAjustes"];
    $contrasl     = $_POST["fConsecTraslados"];
    $tipomosal    = $_POST["ftipoMovTSal"];
    $tipomoen     = $_POST["ftipoMovTEnt"];
    $consnotacr   = $_POST["fconsecNotaCr"];
    $confactman   = $_POST["fconsecFactuManual"];
    $conseclien   = $_POST["fconsecCliente"];


    $result="OK";
    switch($action){
        case 1: // insertar
            
                $result = $model->insertarData($id,$nombt,$nomcia,$cjurid,$dir,$ubic,$telf,$textad,$corr,$leytri,$confac,$conpro,$conaprt,$conrep,$conajs,$contrasl,$tipomosal,$tipomoen,$consnotacr,$confactman,$conseclien);
                
            break;
            
        case 2: // modificar
            
                $result = $model->modificarData($id,$nombt,$nomcia,$cjurid,$dir,$ubic,$telf,$textad,$corr,$leytri,$confac,$conpro,$conaprt,$conrep,$conajs,$contrasl,$tipomosal,$tipomoen,$consnotacr,$confactman,$conseclien);

            break;

        case 3: // borrar
                
                $result = $model->borrarData($id);
            
            break;      

        case 5: // modificar consecutivo
                
                $result = $model->modificarConsecData($id,$confactman);
            
            break;          
            
    }
    
    if ($result == "OK"){
        // La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
        // de eventos.
        header("Location: ../store");
    }else{
        // Hubo en error inesperado en la operacion en la base de datos.
        // La variable $result  tiene el mensaje que se le debe
        // desplegar al usuario                
        header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>