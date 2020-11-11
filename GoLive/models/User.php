<?php
include_once "models/conexion.php";
include_once "models/Session.php";

class UserModel
{
    public function loginModel($datosController)
    {
        $errores = '';
        $conexion = Conexion::conectar();
        $sentencia = $conexion->prepare('SELECT * FROM users WHERE username = :usuario LIMIT 1');
        $sentencia -> bindParam(":usuario", $datosController["usuario"], PDO::PARAM_STR);
        $sentencia->execute();

        $resultado = $sentencia->fetch();

        if (!empty($resultado))
        {
            if($resultado["password"] == $datosController["password"])
            {
                $session = new Session;
                $session->start();
                $session->add('username', $datosController["usuario"]);
                $session->add('rol', $resultado["roleId"]);
                echo('login exitoso');
            }
            else
            {
                $errores .= '<li>Contraseña o usuario incorrecto.</li>';
            }
        }
        else
        {
            $errores .= '<li>Contraseña o usuario incorrecto.</li>';
        }
        echo($errores);
    }
}
