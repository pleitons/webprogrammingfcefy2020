<?php

include 'models/User.php';

class UserController
{
    public function loginController()
    {
        if(isset($_POST["user"]) && isset($_POST["password"]))
        {
            if(preg_match('/^[a-zA-Z\s]+$/', $_POST["user"]) &&
            preg_match('/^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[$@$!%?&])([A-Za-z\d$@$!%?&]|[^ ]){8,15}$/', $_POST["password"]))
            {
                $contraseña = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); //encriptamos la contraseña
                $datosController = array("usuario"=>$_POST["user"],
                "password"=>$contraseña);
                $resultado = UserModel::loginModel($datosController);
            }
        }
        else
        {
            include 'views/modules/form.php';
        }
        return('');
    }
}
