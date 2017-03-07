$(function() {
    console.log( "Document ready!" );
	init();   	
});


function init(){
	console.log("Function init");
	
	//Menu desplegable
	var menuButton = $(".main-menu");
	var hiddenMenu = $(".main-menu-container");

	menuButton.click(function(ev){
		// Evitar propagacion para que los elementos del interior no disparen el evento mas de una vez
		ev.stopPropagation();

		console.log("- Menu click");

		// Si ya tiene la clase showmenu, sinifica que esta abierto, cerrar.
		if(hiddenMenu.hasClass("showmenu"))
		{
			console.log("hide");
			hiddenMenu.addClass("hidemenu");
			hiddenMenu.removeClass("showmenu");
		}
		//Sino, se coloca clase de animacion al menu oculto.
		else
		{
			console.log("show");
			hiddenMenu.addClass("showmenu");
			hiddenMenu.removeClass("hidemenu");
		}
	});
	
}


	