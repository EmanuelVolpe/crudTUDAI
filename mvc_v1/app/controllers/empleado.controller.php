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

        function uniqueRealName($realName, $tempName){
            $filePath = "images/" . uniqid("", true) . ".". strtolower(pathinfo($realName, PATHINFO_EXTENSION));
            move_uploaded_file($tempName, $filePath);
            return $filePath;
        }

        function agregarEmpleado(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            //$realName = $_FILES['input_name']['tmp_name'];

            if(empty($nombre) || empty($apellido) || empty($email)){
                $this->empleadoView->showError('Faltan datos obligatorios');
                die();
            }

            if ($_FILES['input_name']['type'] == "image/jpg" || 
                $_FILES['input_name']['type'] == "image/jpeg" || 
                $_FILES['input_name']['type'] == "image/png")
            {
                $realName = $this->uniqueRealName($_FILES['input_name']['name'], $_FILES['input_name']['tmp_name']);
                $this->empleadoModel->addEmpleado($nombre,$apellido,$email,$realName);
            }
            else
                $this->empleadoModel->addEmpleado($nombre, $apellido, $email);
        
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
    }


