<?php
include_once "models/conexion.php";

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
    }

    public function signupModel($userData)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre) VALUES (:nombre, :email, :mensaje)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);
    }
}
