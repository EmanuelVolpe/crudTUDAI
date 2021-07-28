<?php
    include_once './views/auth.view.php';
    include_once './models/user.model.php';

    class AuthController{

        private $authView;
        private $userModel;

        public function __construct(){
            $this->userModel = new UserModel();
            $this->authView = new AuthView();
        }

        public function login(){
            $this->authView->showLogin();
        }

        public function mostrarFormularioAlta(){
            $this->authView->showFormAlta();
        }

        public function altaUser(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            if(empty($nombre) || empty($apellido) || empty($email) || empty($pass)){
                echo 'Faltan datos obligatorios'; //HAY QUE MODIFICARLO!!!!
                die();
            }

            $password = password_hash($pass, PASSWORD_DEFAULT);

            $this->userModel->addUser($nombre,$apellido,$email,$password);
            header("Location: ".BASE_URL. "login");
        }

        public function verifyUser(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($email) || empty($password)){
                echo 'Faltan datos obligatorios'; //HAY QUE MODIFICARLO!!!!
                die();
            }

            $user = $this->userModel->getUserByEmail($email);

            if ($user && (password_verify($password, $user->password))){
                echo 'Usuario correcto'; //HAY QUE MODIFICARLO!!!!
            } else {
                echo 'Usuario o contraseña incorrectos'; //HAY QUE MODIFICARLO!!!!
            }

        }

    }