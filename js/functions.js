$(function() {
    console.log( "Document ready!" );
	init();   	
});


function init()
{
	console.log("Function init");
	
	//Menu desplegable
	var menuButton = $(".main-menu");
	var hiddenMenu = $(".main-menu-container");

	menuButton.click(function(ev)
	{
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


	//Plegado barra lateral
	var sideHideButton = $(".close-menu");
	var sideShowButton = $(".reveal-lateral-bar");
	var sidebar = $("#main-lateral-bar");
	var mainContainer =$("#main-content");
	var mainPreferencesContainer = $("#main-content-preferences");
	var preferencesHeader = $("#preferences-header");
	
	sideHideButton.click(function(ev)
	{
		// Evitar propagacion para que los elementos del interior no disparen el evento mas de una vez
		ev.stopPropagation();
		console.log("hide");
		
		// Sidebar
		sidebar.addClass("hidesidebar");
		sidebar.removeClass("showsidebar");

		// Main container
		mainContainer.addClass("no-menu");
		mainContainer.removeClass("with-menu");

		// Main container con header de preferencias
		mainPreferencesContainer.addClass("no-menu-preferences");
		mainPreferencesContainer.removeClass("with-menu-preferences");

		//Header de preferencias
		preferencesHeader.addClass("no-menu-header-preferences");
		preferencesHeader.removeClass("with-menu-header-preferences");


		console.log("- Side Menu click for hide");

	});

	sideShowButton.click(function(ev)
	{
		// Evitar propagacion para que los elementos del interior no disparen el evento mas de una vez
		ev.stopPropagation();
		console.log("hide");
		
		// Sidebar
		sidebar.addClass("showsidebar");
		sidebar.removeClass("hidesidebar");

		// Main container
		mainContainer.addClass("with-menu");
		mainContainer.removeClass("no-menu");

		// Main container con header de preferencias
		mainPreferencesContainer.addClass("with-menu-preferences");
		mainPreferencesContainer.removeClass("no-menu-preferences");

		//Header de preferencias
		preferencesHeader.addClass("with-menu-header-preferences");
		preferencesHeader.removeClass("no-menu-header-preferences");

		console.log("- Side Menu click for show");

	});
}


	