<?php
    include_once 'app/views/auth.view.php';
    include_once 'app/models/user.model.php';
    include_once 'app/helpers/auth.helper.php';

    class AuthController{

        private $authView;
        private $userModel;
        private $authHelper;

        public function __construct(){
            $this->userModel = new UserModel();
            $this->authView = new AuthView();
            $this->authHelper = new AuthHelper();
        }

        function mostrarHome(){
            $this->authView->showHome();
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
                $this->authView->showLogin('Hay algun error en los datos de logueo');
                die();
            }

            $user = $this->userModel->getUserByEmail($email);

            if ($user && (password_verify($password, $user->password))){
                $this->authHelper->login($user);
                header("Location: ".BASE_URL. "listar");
            } else {
                $this->authView->showLogin('Usuario o contraseña incorrectos');
                die();
            }
        }

        public function logout() {
            $this->authHelper->logout();
        }
    
    }