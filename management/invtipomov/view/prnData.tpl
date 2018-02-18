<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="40mm" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
	<page_header>    
    	<table cellspacing="0" style="width: 97%;  font-size: 16px;">
        	<tr>
            	<td style="margin-left:15px; width: 50%;">
                	<img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
            	</td>
            	<td style="width: 10%;">                        
            	</td>
            	<td style="width: 40%; color: #444444; text-align:right; padding:10px; border: solid 1px black;" valign="middle">                
                	<b>LISTA DE ASIGNATURAS</b>
            	</td>
        	</tr>
    	</table>
    	<table cellspacing="0" style="width: 97%;  font-size: 10px;">
        	<tr>
				<td style="text-align: right; width: 99%; padding:5px; padding-right:-19px;">page | página [[page_cu]]/[[page_nb]]</td> 
        	</tr>
    	</table>       
    </page_header>
      
    <page_footer>
        <table style="margin-left:5px; width: 97%;">
            <tr>
                <td style="width: 100%; color: #444444;" valign="middle">                
                	<table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    	<tr>
                        	<td style="width: 50%;"> </td>
                        	<td style="width: 50%; color: #444444;" valign="middle"></td>
                    	</tr>
                	</table>                   
            	</td>
            </tr>
        </table>
    </page_footer>            
    
    <br>
    <br>
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
        <tr>
            <th style="width: 48%;" valign="middle">Id</th>
            <th style="width: 52%;">Descripcion</th>
        </tr>
    </table>
    
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 12px;">
        {section loop=$LISTA_DATA name=pd}
        <tr>
            <td style="width: 48%;">{$LISTA_DATA[pd].id}</td>
            <td style="width: 52%;">{$LISTA_DATA[pd].descripcion}</td>
        </tr>
        {/section}
    </table>    
    
    <br>                   
</page>