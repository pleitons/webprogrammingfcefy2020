<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Golive</title>

	<!--Techie-->	
	<!-- Favicons -->
	<link href="assets/app/img/favicon.png" rel="icon">
	<link href="assets/app/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/app/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/app/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/app/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/app/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/app/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/app/css/style.css" rel="stylesheet">

	
</head>

<body>

	<?php

	$router = new Router($_SERVER['REQUEST_URI']); //Solamente en desarrollo se elimina parte de la URI

	//Aca se hacen los llamados a los controladores para brindar una respuesta
	$router->add('/webprogrammingfcefy2020/Golive/', function () {
			return '<h1>Home</h1>';
	});

	$router->add('/webprogrammingfcefy2020/Golive/ingresar', 'UserController::loginController');

	$router->add('/webprogrammingfcefy2020/Golive/registrarse', 'UserController::signupController');

	$router->run();
		
	?>
	  
  <!-- Vendor JS Files -->
  <script src="assets/app/vendor/jquery/jquery.min.js"></script>
  <script src="assets/app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/app/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/app/vendor/php-email-form/validate.js"></script>
  <script src="assets/app/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/app/vendor/counterup/counterup.min.js"></script>
  <script src="assets/app/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/app/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/app/vendor/venobox/venobox.min.js"></script>
  <script src="assets/app/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/app/js/main.js"></script>
	<script>
	$(document).ready(function () { 
		$('#name').on("keyup" ,function () {

			var username = $('#name').val();
			var datos = new FormData();
			datos.append("name", username);

			$.ajax({
				type: "POST",
				url: "views/modules/ajax.php",
				data: datos,
				dataType: "dataType",
				cache: false,
				contentType: false,
				processData: false,
				success: function (response) {
					console.log("xd");
				}
			});
		});
	});
	</script>
</body>

</html>