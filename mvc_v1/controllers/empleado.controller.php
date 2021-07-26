<?php
    include_once './models/empleado.model.php';
    include_once './views/empleado.view.php';

    class EmpleadoController{

        private $empleadoModel;
        private $empleadoView;

        public function __construct(){
            $this->empleadoModel = new EmpleadoModel();
            $this->empleadoView = new EmpleadoView();
        }

        function mostrarHome(){
            $this->empleadoView->showHome();
        }

        function mostrarFormularioAlta(){
            $this->empleadoView->showFormulario();
        }

        function mostrarEmpleados(){
            $empleados = $this->empleadoModel->getEmpleados();
            $this->empleadoView->showEmpleados($empleados);
        }

        function agregarEmpleado(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];

            if(empty($nombre) || empty($apellido)){
                echo 'Faltan datos obligatorios';
                die();
            }

            $this->empleadoModel->addEmpleado($nombre,$apellido,$email);
            header("Location: ".BASE_URL. "listar");
        }

        function eliminarEmpleado($id){
            $this->empleadoModel->deleteEmpleado($id);
            header("Location: ".BASE_URL. "listar");
        }

        function mostrarEmpleado($id){
            $empleado = $this->empleadoModel->getEmpleado($id);
            $this->empleadoView->showEmpleado($empleado);
        }

        function muestraError(){
            $this->empleadoView->showError();
        }
    }


