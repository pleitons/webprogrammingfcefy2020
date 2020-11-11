<?php

include 'models/User.php';

class UserController
{
    public function loginController()
    {
        if(isset($_POST["user"]) && isset($_POST["password"]))
        {
            if( preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["username"]) &&
                preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*._-])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,15}$/', $_POST["password"]))
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

    public function signupController()
    {
        if( isset($_POST["firstName"]) &&
            isset($_POST["lastName"]) &&
            isset($_POST["username"]) &&
            isset($_POST["email"]) &&
            isset($_POST["password"]) &&
            isset($_POST["gender"]))
        {
           
            if( 
                preg_match('/^[a-zA-Z\s]+$/', $_POST["firstName"]) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST["lastName"]) &&
                preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["username"]) &&
                preg_match('/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/', $_POST["email"]) &&
                preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*._-])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,15}$/', $_POST["password"]) &&
                preg_match('/^[1-3]{1,1}$/', $_POST["gender"]))
            {
                $password = crypt($_POST['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); //encriptamos la contraseña

                $userData = array(
                    ':roleId' => 2,
                    ':genderId'=> $_POST['gender'],
                    ':name' => $_POST['firstName'],
                    ':lastName' => $_POST['lastName'],
                    ':phoneNum'=> 1542121 ,// $_POST['phoneNum'],
                    ':email' => $_POST['email'],
                    ':username' => $_POST['username'],
                    ':password' => $password,
                );

                $response = UserModel::signupModel($userData);
            }
        }else {
            include "views/modules/signup.php";
        }

        return "";
    }
}
