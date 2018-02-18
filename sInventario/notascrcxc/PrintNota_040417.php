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

    $rawQuery = $urlParts['query'];
    parse_str($rawQuery, $qs);
    $printerName = urldecode($qs['printerName']);
    
    $myString 	= $qs['enc'];
    $vArray 	= explode('|', $myString);

    $headerDocu = array(
    		array(
    				'idNota' 			=> $vArray[0],
    				'nombre' 			=> urldecode($vArray[1]),
    				'direccion' 		=> urldecode($vArray[2]),
    				'numFactura' 		=> urldecode($vArray[3]),
    				'nombreVendedor' 	=> $vArray[4],
    				'numOC' 			=> urldecode($vArray[5]),
    				'razonNota' 		=> urldecode($vArray[6]),
    				'subTotal' 			=> $vArray[7],
    				'impuesto' 			=> $vArray[8],
    				'Total' 			=> $vArray[9],
    				'fecNota'			=> $vArray[10],
    		)
    );
    
    $tempFC 		=  explode("-", $headerDocu[0]["fecNota"]);  // d-m-y
    $fechaA    		=  "$tempFC[2]";
    $fechaM    		=  "$tempFC[1]";
    $fechaD    		=  "$tempFC[0]";
    
    // se extraen los datos de los articulos de la nota de credito
    $myString 	= $qs['arti'];
    $vArray 	= explode('|', $myString);
    $length 	= count($vArray);
    $numArti 	= $length / 6; // entre 6 por que por cada articulo vienen 6 datos.
    $numArti 	= (int)$numArti;
    $posArray 	= 0;
    $detalleDocu = array();
    for ($i = 0; $i < $numArti; $i++) {
    	$detalleDocu[] = array(
    			'codExterno'	=> trim($vArray[$posArray]),
    			'cantidad' 		=> trim($vArray[$posArray+1]),
    			'desArticulo' 	=> trim($vArray[$posArray+2]),
    			'codArti' 		=> trim($vArray[$posArray+3]),
    			'PrecioVenta' 	=> trim($vArray[$posArray+4]),
    			'PrecioTotal' 	=> trim($vArray[$posArray+5]),
    	);
    
    		
    	$posArray = $posArray + 6; // el offset son los 6 elementos del articulo
    }

    $myString 	= '';
    $vArray 	= '';
        
       
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
    
    $cmdsD  = '';
    $esc = '0x1B'; //ESC byte in hex notation
    $newLine = '0x0A'; //LF byte in hex notation
    $cmdsD = $esc . "@"; //Initializes the printer (ESC @)
    $cmdsD .= $esc . '!' . '0x18'; // 24 dec => 18 hex

    $cmdsD .= substr($tiraEsp,1,50).'Nota No.: '.$headerDocu[0]["idNota"];
    
    $cmdsD .= $newLine;
    $cmdsD .= $newLine;
    $cmdsD .= $newLine;
    $cmdsD .= $newLine;

    
    
    $cmdsD .= substr($tiraEsp,1,50).$fechaD;                //FECHA FACTURA DIA
    $cmdsD .= substr($tiraEsp,1,8).$fechaM;                 //FECHA FACTURA MES3
    $cmdsD .= substr($tiraEsp,1,6).$fechaA;                 //FECHA FACTURA ANIO 121
    //FECHA FACTURA
    
    $cmdsD .= $newLine . $newLine . $newLine . $newLine;
    $cmdsD .= substr($tiraEsp,1,50) . 'Factura No.' . $headerDocu[0]["numFactura"].$newLine;;
    $cmdsD .= substr($tiraEsp,1,7) . " ".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombre"]);  //CLIENTE 
    $cmdsD .= $newLine;
    $cmdsD .= $newLine;
    $cmdsD .= $esc . '!' . '0x18';

    $str = $headerDocu[0]["direccion"];
    $cant = strlen($str);
    if ($cant > 65) {
    $dir = substr($headerDocu[0]["direccion"], 0, -19);
    $cmdsD .= substr($tiraEsp,1,7) . " ".str_replace($simbolos,$newsimbolos,$dir); 
    }
    else
    $cmdsD .= substr($tiraEsp,1,7) . " ".str_replace($simbolos,$newsimbolos,$headerDocu[0]["direccion"]);  
    
    $cmdsD .= $newLine;
    

    $cmdsD .= substr($tiraEsp, 1,15) . $headerDocu[0]["nombreVendedor"];
    $cmdsD .= substr($tiraEsp, 1,18) . $headerDocu[0]["numOC"];
    
    
    $cmdsD .= $newLine . $newLine . $newLine . $newLine . $newLine;
    //$cmdsD .= $esc . '!' . '0x00'
    $cmdsD .= $esc . '!' . '0x5';
    
    foreach ($detalleDocu as $dato){
          $limpieza1 = str_replace("%20", " ", $dato["desArticulo"]); //PARA ELIMINAR %20
          $des = $limpieza1 ;
          
    	$cmdsD .= substr($tiraEsp,1,5) . $dato["cantidad"] . substr($tiraEsp,1,10);
    	$cmdsD .= $dato["codArti"]. substr($tiraEsp,1,16);
    	$cmdsD .= str_replace($simbolos,$newsimbolos,substr($des,0,70)).substr($tiraEsp,0,70-strlen($des));
    	$cmdsD .= substr('                 ',1,12-strlen($dato["PrecioVenta"])).$dato["PrecioVenta"].substr($tiraEsp,1,8);
    	$cmdsD .= substr('                 ',1,12-strlen($dato["PrecioTotal"])).$dato["PrecioTotal"];
    	$cmdsD .= $newLine;
    	++$contLineas ;
    }
    
    // INICIA LINEA DE RAZON
    $cmdsD .= $newLine ;
    $cmdsD .= substr($tiraEsp,1,40).$headerDocu[0]["razonNota"].$newLine;
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
    
    $cmdsD .= $SaltarLineas;
    $cmdsD .= $newLine ;
  


    $cmdsD .= substr($tiraEsp,1,130) .substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["SubTotal"];
    $cmdsD .= $newLine . $newLine . substr($tiraEsp,1,130) .substr('           ',1,12-strlen($headerDocu[0]["impuesto"])).$headerDocu[0]["impuesto"];
    $cmdsD .= $newLine . $newLine . $newLine . substr($tiraEsp,1,130) .substr('           ',1,12-strlen($headerDocu[0]["Total"])).$headerDocu[0]["Total"];
        
            $cmds = $esc . "@"; //Initializes the printer (ESC @)
            
            
            $cmds .= $esc . $left;
            
            $cmds .= $esc . '!'.'0x15' ;
            
            
            $cmds .= $cmdsD;            
                   
            $cmds .= $newLine . $newLine . $newLine . $newLine . $newLine ;

            //Create a ClientPrintJob obj that will be processed at the client side by the WCPP
            $cpj = new ClientPrintJob();
            //set ESC/POS commands to print...
            $cpj->printerCommands = $cmds;
            $cpj->formatHexValues = true;
            //set client printer

            $cpj->clientPrinter = new DefaultPrinter();

            //Send ClientPrintJob back to the client
            ob_start();
            ob_clean();
            echo $cpj->sendToClient();
            ob_end_flush();       
            
            exit();
//        }
//    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>
    
    <div id="defPrint" style="visibility:hidden">
    <label class="checkbox">
        <input type="checkbox" checked id="useDefaultPrinter" /> <strong>Use default printer</strong> or...
    </label>
    </div>
    <br /><br />
    <input type="hidden" name="cmd" value="<?php echo $cmds; ?>" />
    <input type="button" id="imprime" name="imprime"   style="font-size:18px" onclick="javascript:jsWebClientPrint.print('useDefaultPrinter=' + $('#useDefaultPrinter').attr('checked') + '&printerName=' + $('#installedPrinterName').val());window.location.href ='index.php';" value="Confirmar Impresion..." />

    
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>


       

</body>
</html>

