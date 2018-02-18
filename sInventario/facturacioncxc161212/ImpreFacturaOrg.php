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
   

    require 'model/modelBill.php';
    $model = new modelBill($con->db);
    
 
    
    $idTienda   = $_SESSION["TIENDA_ID"];
    $nameTienda = $_SESSION["TIENDA_NOMBRE"];
      
    $idFactu 	= $_GET["idDoc"];
    
    $currentDate	= date('d/m/Y h:i:s A');

  
    $datosTienda	= $model->getDatosTienda($idTienda);

    
    $headerDocu = $model->buscaEncFact($idTienda,$idFactu);

    
    $infoModoGob 	= $model->buscaInfoModoGob($idFactu);

 
    $detalleDocu = $model->buscaDetFactArti($idFactu);
    $montoLentas = '';
    if ($headerDocu[0]["indMontoLetras"] == 'S'){
    
    	$montoFactu = $headerDocu[0]["TotalN"];
    	$montoLentas = numtoletras($montoFactu);    
    }
      
    
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
    $tiraEsp    = '                                                  ';  // 50 ESPACIOS

    $cmds  = '';
    $cmds .= substr($tiraEsp,1,28).'F.N.: '.$headerDocu[0]["numFactura"];
    $cmds .= substr($tiraEsp,1,18).'X';
    
    $cmds .= $newLine;

    $cmds .= substr($tiraEsp,1,45).$headerDocu[0]["fecFactura"];
    $cmds .= $newLine . $newLine;
    $cmds .= substr($tiraEsp,1,5) . "Cliente:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["idCliente"]);
    $cmds .= $newLine;
    $cmds .= substr($tiraEsp,1,5) . "Direccion:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["idCliente"]);
    
          
    
    $cmds .= $newLine . $newLine . $newLine;
                  //           10        20        30        40
                  //  1234567890123456789012345678901234567890
                  //   
            //$cmds .= "Codigo   Cant    Precio    Des     Total";
    $cmds .= "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                     "            SubTotal:".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
                  //            3423  512,584.10
    $cmds .= $newLine;
            // recorrer el arrglo de articulos para agregarlo a la factura  

    foreach ($detalleDocu as $dato){
    	$cmds .= $dato["codArti"] . substr($tiraEsp,1,5);
    	$cmds .= $dato["cantidad"]. substr($tiraEsp,1,5);
    	$cmds .= str_replace($simbolos,$newsimbolos,substr($dato["desArticulo"],0,40));
    	$cmds .= $dato["PorceDesc"]. substr($tiraEsp,1,5);
    	$cmds .= $dato["PrecioVenta"].substr($tiraEsp,1,5);
    	$cmds .= $dato["PrecioTotal"];
        $cmds .= $newLine;         
    }

	// INICIA LINEAS DEL GOBIERNO
	if ($infoModoGob[0]["posPresupuestaria"] != ""){
		$cmds .= 'POS. PRESUPUESTARIA: '.$infoModoGob[0]["posPresupuestaria"].$newLine;
	}
	if($infoModoGob[0]["areaFuncional"] != ""){
		$cmds .= 'AREA FUNCIONAL: '.$infoModoGob[0]["areaFuncional"].$newLine;
	}
	if($infoModoGob[0]["solPedido"] != ""){
		$cmds .= 'N.SOLICITUD PEDIDO: '.$infoModoGob[0]["solPedido"].$newLine;
	}
	if($infoModoGob[0]["tramiteCompra"] != ""){
		$cmds .= 'TRAMITE DE COMPRA: '.$infoModoGob[0]["tramiteCompra"].$newLine;
	}
	if($infoModoGob[0]["ctaCliente"] != ""){
		$cmds .= 'CUENTA CLIENTE: '.$infoModoGob[0]["ctaCliente"].$newLine;		
	}    
    // FINALIZA LINEAS DEL GOBIERNO
    // INICIA LINEA DE OBSERVACIONES
    if ($headerDocu[0]["obs"] != ''){
    	$cmds .= 'Obs: '.$headerDocu[0]["obs"].$newLine;    	
    }
    //MONTO EN LETRAS
    IF ($montoLentas != "") {
    	$cmds .= $montoLentas;
    	$cmds .= $newLine;    
	}
    //
      
    $cmds .= substr($tiraEsp,1,25) ."              Monto Total:  ".substr('           ',1,12-strlen($headerDocu[0]["montototal"])).$headerDocu[0]["montototal"];
    $cmds .= $newLine;            
    $cmds .= substr($tiraEsp,1,25) ."                Descuento:  ".substr('           ',1,12-strlen($headerDocu[0]["descuento"])).$headerDocu[0]["descuento"];
    $cmds .= $newLine;
    $cmds .= substr($tiraEsp,1,25) ."                 SubTotal:  ".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
    $cmds .= $newLine;
    $cmds .= substr($tiraEsp,1,25) ."                Imp.Venta:  ".substr('           ',1,12-strlen($headerDocu[0]["impuesto"])).$headerDocu[0]["impuesto"];
    $cmds .= $newLine;
    $cmds .= substr($tiraEsp,1,25) ."               Gran Total:  ".substr('           ',1,12-strlen($headerDocu[0]["Total"])).$headerDocu[0]["Total"];
