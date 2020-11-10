<?php
include_once "../models/conexion.php";

class UserModel
{
    public function loginModel($datosController)
    {
        $conexion = Conexion::conectar();
        $sentencia = $conexion->prepare('SELECT * FROM users WHERE username = :usuario LIMIT 1');
        $sentencia -> bindParam(":usuario", $datosController["usuario"], PDO::PARAM_STR);
        $sentencia->execute();

        $resultado = $sentencia->fetch();

        if (!empty($resultado))
        {
            if($resultado["password"] == $datosController["usuario"])
            {
                
            }
        }

    }
}
