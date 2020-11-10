<?php
include_once "models/conexion.php";

class UserModel
{
    public function loginModel($datosController)
    {
        $conexion = Conexion::conectar();
        $sentencia = $conexion->prepare('SELECT * FROM users WHERE usuario = :usuario LIMIT 1');

        $sentencia->execute(array(':usuario' => $usuario));

        $resultado = $sentencia->fetch();

        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }

    }
}