//echo $cmds;exit;


 function numtoletras($xcifra)
    {
    	$xarray = array(0 => "Cero",
    			1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE",
    			"DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE",
    			"VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
    			100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS"
    	);
    	//
    	$xcifra = trim($xcifra);
    	$xlength = strlen($xcifra);
    	$xpos_punto = strpos($xcifra, ".");
    	$xaux_int = $xcifra;
    	$xdecimales = "00";
    	if (!($xpos_punto === false)) {
    		if ($xpos_punto == 0) {
    			$xcifra = "0" . $xcifra;
    			$xpos_punto = strpos($xcifra, ".");
    		}
    		$xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
    		$xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2); // obtengo los valores decimales
    	}
    
    	$XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
    	$xcadena = "";
    	for ($xz = 0; $xz < 3; $xz++) {
    		$xaux = substr($XAUX, $xz * 6, 6);
    		$xi = 0;
    		$xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
    		$xexit = true; // bandera para controlar el ciclo del While
    		while ($xexit) {
    			if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
    				break; // termina el ciclo
    			}
    
    			$x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
    			$xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
    			for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
    				switch ($xy) {
    					case 1: // checa las centenas
    						if (substr($xaux, 0, 3) < 100) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
    
    						} else {
    							$key = (int) substr($xaux, 0, 3);
    							if (TRUE === array_key_exists($key, $xarray)){  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
    								$xseek = $xarray[$key];
    								$xsub = subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
    								if (substr($xaux, 0, 3) == 100)
    									$xcadena = " " . $xcadena . " CIEN " . $xsub;
    								else
    									$xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
    								$xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
    							}
    							else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
    								$key = (int) substr($xaux, 0, 1) * 100;
    								$xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
    								$xcadena = " " . $xcadena . " " . $xseek;
    							} // ENDIF ($xseek)
    						} // ENDIF (substr($xaux, 0, 3) < 100)
    						break;
    					case 2: // checa las decenas (con la misma lógica que las centenas)
    						if (substr($xaux, 1, 2) < 10) {
    
    						} else {
    							$key = (int) substr($xaux, 1, 2);
    							if (TRUE === array_key_exists($key, $xarray)) {
    								$xseek = $xarray[$key];
    								$xsub = subfijo($xaux);
    								if (substr($xaux, 1, 2) == 20)
    									$xcadena = " " . $xcadena . " VEINTE " . $xsub;
    								else
    									$xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
    								$xy = 3;
    							}
    							else {
    								$key = (int) substr($xaux, 1, 1) * 10;
    								$xseek = $xarray[$key];
    								if (20 == substr($xaux, 1, 1) * 10)
    									$xcadena = " " . $xcadena . " " . $xseek;
    								else
    									$xcadena = " " . $xcadena . " " . $xseek . " Y ";
    							} // ENDIF ($xseek)
    						} // ENDIF (substr($xaux, 1, 2) < 10)
    						break;
    					case 3: // checa las unidades
    						if (substr($xaux, 2, 1) < 1) { // si la unidad es cero, ya no hace nada
    
    						} else {
    							$key = (int) substr($xaux, 2, 1);
    							$xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
    							$xsub = subfijo($xaux);
    							$xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
    						} // ENDIF (substr($xaux, 2, 1) < 1)
    						break;
    				} // END SWITCH
    			} // END FOR
    			$xi = $xi + 3;
    		} // ENDDO
    
    		if (substr(trim($xcadena), -5, 5) == "ILLON") // si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
    			$xcadena.= " DE";
    
    		if (substr(trim($xcadena), -7, 7) == "ILLONES") // si la cadena obtenida en MILLONES o BILLONES, entoncea le agrega al final la conjuncion DE
    			$xcadena.= " DE";
    
    		// ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
    		if (trim($xaux) != "") {
    			switch ($xz) {
    				case 0:
    					if (trim(substr($XAUX, $xz * 6, 6)) == "1")
    						$xcadena.= "UN BILLON ";
    						else
    							$xcadena.= " BILLONES ";
    						break;
    				case 1:
    					if (trim(substr($XAUX, $xz * 6, 6)) == "1")
    						$xcadena.= "UN MILLON ";
    						else
    							$xcadena.= " MILLONES ";
    						break;
    				case 2:
    					if ($xcifra < 1) {
    						$xcadena = "CERO COLONES $xdecimales/100 ";
    					}
    					if ($xcifra >= 1 && $xcifra < 2) {
    						$xcadena = "UN COLON $xdecimales/100 ";
    					}
    					if ($xcifra >= 2) {
    						$xcadena.= " COLONES $xdecimales/100 "; //
    					}
    					break;
    			} // endswitch ($xz)
    		} // ENDIF (trim($xaux) != "")
    		// ------------------      en este caso, para México se usa esta leyenda     ----------------
    		$xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
    		$xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
    		$xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
    		$xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
    		$xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena); // corrigo la leyenda
    		$xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); // corrigo la leyenda
    		$xcadena = str_replace("DE UN", "UN", $xcadena); // corrigo la leyenda
    	} // ENDFOR ($xz)
    	return trim($xcadena);
    }
    
    // END FUNCTION
    
    function subfijo($xx)
    { // esta función regresa un subfijo para la cifra
    $xx = trim($xx);
    $xstrlen = strlen($xx);
    if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
    	$xsub = "";
    //
    if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
    	$xsub = "MIL";
    //
    return $xsub;
    }
    
    // END FUNCTION       
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" name="sid"   id="sid"   value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds"  id="cmds"  value="<?php echo $cmds; ?>" />
    <input type="hidden" name="idTienda"  id="idTienda"  value="<?php echo $idTienda; ?>" />

    <div style="width:100%">
         
    	<input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&idTienda=' + $('#idTienda').val()); window.location.href ='../facturacioncxc/index.php';" value="Presionar Enter para regresar ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/facturacioncxc/PrintFactura.php')
    ?>
       

</body>
</html>

