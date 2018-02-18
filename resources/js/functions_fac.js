$(function(){
	
	//Calcula el impuesto de toda la factura
    function impuestoTotal(sub){
        var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *(porceIV/100));
        return imp;
    }
    	
});