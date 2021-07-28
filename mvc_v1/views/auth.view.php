<?php
    require_once('./libs/smarty/libs/Smarty.class.php');

    class AuthView {

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        public function showLogin(){
            $this->smarty->assign('titulo','FORMULARIO DE LOGIN');
            $this->smarty->assign('tituloPagina','Formulario de Login');
            $this->smarty->display('templates/formLogin.tpl'); // muestro el template
        }

        public function showFormAlta(){
            $this->smarty->assign('titulo','FORMULARIO DE ALTA');
            $this->smarty->assign('tituloPagina','Formulario de Alta');
            $this->smarty->display('templates/formAltaUser.tpl'); // muestro el template
        }



    }
