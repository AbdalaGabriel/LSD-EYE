$(function() {
    console.log( "Document ready!" );
	init(); 
	initSelect();  	
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

	//Plegado canales en header responsive
	var toggleChannels = $(".toggle-channels-mobile");
	var channels = $(".channels-container");

	toggleChannels.click(function(ev)
	{
		// Evitar propagacion para que los elementos del interior no disparen el evento mas de una vez
		ev.stopPropagation();

		console.log("- Channels click");

		// Si ya tiene la clase showchannels, sinifica que esta abierto, cerrar.
		if(channels.hasClass("showchannels"))
		{
			console.log("hide Channels");
			channels.addClass("hidechannels");
			channels.removeClass("showchannels");
		}
		//Sino, se coloca clase de animacion al menu oculto.
		else
		{
			console.log("show Channels");
			channels.addClass("showchannels");
			channels.removeClass("hidechannels");
		}
	});
}


function initSelect(){

  		console.log("- Init select style");
  		// Iterate over each select element
		$('select').each(function() {

		    // Cache the number of options
		    var $this = $(this),
		        numberOfOptions = $(this).children('option').length;

		    // Hides the select element
		    $this.addClass('s-hidden');

		    // Wrap the select element in a div
		    $this.wrap('<div class="select"></div>');

		    // Insert a styled div to sit over the top of the hidden select element
		    $this.after('<div class="styledSelect"></div>');

		    // Cache the styled div
		    var $styledSelect = $this.next('div.styledSelect');

		    // Show the first select option in the styled div
		    $styledSelect.text($this.children('option').eq(0).text());

		    // Insert an unordered list after the styled div and also cache the list
		    var $list = $('<ul />', {
		        'class': 'options'
		    }).insertAfter($styledSelect);

		    // Insert a list item into the unordered list for each select option
		    for (var i = 0; i < numberOfOptions; i++) {
		        $('<li />', {
		            text: $this.children('option').eq(i).text(),
		            rel: $this.children('option').eq(i).val()
		        }).appendTo($list);
		    }

		    // Cache the list items
		    var $listItems = $list.children('li');

		    // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
		    $styledSelect.click(function(e) {
		        e.stopPropagation();
		        $('div.styledSelect.active').each(function() {
		            $(this).removeClass('active').next('ul.options').hide();
		        });
		        $(this).toggleClass('active').next('ul.options').toggle();
		    });

		    // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
		    // Updates the select element to have the value of the equivalent option
		    $listItems.click(function(e) {
		        e.stopPropagation();
		        $styledSelect.text($(this).text()).removeClass('active');
		        $this.val($(this).attr('rel'));
		        $list.hide();
		        /* alert($this.val()); Uncomment this for demonstration! */
		    });

		    // Hides the unordered list when clicking outside of it
		    $(document).click(function() {
		        $styledSelect.removeClass('active');
		        $list.hide();
		    });

		});		
  	}

	