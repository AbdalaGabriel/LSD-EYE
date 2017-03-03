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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LSD EYE - Plataforma de videos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/data.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>




</head>

<body>

	<!-- HEADER -->
	<?php include 'templates/header.php'; ?>

	<!--LATERAL BAR -->

	<aside id="main-lateral-bar">
		<?php include 'templates/lateral-bar.php'; ?>
	</aside>

	<main id="main-content">
		<header>
			<nav>
				<ul>
					<li><a href="#">Vod</a></li>
					<li><a class="active" href="#">Live</a></li>
				</ul>
			</nav>
		</header>

		<div id="main-container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4 start-collumn">
					<div class="panel users-now">
						<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						<span class="hour">20:12:57 hs.</span>

						<h1 class="users-quantity">
							2948
						</h1>

						<div class="users-label">
							<span class="icon"></span>
							<h2>Usuarios ahora</h2>
						</div>
					</div>

				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
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

				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 end-collumn">
					<div class="panel numeric plays">
					<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						<div class="number-container users">
							<span class="icon"></span>
							<h3>12224 </h3>
						</div>
						<h2 class="label">Plays acumulados en el día</h2>
					</div>

					<div class="panel numeric users">
					<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						<div class="number-container">
							<span class="icon"></span>
							<h3>3010</h3>
						</div>
						<h2 class="label">Usuarios acumulados en el día</h2>
					</div>

					<div class="panel numeric hours">
					<a href="#" class="info" data-placement="left" data-toggle="tooltip" title="Lorem Ipsum sit dolor amet commet"></a>
						<div class="number-container">
							<span class="icon"></span>
							<h3>122 <span class="min-container">min</span></h3>
						</div>
						<h2 class="label">Tiempo promedio</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-8 start-collumn">
					<div class="panel">
						<h2 class="panel-title real-time-graphic">
							Tiempo real
						</h2>

						<div id="linear-graphic"></div>

						
					</div>

					<div class="panel">
						<h2 class="panel-title countries-graphic">
							Países
						</h2>

						<div id="map-graphic" style="width:100%; height:400px;"></div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 end-collumn">
					<div class="panel visualization-times">
						<h2 class="panel-title">
							Tiempos de visualización
						</h2>

						<div class="percentage-module">
							<h2><span class="bold">0-5</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">5-10</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">10-15</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">15-20</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">20-25</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">25-30</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">30-35</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">45-60</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>

						<div class="percentage-module">
							<h2><span class="bold">+ 60</span> min (<span class="plays-container">6211</span> PLAYS )</h2>
							<h3 class="percentage"><span class="number">15.02</span>%</h3>

							<div class="percentage-bar-container">
								<div class="hundred-percent"></div>

								<div class="real-time-percentage-bar"></div>
							</div>

						</div>
					</div>

					<div class="panel program">
						<h3>Ahora</h3>
						<h2 class="panel-title">
							Nombre del programa
						</h2>

						<div class="player">
							<div class="radio-name-container">
								<a href="#" data-toggle="tooltip" data-placement="bottom"  title="play" class="play"></a>
								<h4 class="radio-name">Radio La Red</h4>
							</div>

							<div class="volume-container">
								<span class="icon"></span>
								<div class="volume">
									<div class="volume-bar"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel encoder">
						<a href="#" data-toggle="tooltip" title="Ver encoder">
						<div class="see-encoder-container">
							<div class="icon-container">
								<span class="icon"></span>
							</div>
							<div class="texts">
								<h2>Ver encoder</h2>
								<h3>Gráficos completos</h3>
							</div>
							</div>
						</a>

					</div>
				</div>
			</div>

		</div>
		
	</main>

</body>
<script src="js/tether.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(function () {
  	$('[data-toggle="tooltip"]').tooltip();


  	// Mapa
   	$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=world-population.json&callback=?', function (data) {

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
	            color: '#943a4d',
	            enableMouseTracking: false
	        }, {
	            type: 'mapbubble',
	            name: 'Usuarios',
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

   	


});
</script>
</html>
