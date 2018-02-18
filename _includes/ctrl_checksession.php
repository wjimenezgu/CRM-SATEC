<?php
	// Se debe verificar si la sesion expiro.
	// Si el iniciar la sesion falla, entonces se re-direcciona al usuario
	// a la pantalla de login.
	//
	session_start();
    if (!isset($_SESSION['IDSESS']) ) {
    // la sesion expiro, se redirecciona al usuari a la pantalla de login
    	session_unset();     // se limpia la variable $_SESSION de la ejecucion 
    	session_destroy();   // se limpia la informacion de sesion 
    	header("Location: ../../login"); // se redireccion al login
	}

?>    