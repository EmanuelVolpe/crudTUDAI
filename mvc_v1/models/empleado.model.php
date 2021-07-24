<?php
include_once './config/config.php';

class EmpleadoModel{

    function connection(){
        try {
            $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            return $conexion;
        } catch (Exception $error) {
            die('El error al conectarse a la Base de Datos es: '.$error->getMessage());
        }
    }

    function getEmpleados() {
        $conexion = $this->connection();
        $consulta = "select * from empleados order by nombre asc";
        $sentencia = $conexion->prepare($consulta);
        $sentencia->execute();
        $empleados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        //var_dump($empleados);
        return $empleados;
    }

    function addEmpleado($nombre,$apellido,$email){
        $conexion = $this->connection();
        $sentencia = $conexion->prepare("INSERT INTO empleados(nombre, apellido, email) VALUES(?,?,?)");
        $sentencia->execute([$nombre,$apellido,$email]);
    }

    function deleteEmpleado($id){
        $conexion = $this->connection();
        $sentencia = $conexion->prepare("DELETE FROM empleados WHERE id=?");
        $sentencia->execute([$id]);
    }

    public function getEmpleado($id){
        $conexion = $this->connection();
        $consulta = "SELECT * FROM empleados WHERE id=?";
        $sentencia = $conexion->prepare($consulta);
        $sentencia->execute([$id]);
        $empleado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $empleado;
    }

}


