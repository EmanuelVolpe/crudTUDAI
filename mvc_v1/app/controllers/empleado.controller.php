<?php
    include_once 'app/models/empleado.model.php';
    include_once 'app/views/empleado.view.php';
    include_once 'app/helpers/auth.helper.php';

    class EmpleadoController{

        private $empleadoModel;
        private $empleadoView;
        private $authHelper;

        public function __construct(){
            $this->empleadoModel = new EmpleadoModel();
            $this->empleadoView = new EmpleadoView();
            $this->authHelper = new AuthHelper();
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
                echo 'Faltan datos obligatorios'; //HAY QUE MODIFICARLO!!!!
                die();
            }

            $this->empleadoModel->addEmpleado($nombre,$apellido,$email);
            header("Location: " . LISTAR);
        }

        function eliminarEmpleado($id){
            $this->empleadoModel->deleteEmpleado($id);
            header("Location: ". LISTAR);
        }

        function mostrarEmpleado($id){
            $empleado = $this->empleadoModel->getEmpleado($id);
            $this->empleadoView->showEmpleado($empleado);
        }

        function muestraError(){
            $this->empleadoView->showError();
        }
    }


