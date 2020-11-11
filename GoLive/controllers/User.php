<?php

include 'models/User.php';

class UserController
{
    public function loginController()
    {
        if(isset($_POST["user"]) && isset($_POST["password"]))
        {
            if(preg_match('/^[a-zA-Z\s]+$/', $_POST["user"]) &&
            preg_match('/^(?=.[0-9])(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[$@$!%?&])([0-9A-Za-z\d$@$!%?&]|[^ ]){8,15}$/', $_POST["password"]))
            {
                $contraseña = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); //encriptamos la contraseña
                $datosController = array("usuario"=>$_POST["user"],
                "password"=>$contraseña);
                $resultado = UserModel::loginModel($datosController);
            }
        }
        else
        {
            include 'views/modules/login.php';
        }
        return('');
    }

    public function signinController()
    {
        if( isset($_POST["username"]) &&
            isset($_POST["firstName"]) &&
            isset($_POST["lastName"]) &&
            isset($_POST["gender"]) &&
            isset($_POST["email"]) &&
            isset($_POST["password"]))
        {
            if( preg_match('/^[a-zA-Z\s]+$/', $_POST["username"]) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST["firstName"]) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST["lastName"]) &&
                preg_match('/^(?=.[0-9])(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[$@$!%?&])([0-9A-Za-z\d$@$!%?&]|[^ ]){8,15}$/', $_POST["email"]) &&
                preg_match('/^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[$@$!%?&])([A-Za-z\d$@$!%?&]|[^ ]){8,15}$/', $_POST["password"]))
            {
                # code...
            }
        }else {
            include "views/modules/signup.php";
        }

        return "";
    }
}
