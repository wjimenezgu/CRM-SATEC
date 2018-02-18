
<div class="row-fluid">
        <div class="span12 center login-header">
                <img alt="{#company_name#} Logo" src="../resources/img/app_images/logoSATEC.jpg" />
        </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
        <div class="well span5 center login-box">
                <div class="alert alert-info">
                        {#message_credentials#}
                </div>
                <form class="form-horizontal" id="frm-login">
                        <fieldset>
                                <div class="input-prepend control-group" id="input-username" title="{#tooltip_username#}" data-rel="tooltip">
                                    
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input autofocus class="input-large span10 " name="username" id="username" type="text" value="" />
                                    <br />
                                    <div id="msj-username"></div>       
                                    
                                </div>
                                
                                <div class="clearfix"></div>

                                <div class="input-prepend control-group" id="input-password" title="{#tooltip_password#}" data-rel="tooltip">
                                    
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input class="input-large span10" name="password" id="password" type="password" value="" />
                                    <br />
                                    <div id="msj-password"></div>
                                        
                                </div>
								<div class="clearfix"></div>
				<!-- 
								<div class="input-prepend control-group" id="input-store" title="Seleccione Tienda" data-rel="tooltip">
                        		<select class="pull-right" id="selectStore" name="selectStore"> 
                        		<option value="0"></option>
                            	{section name=lP loop=$LISTA_TIENDAS}
                            		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
                                {/section}
                            	</select>                                
                                </div>
                                <div class="clearfix"></div>
 -->
                                <div class="input-prepend">                                    
                                    <!--
                                    <label class="remember" for="remember">                                        
                                        <input type="checkbox" id="remember" /><span style="font-size:10px;">{#text_rememberme#}</span> |
                                        <a href="#" title="Recuperar Contraseña" data-rel="tooltip" style="font-size:10px;">{#text_forgotPwd#}</a>
                                    </label>
                                    -->    
                                    <div id="img-loading"></div>
                                    
                                </div>
                                <div class="clearfix"></div>

                                <p class="center span5">
                                <button type="submit" class="btn btn-primary">{#btn_login#}</button>
                                </p>
                        </fieldset>
                </form>
        </div><!--/span-->
</div><!--/row-->

{literal}
<script type="text/javascript">


	// una vez cambie el campo "usuario" se debe pregargar la lista de tiendas con las permitidas 
	// para ese usuario.
	$("#usernameOLD").on("change", function(e){
        e.preventDefault();
        

        // Se obtiene el id del promotor seleccionado
        var usuario = $("#username").val();

      
        if(usuario != ""){
            alert(usuario);      
        	// se vuelve a llenar la lista de tiendas con base al usuario indicado
        	// Primero se limpia la lista
    		$('#selectStore').find('option:not(:first)').remove();
    		$('#selectStore').append('<option value="'+"0"+'">'+"Tienda 0"+'</option>');   		
    		var properties = {
    	            url: "buscaTiendasUsuario.php",
    	            async: true,
    	            cache: false,
    	            data: "usuario=" + usuario,
    	            type: "POST",
    	            dataType : "json",    	            
    	            success: function(infoTienda){                
    						//alert(msg);
    						// se agregan las tiendas a la lista de seleccion
    						for (i = 0, len = infoTienda.length; i < len; i++) {
    							$('#selectStore').append('<option value="'+infoTienda[i].idTienda+'">'+infoTienda[i].NombreTienda+'</option>');
        					}
    	            },
    	            error: function(jqXHR,textStatus,errorThrown){
    		            alert('Error al Buscar Tienda '+errorThrown);
    	            }
    	        };            
    	        $.ajax(properties);
    	        
    	      

        }
    }
    );
	
</script>
{/literal}		
	
