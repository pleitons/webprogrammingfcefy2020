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
	<link href="assets/css/style.css" rel="stylesheet">

	
</head>

<body>

	<?php

	$router = new Router($_SERVER['REQUEST_URI']); //Solamente en desarrollo se elimina parte de la URI

	//Aca se hacen los llamados a los controladores para brindar una respuesta
	$router->add('/webprogrammingfcefy2020/Golive/', function () {
		
		if(!isset($_GET['id'])){
			include "views/modules/form.php";
		}else{
			echo("Tuma");
		}
		return '<h1>Home</h1>
				<a href="login"> xd</a>';
	});

	$router->add('/webprogrammingfcefy2020/Golive/login', 'UserController::loginController');

	$router->add('/webprogrammingfcefy2020/Golive/registrarse', 'UserController::signupController');


	$router->run();
		
	?>

</body>

</html>