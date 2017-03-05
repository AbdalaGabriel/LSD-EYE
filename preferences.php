<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">

	<link rel="stylesheet" href="style/bootstrap/bootstrap.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="style/global.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/lateral-bar.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/preferences.css">
	<link rel="stylesheet" href="style/assets/simple-switch.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LSD EYE - Plataforma de videos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



</head>

<body>

	<!-- HEADER -->
	<?php include 'templates/header.php'; ?>

	<!--LATERAL BAR -->

	<aside id="main-lateral-bar">
		<?php include 'templates/lateral-bar.php'; ?>
	</aside>

	<main id="main-content-preferences" class="main">
		<header id="preferences-header">
			<h2 class="">Preferencias</h2>
			<nav class="preferences-options">
				<ul>
					<li><a href="#">Generales</a></li>
					<li><a href="#">Cuentas</a></li>
					<li><a href="#">Canales</a></li>
					<li><a href="#">Grupos</a></li>
					<li><a href="#" class="active">Reportes</a></li>
					<li><a href="#">Alertas</a></li>
				</ul>
			</nav>
		</header>

		<div id="main-container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="panel reports">
						<div class="report-option">
							<input type="checkbox" class="pref-button" >
							<h2>Reporte diario</h2>

							<div class="content">
								<h3>Destinatarios</h3>
								<div class="receptors">
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
								</div>
							</div>
							<div class="button-container">
								<a href="#" class="button">Test</a>
							</div>
						</div>

						<div class="report-option">
							<input type="checkbox" class="pref-button" >
							<h2>Reporte diario</h2>

							<div class="content">
								<h3>Destinatarios</h3>
								<div class="receptors">
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
								</div>
							</div>
							<div class="button-container">
								<a href="#" class="button">Test</a>
							</div>
						</div>

						<div class="report-option">
							<input type="checkbox" class="pref-button" >
							<h2>Reporte diario</h2>

							<div class="content">
								<h3>Destinatarios</h3>
								<div class="receptors">
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
									<span class="receptor">llado.alejandro@unomedios.com.ar, m</span>
								</div>
							</div>
							<div class="button-container">
								<a href="#" class="button">Test</a>
							</div>
						</div>
					</div>

					<div class="action-buttons-container">
						<a href="#" class="cancel action-button">Cancelar</a>
						<a href="#" class="ok action-button">Guardar</a>
					</div>
				</div>
			</div>

		</div>
		
	</main>

<script src="js/assets/jquery.simpleswitch.js"></script>
<script>
    $(".pref-button").simpleSwitch();
</script>

</body>
<script src="js/tether.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();


  	// Mapa
   	/*$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=world-population.json&callback=?', function (data) {

	    // Correct UK to GB in data
	    $.each(data, function () {
	        if (this.code === 'UK') {
	            this.code = 'GB';
	        }
	    });

	    Highcharts.mapChart('map-graphic', {
	        chart: {
	            borderWidth: 0,
	            map: 'custom/world'
	        },

	        title: {
	            text: ''
	        },

	        legend: {
	            enabled: false
	        },

	        mapNavigation: {
	            enabled: true,
	            buttonOptions: {
	                verticalAlign: 'bottom'
	            }
	        },
	        colors: ['#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9', 
   					'#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1'
   					],

	        series: [{
	            name: 'Countries',
	            color: '#E0E0E0',
	            enableMouseTracking: false
	        }, {
	            type: 'mapbubble',
	            name: 'Population 2013',
	            joinBy: ['iso-a2', 'code'],
	            data: data,
	            minSize: 4,
	            maxSize: '12%',
	            tooltip: {
	                pointFormat: '{point.code}: {point.z} thousands'
	            }
	        }]
	    });
	});
	*/

   	// Linear

   	$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=new-intraday.json&callback=?', function (data) {

    // create the chart
    Highcharts.stockChart('linear-graphic', {


    	title: {
    		text: ' ',
    	},

    	xAxis: {
    		gapGridLineWidth: 0,
    		title: {
    			text: 'Minutos',
    			y: 10,
    		}
    	},
    	yAxis: {
    		title: {
    			text: 'Audiencia/Usuarios',
    			align: "middle",
    			margin: 0,
    			offset: undefined,
    			rotation: 270,
    			x: -1007
    		}
    	},

    	rangeSelector: {
    		buttons: [{
    			type: 'hour',
    			count: .25,
    			text: '15'
    		}, {
    			type: 'hour',
    			count: .5,
    			text: '30'
    		}, {
    			type: 'hour',
    			count: 1,
    			text: '1h'
    		}, {
    			type: 'hour',
    			count: 2,
    			text: '2h'
    		}, {
    			type: 'hour',
    			count: 6,
    			text: '6h'
    		}, {
    			type: 'hour',
    			count: 12,
    			text: '12h'
    		}, {
    			type: 'day',
    			count: 1,
    			text: '24h'
    		}],
    		selected: 1,
    		inputEnabled: false
    	},

    	series: [{
    		name: 'Usuarios',
    		type: 'area',
    		data: data,
    		gapSize: 5,
    		tooltip: {
    			valueDecimals: 2
    		},
    		fillColor: {
    			linearGradient: {
    				x1: 0,
    				y1: 0,
    				x2: 0,
    				y2: 1
    			},
    			stops: [
    			[0, Highcharts.getOptions().colors[0]],
    			[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
    			]
    		},
    		threshold: null
    	}]
    });
});

   	$(".highcharts-range-selector-buttons").css("display","none");


   });
</script>
</html>
