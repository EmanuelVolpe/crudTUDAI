<?php
include_once 'app/config/config.php';

class EmpleadoModel{

    private $conexion;

    public function __construct(){
        $this->conexion = $this->connection();
    }

    private function connection(){
        try {
            $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            return $conexion;
        } catch (Exception $error) {
            die('El error al conectarse a la Base de Datos es: '.$error->getMessage());
        }
    }

    public function getEmpleados() {
        //$conexion = $this->connection();
        $consulta = "select * from empleados order by nombre asc";
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute();
        $empleados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        //var_dump($empleados);
        return $empleados;
    }

    private function uploadImage($image){
        $target = 'images/' . uniqid('', true) . '.' . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }


    public function addEmpleado($nombre,$apellido,$email,$imagen = null) {
        if ($imagen){
            $sentencia = $this->conexion->prepare("INSERT INTO empleados(nombre, apellido, email, imagen) VALUES(?,?,?,?)");
            $sentencia->execute([$nombre, $apellido, $email, $imagen]);
        } else {
            $sentencia = $this->conexion->prepare("INSERT INTO empleados(nombre, apellido, email) VALUES(?,?,?)");
            $sentencia->execute([$nombre, $apellido, $email]);
        }
        
    }

    public function deleteEmpleado($id){
        $sentencia = $this->conexion->prepare("DELETE FROM empleados WHERE id=?");
        $sentencia->execute([$id]);
    }

    public function getEmpleado($id){
        $consulta = "SELECT * FROM empleados WHERE id=?";
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute([$id]);
        $empleado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $empleado;
    }

}


