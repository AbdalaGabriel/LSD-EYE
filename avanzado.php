
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
	<link rel="stylesheet" type="text/css" href="style/graphics.css">
	<link rel="stylesheet" type="text/css" href="style/advanced.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
	<title>LSD EYE - Plataforma de videos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://code.highcharts.com/stock/highstock.js"></script>
	<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>




</head>

<body>

	<!-- HEADER -->
	<?php include 'templates/header.php'; ?>

	<!--LATERAL BAR -->

	<?php include 'templates/lateral-bar.php'; ?>
	

	<main id="main-content" class="advanced">
		<header>
			<nav>
				<ul>
					<li><a href="#">Vod</a></li>
					<li><a class="active" href="#">Live</a></li>
				</ul>
			</nav>
		</header>

		<div id="main-container">
		<div class="tabs-container tabs-centered">
							<h3 class="hint">Seleccione un intervalo</h3>
							<div class="tabs">
								<a href="#" class="tab active">Hoy</a>
								<a href="#" class="tab">Ayer</a>
								<a href="#" class="tab">Última semana</a>
								<a href="#" class="tab">Este mes</a>
								<a href="#" class="tab">Mes pasado</a>
								<a href="#" class="tab">Otro rango</a>	
							</div>
						</div>
			
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-8 start-collumn">

					

					<div class="panel">
						<h2 class="panel-title real-time-graphic">
							Usuarios HOY
						</h2>
						<div class="col-sm-12 col-md-12 col-lg-12 users-statics-container float-none start-collumn">
							
							<!-- Paneles numericos -->
							<div class="number-panel-container ">
								<img src="img/svg-icons/users-2.svg" class="icon" />
								<div class="info-container">
									<h2 class="number">1222</h2>
									<h3 class="number-label">Usuarios Totales</h3>
								</div>
							</div>

							<div class="number-panel-container ">
								<img src="img/svg-icons/plays.svg" class="icon" />
								<div class="info-container">
									<h2 class="number">1222</h2>
									<h3 class="number-label">Plays Totales</h3>
								</div>
							</div>


							<div class="number-panel-container ">
								<img src="img/svg-icons/time-average.svg" class="icon" />
								<div class="info-container">
									<h2 class="number">1222</h2>
									<h3 class="number-label">Tiempo promedio</h3>
								</div>
							</div>

							<div class="number-panel-container ">
								
								<img src="img/svg-icons/time-total.svg" class="icon" />
								<div class="info-container">
									<h2 class="number">1222</h2>
									<h3 class="number-label">Tiempo total</h3>
								</div>
							</div>

							<!-- Select -->
							<div class="select-container">
								<select>
									<option selected value="volvo">Por día</option>
									<option value="saab">Saab</option>				
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</div>

							<div id="bars-graphic" class="users-today-graphic"></div>



						</div>
						
					</div>

					<div class="row reset-padding">
						<div class="col-md-6 col-lg-6 start-collumn">
							<div class="panel browsers">
								<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>

								<h2 class="panel-title">
									Browsers
								</h2>
							</div>	
						</div>

						<div class="col-md-6 col-lg-6 end-collumn">
							<div class="panel operative-sistems">
								<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>

								<h2 class="panel-title">
									Sistemas Operativos
								</h2>
							</div>	
						</div>
						
					</div>
					
					<div class="panel">
													<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>

						<h2 class="panel-title countries-graphic">
							Países
						</h2>

						<div id="map-graphic" style="width:100%; height:400px;"></div>
					</div>
					

					
				</div>

				<div class="col-sm-12 col-md-12 col-lg-4 end-collumn">


					<div class="panel platforms-stats">
						<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						<div class="platform-container desktop">

							<div class="platform-name">
								<span class="icon"></span>
								<h2>Desktop</h2>
							</div>
							<h3 class="percentage"><span class="number">70.14</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>
						</div>

						<div class="platform-container mobile-app">
							<div class="platform-name">
								<span class="icon"></span>	
								<h2>Mobile App</h2>
							</div>

							<h3 class="percentage"><span class="number">70.14</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>
						</div>

						<div class="platform-container mobile-web">
							<div class="platform-name">
								<span class="icon"></span>
								<h2>Mobile Web</h2>
							</div>
							<h3 class="percentage"><span class="number">70.14</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>
						</div>
					</div>



					<div class="panel referers">
						<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>

						<h2 class="panel-title">
							Referers
						</h2>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >http://www.radioarg.com/red-capital-federal/</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>
					</div>


					<div class="panel isps">
						<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						
						<h2 class="panel-title">
							ISPS
						</h2>

						<div class="percentage-module">
							<h2 class="percentage-title" >Telefonica de Argentina (13256)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >Telefonica de Argentina (13256)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >Telefonica de Argentina (13256)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2 class="percentage-title" >Movistar(4532)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						
						<div class="percentage-module">
							<h2 class="percentage-title" >Movistar(4532)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						
						<div class="percentage-module">
							<h2 class="percentage-title" >Movistar(4532)</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>
					</div>

					
				</div>
			</div>

		</div>
		
	</main>

</body>
<script src="js/tether.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
		
		Highcharts.chart('bars-graphic', {
			chart: {
				zoomType: 'xy'
			},
			title: {
				text: 'Average Monthly Weather Data for Tokyo'
			},
			subtitle: {
				text: 'Source: WorldClimate.com'
			},
			xAxis: [{
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
				'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				crosshair: true
			}],
    yAxis: [{ // Primary yAxis
    	labels: {
    		format: '{value}°C',
    		style: {
    			color: Highcharts.getOptions().colors[2]
    		}
    	},
    	title: {
    		text: 'Usuarios Simultáneos',
    		style: {
    			color: Highcharts.getOptions().colors[2]
    		}
    	},
    	opposite: true

    }, { // Secondary yAxis
    	gridLineWidth: 0,
    	title: {
    		text: 'Rainfall',
    		style: {
    			color: Highcharts.getOptions().colors[0]
    		}
    	},
    	labels: {
    		format: '{value} mm',
    		style: {
    			color: Highcharts.getOptions().colors[0]
    		}
    	}

    }, { // Tertiary yAxis
    	gridLineWidth: 0,
    	title: {
    		text: 'Plays',
    		style: {
    			color: Highcharts.getOptions().colors[1]
    		}
    	},
    	labels: {
    		format: '{value} mb',
    		style: {
    			color: Highcharts.getOptions().colors[1]
    		}
    	},
    	opposite: true
    }],
    tooltip: {
    	shared: true
    },
    legend: {
    	layout: 'vertical',
    	align: 'left',
    	x: 80,
    	verticalAlign: 'top',
    	y: 55,
    	floating: true,
    	backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    series: [{
    	name: 'Usuarios',
    	type: 'column',
    	yAxis: 1,
    	data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
    	tooltip: {
    		valueSuffix: ' mm'
    	}

    }, {
    	name: 'Sea-Level Pressure',
    	type: 'spline',
    	yAxis: 2,
    	data: [1016, 1016, 1015.9, 1015.5, 1012.3, 1009.5, 1009.6, 1010.2, 1013.1, 1016.9, 1018.2, 1016.7],
    	marker: {
    		enabled: false
    	},
    	dashStyle: 'shortdot',
    	tooltip: {
    		valueSuffix: ' mb'
    	}

    }, {
    	name: 'Temperature',
    	type: 'spline',
    	data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
    	tooltip: {
    		valueSuffix: ' °C'
    	}
    }]
});


	});




</script>
</html>
