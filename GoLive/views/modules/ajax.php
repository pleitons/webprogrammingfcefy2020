<?php

require_once "../../controllers/User.php";
require_once "../../models/User.php";
require_once "../../models/conexion.php";

class Ajax
{
    public function userValidateAjax($data)
    {
        $response = UserController::validateUserController($data);

        echo $response;
    }
}

$a = new Ajax();
$a -> userValidateAjax($_POST["name"]);
