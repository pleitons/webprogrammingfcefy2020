<?php
define("VIEWS_ROUTE", ROOT."views/");
define("CONTROLLERS_ROUTE", ROOT."controllers/");
define("ASSETS_ROUTE", ROOT."assets/");
define("ASSETS_ADMIN", "</div>/assets/adminapp/");


require 'Router.php';
require 'Route.php';
include CONTROLLERS_ROUTE."/template.php";

