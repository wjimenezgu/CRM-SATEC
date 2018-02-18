$(function(){

    $('#frm-login').validate({
        rules: {
        'username':  {required:function(){$("#input-username").removeClass("error"); return true;}},
        'password':  {required:function(){$("#input-password").removeClass("error"); return true;}}
        },
        messages: {
        'username':    {required:function(){
                                    $("#input-username").addClass("error");
                                    $("#msj-username").html('<span class="help-inline" style="float:left; margin-left:28px; margin-top:-20px">Ingrese el Usuario</span>');
                                 }
                       },
        'password':    {required:function(){
                                    $("#input-password").addClass("error");
                                    $("#msj-password").html('<span class="help-inline" style="float:left; margin-left:28px; margin-top:-20px">Ingrese la Contraseña</span>');
                                 }
                       }
        },
        debug: false,
        submitHandler: function(form){
            
        //Datos de la Organizacion
        username       = $("#username").val();
        password       = $("#password").val();
        
        
        $("#img-loading").html("<img src='../resources/img/app_images/large-facebook.gif' width='20px'>");
        
        $.ajax({
                url: '../security/validateAccess.php',
                type: "POST",
                data: "submit=&username="+username+"&password="+password,
                success: function(response){                                                            
                    
                    if(response == 1){
                        $("#img-loading").html("");                        
                        $("#input-username").addClass("success");
                        $("#input-password").addClass("success");                        
                        
                        setTimeout(function(){
                            window.location="../home";
                        },1000);                        
                                                
                    }else if (response == 1045){
                        
                        $("#img-loading").html("");
                        alert("USUARIO: No tiene Permisos de Acceso");
                        $("#username").focus();
                        
                    }else if (response == 2002){
                        
                        $("#img-loading").html("");
                        alert("No hay comunicación con el servidor");
                        
                    }
                   
                   
                }
        });
        
        /*
        $("#response-message").load("../security/validateAccess.php", { username : username, password : password }, function(response,status,xhr){
                
                alert(response);
                
                        if(response > 0){
                            $("#img-loading").html("");                            
                            $("#response-message").html('<h4 class="alert_success">Credenciales Correctos</h4>'); 
                            //window.location="../home";
                        }else{
                           $("#img-loading").html("");
                           //$("#response-message").html('<h4 class="alert_error">Credenciales Inválidos</h4>'); 
                        }
                        
                                                            
        });
         */   
        
       
        }
        
        
    });
});