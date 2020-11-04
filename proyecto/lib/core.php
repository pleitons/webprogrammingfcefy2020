<?php
require 'Router.php';
require 'Route.php';


define("VIEWS_ROUTE", ROOT."views/");
define("CONTROLLERS_ROUTE", ROOT."controllers/");

$router = new Router(substr($_SERVER['REQUEST_URI'], 33  )); //Solamente en desarrollo se elimina parte de la URI


//Aca se hacen los llamados a los controladores para brindar una respuesta
$router->add('/login', function ()
{
	return '<h1>Home</h1>';
});


$router->run();