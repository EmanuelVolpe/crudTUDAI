<?php
include_once 'app/config/config.php';

class UserModel{

    private $conexion;

    public function __construct(){
        $this->conexion = $this->connection();
    }

    public function connection(){
        try {
            $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            return $conexion;
        } catch (Exception $error) {
            die('El error al conectarse a la Base de Datos es: '.$error->getMessage());
        }
    }

    public function getUserByEmail($email){
        $consulta = "SELECT * FROM usuarios WHERE email=?";
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute([$email]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;

    }

    public function addUser($nombre,$apellido,$email,$password){
        $sentencia = $this->conexion->prepare("INSERT INTO usuarios(nombre, apellido, email, password) VALUES(?,?,?,?)");
        $sentencia->execute([$nombre,$apellido,$email,$password]);
    }

}