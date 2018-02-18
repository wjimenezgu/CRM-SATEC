<?php 
    session_start();

    include '../../WebClientPrint.php';
    use Neodynamic\SDK\Web\WebClientPrint;
    use Neodynamic\SDK\Web\Utils;
    use Neodynamic\SDK\Web\DefaultPrinter;
    use Neodynamic\SDK\Web\InstalledPrinter;
    use Neodynamic\SDK\Web\ClientPrintJob;

    // Process request
    // Generate ClientPrintJob? only if clientPrint param is in the query string
    $urlParts = parse_url($_SERVER['REQUEST_URI']);

    
    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
   

    require 'model/modelnotas.php';
    $model = new modelnotas($con->db);
    
 
    
    $idTienda   = $_SESSION["TIENDA_ID"];
    $nameTienda = $_SESSION["TIENDA_NOMBRE"];
      
    $idNota 	= $_GET["idDoc"];
    
    $currentDate	= date('d/m/Y / h:i:s A');

  
    $datosTienda	= $model->getDatosTienda($idTienda);

    $tempFC = explode("/", $currentDate);
    $fechaH	=  "$tempFC[3]";
    $fechaA	=  "$tempFC[2]";
    $fechaM	=  "$tempFC[1]";
    $fechaD	=  "$tempFC[0]";
    
    $headerDocu = $model->buscarEncNotaImp($idTienda,$idNota);
  
    $detalleDocu = $model->buscarDetNotaArti($idNota);
    
    //Create ESC/POS commands for sample receipt
    $esc        = '0x1B'; //ESC byte in hex notation
    $newLine    = '0x0A'; //LF byte in hex notation
    $comillas   = '0x22';
    $comilla    = '0x27';
    $numeral    = '0x23';
    $arroba     = '0x40';
    $enieM      = '0xA5'; // Ñ 
    $aT         = '0xA0'; // á 
    $eT         = '0x82'; // é
    $iT         = '0xA1'; // í
    $oT         = '0xA2'; // ó
    $uT         = '0xA3'; // ú
    $enie       = '0xA4'; // ñ
    $uDiere     = '0x81'; // ü
    $slash      = '0x2F'; // simbolo slash
    $amp        = '0x26'; // AMPERSON
    $porcent    = '0x25'; // %
    $AT			= '0x8F'; // Á
    $ET			= '0x90'; // É
    $IT			= '0x92'; // Í
    $OT			= '0xA2'; // ó
    $UT			= '0x9A'; // Ú

    $simbolos    = array('#','@','"','Ñ','á','é','í','ó','ú','ñ','ü','/','&','%','Á','É','Í','Ó','Ú',"'");
    $newsimbolos = array($numeral,$arroba,'',$enieM,$aT,$eT,$iT,$oT,$uT,$enie,$uDiere,$slash,$amp,$porcent,$AT,$ET,$IT,$OT,$UT,$comilla);
        
    $cent       = 'a'.'0x01';
    $left       = 'a'.'0x00';
    $tiraEsp    = '                                                                                                                                                      ';  // 150 ESPACIOS
    $contLineas ='';   													//contador de lineas de articulos
    $SaltarLineas =''; 													//salta lineas en base al contador de lineas
    
    $cmds  = '';
    $cmds .= $newLine . $newLine  ;
    $cmds .= substr($tiraEsp,1,60).'Nota No: '.$headerDocu[0]["numNota"];      //NUMERO FACTURA 
   
    
    $cmds .= $newLine;
    $cmds .= $newLine;
    
    
    $cmds .= substr($tiraEsp,1,102).$fechaD;               //FECHA FACTURA DIA
    $cmds .= substr($tiraEsp,1,15).$fechaM;                //FECHA FACTURA MES
    $cmds .= substr($tiraEsp,1,16).$fechaA;                //FECHA FACTURA ANIO 121
    //FECHA FACTURA
    
    $cmds .= $newLine . $newLine . $newLine . $newLine;
    $cmds .= substr($tiraEsp,1,15) . " ".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombre"]);
    $cmds .= substr($tiraEsp,1,65) . 'Factura No.' . $headerDocu[0]["numFactura"];  //CLIENTE
    $cmds .= $newLine;
    $cmds .= $newLine;
    $cmds .= substr($tiraEsp,1,15) . " ".str_replace($simbolos,$newsimbolos,$headerDocu[0]["direccion"]); //DIRECCION
    
    $cmds .= $newLine;
    $cmds .= $newLine . substr($tiraEsp, 1,28) . $headerDocu[0]["nombreVendedor"];
    $cmds .= substr($tiraEsp, 1,40) . $headerDocu[0]["numOC"];
    
    
    $cmds .= $newLine . $newLine . $newLine . $newLine ;
   
    foreach ($detalleDocu as $dato){
    	$cmds .= substr($tiraEsp,1,3) . $dato["cantidad"] . substr($tiraEsp,1,15);
    	$cmds .= $dato["codArti"]. substr($tiraEsp,1,8);
    	$cmds .= str_replace($simbolos,$newsimbolos,substr($dato["desArticulo"],0,70)).substr($tiraEsp,0,70-strlen($dato["desArticulo"]));
    	$cmds .= substr($tiraEsp,1,2);
    	$cmds .= substr('           ',1,12-strlen($dato["PrecioVenta"])).$dato["PrecioVenta"].substr($tiraEsp,1,10);
    	$cmds .= substr('           ',1,12-strlen($dato["PrecioTotal"])).$dato["PrecioTotal"];
        $cmds .= $newLine; 
        ++$contLineas ; 
    }
    
    // INICIA LINEA DE RAZON
        $cmds .= $newLine ;
    	$cmds .= substr($tiraEsp,1,32).$headerDocu[0]["razonNota"].$newLine;   
    	++$contLineas;
 
	switch ($contLineas) {
		case 1:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine ;
			break;
		case 2:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine ;
			break;
		case 3:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 4:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 5:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 6:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 7:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 8:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine  . $newLine;
			break;
		case 9:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine . $newLine;
			break;
		case 10:
			$SaltarLineas = $newLine . $newLine . $newLine . $newLine;
			break;
		case 11:
			$SaltarLineas = $newLine . $newLine . $newLine;
			break;
		case 12:
			$SaltarLineas = $newLine . $newLine;
			break;
		case 13:
			$SaltarLineas = $newLine ;
			break;
	}

	$cmds .= $SaltarLineas;
	$cmds .= $newLine ;
    $cmds .= $newLine ;    
    $cmds .= $newLine ;
    $cmds .= substr($tiraEsp,1,123) .substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["SubTotal"];
    $cmds .= $newLine . $newLine . substr($tiraEsp,1,130) .substr('           ',1,12-strlen($headerDocu[0]["impuesto"])).$headerDocu[0]["impuesto"];
    $cmds .= $newLine . $newLine . substr($tiraEsp,1,130) .substr('           ',1,12-strlen($headerDocu[0]["Total"])).$headerDocu[0]["Total"];

    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Nota</title>
</head>
<body>

    <input type="hidden" name="sid"   id="sid"   value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds"  id="cmds"  value="<?php echo $cmds; ?>" />
    <input type="hidden" name="idTienda"  id="idTienda"  value="<?php echo $idTienda; ?>" />

    <div style="width:100%">
         
    	<input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&idTienda=' + $('#idTienda').val()); window.location.href ='../notascrcxc/index.php';" value="Presionar Enter para regresar ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/notascrcxc/PrintNota.php')
    ?>
       

</body>
</html>

