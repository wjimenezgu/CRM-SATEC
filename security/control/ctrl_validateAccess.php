<?php

    error_reporting(E_PARSE);  
    require '../_config/db/UserConnection.php';      
    
    $nickname = $_POST["username"];
    $password = $_POST["password"];
    
    $userConnect = new UserConnection($nickname, $password);

    require '../_config/db/DBConexion.php';
    
    try{ 
        
        $con = new DBConexion(2, $userConnect);        
        
        session_start();
        $_SESSION["USER_SESSION"] = $userConnect->getDBUser();
        $_SESSION["PWD_USER"]     = $userConnect->getDBPass();
       
        echo 1;        
        
     }catch (exception $e) { 
         /*
         $e=0;
         session_start();
         session_destroy();
         session_unset();
         echo $e;
          */
         
           echo $e->getCode(); 

           //adodb_backtrace($e->gettrace());         
         
      }             
      
?>