<?php

class AuthHelper {

    public function __construct() {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    /**
     * Barrera de seguridad para usuario logueado
     */
    public function checkLogged() {
        //session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: " . BASE_URL . 'home');
            die(); 
        }
    }   
    
    public function logout() {
        //session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }    

    public function login($user) {
        //session_start();
        $_SESSION['ID_USER'] = $user->id_usuario;
        $_SESSION['EMAIL_USER'] = $user->email;
    }


}
