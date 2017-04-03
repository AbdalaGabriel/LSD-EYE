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
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
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

	<?php include 'templates/lateral-bar.php'; ?>

	<main id="main-content-preferences " class="main">
		
		<?php include 'templates/preferences-header.php'; ?>

		<div id="main-container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 reset-padding">
					<div class="panel">
						<div class="alerts table-container">
							<table class="alerts">
								<tr>
									<th>Nombre</th>
									<th>Canal</th>
									<th></th>
								</tr>
								<tr>
									<td class="name">

										La red -Arriba de 4000
									</td>
									<td class="channel"><span class="channel-logo-container">
										<img src="img/alert-channel-image.jpg" alt="">
									</span>La red</td>
									
									<td class="icon-td-container">
										<span class="icon delete"></span>
										<span class="icon edit"></span>
										<span class="icon suspend"></span>
									</td>
								</tr>

								<tr>
										<td class="name">

											La red -Arriba de 4000
										</td>
										<td class="channel"><span class="channel-logo-container">
											<img src="img/alert-channel-image.jpg" alt="">
										</span>La red</td>
										
										<td class="icon-td-container">
											<span class="icon delete"></span>
											<span class="icon edit"></span>
											<span class="icon suspend"></span>
										</td>
									</tr>

								<tr>
									<td class="name">

										La red -Arriba de 4000
									</td>
									<td class="channel"><span class="channel-logo-container">
										<img src="img/alert-channel-image.jpg" alt="">
									</span>La red</td>
									
									<td class="icon-td-container">
										<span class="icon delete"></span>
										<span class="icon edit"></span>
										<span class="icon suspend"></span>
									</td>
								</tr>

								<tr class="alert">
									<td class="name">

										La red -Arriba de 4000
									</td>
									<td class="channel"><span class="channel-logo-container">
										<img src="img/alert-channel-image.jpg" alt="">
									</span>La red</td>
									
									<td class="icon-td-container">
										<span class="icon ok"></span>
										<span class="icon edit"></span>
										<span class="icon suspend"></span>
									</td>
								</tr>
							</table>
						</div>

						<span class="more-button">
							+
						</span>
					</div>
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
<script src="js/functions.js"></script>

</html>
