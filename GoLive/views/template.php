<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Golive</title>
	<link rel="stylesheet" href="<?php echo(ASSETS_ADMIN."css/atlantis.min.css")?>.css">
</head>

<body>

	<?php

	$router = new Router($_SERVER['REQUEST_URI']); //Solamente en desarrollo se elimina parte de la URI

	//Aca se hacen los llamados a los controladores para brindar una respuesta
	$router->add('/webprogrammingfcefy2020/Golive/', function () {
		
		if(!isset($_GET['id'])){
			include VIEWS_ROUTE."form.php";
		}else{
			echo("Tuma");
		}
		return '<h1>Home</h1>';
	});

	$router->add('/webprogrammingfcefy2020/Golive/:id', function ($id) {
		return 'Viendo el producto ' . $id;
	});

	$router->run();
		
	?>

</body>

</html>