jQuery.noConflict();
jQuery(document).on("ready",function(){
	//======================================== controla la cantidad de items de menu ======================================
	var cantidad = jQuery("nav ul > li").length;	
	if(cantidad <= 6){
		switch(cantidad)
		{
			case 1:
			jQuery("nav ul > li").addClass("nav1");
			break;
			case 2:
			jQuery("nav ul > li").addClass("nav2");
			break;
			case 3:
			jQuery("nav ul > li").addClass("nav3");
			break;
			case 4:
			jQuery("nav ul > li").addClass("nav4");
			break;
			case 5:
			jQuery("nav ul > li").addClass("nav5");
			break;
			default:
			jQuery("nav ul > li").addClass("navAll");
			break;		}		
	}else{
		var maximo = 5;
		var xCant = cantidad - maximo;
		var ancho = 9 - xCant;
		//console.log(ancho);
		jQuery("nav ul > li").addClass("navAll");
		jQuery("nav ul > li").css({"min-width":ancho+"%","padding-left":xCant+"px","padding-right":xCant+"px"});
	}	
});