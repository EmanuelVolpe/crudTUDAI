<?php

require_once('./app/models/empleado.model.php');
require_once('./api/json.view.php');

class ApiEmpleadoController{

    private $model;
    private $view;
    private $data;

    public function __construct()
    {
        $this->model = new EmpleadoModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }

    function obtenerEmpleados($params = null){
        $empleados = $this->model->getEmpleados();
        $this->view->response($empleados, 200);
    }

    function obtenerEmpleado($params = null)
    {
        $idEmpleado = $params[':ID'];
        $empleado = $this->model->getEmpleado($idEmpleado);
        if ($empleado){
            $this->view->response($empleado, 200);
        } 
        else
            $this->view->response("El empleado con el id = {$idEmpleado} no existe", 404);
    }

    function eliminarEmpleado($params = null)
    {
        $idEmpleado = $params[':ID'];
        $empleado = $this->model->getEmpleado($idEmpleado);
        if ($empleado) {
            $this->model->deleteEmpleado($idEmpleado);
            $this->view->response("El empleado con el id = {$idEmpleado} fue eliminado con exito", 200);
        } else
            $this->view->response("El empleado con el id = {$idEmpleado} no existe", 404);
    }

    private function getData()
    {
        return json_decode($this->data);
    }

    function agregarEmpleado($params = null)
    {
        $data = $this->getData();
        $id = $this->model->addEmpleado($data->nombre, $data->apellido, $data->email);
        $empleado = $this->model->getEmpleado($id);
        if ($empleado > 0)
            $this->view->response($empleado, 200);
        else
            $this->view->response("El empleado no fue creado", 500);
    }


}