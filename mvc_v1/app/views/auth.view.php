<?php
    require_once('./libs/smarty/libs/Smarty.class.php');

    class AuthView {

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        /*public function showHome(){
            $this->smarty->assign('titulo','BIENVENIDO A LA APP !!!!');
            $this->smarty->assign('tituloPagina','Bienvenido');
            $this->smarty->display('templates/home.tpl'); // muestro el template
        }*/

        public function showNosotros(){
            $this->smarty->assign('tituloPagina','Nosotos');
            $this->smarty->display('templates/nosotros.tpl'); // muestro el template
        }

        public function showLogin($msgDeError = null){
            $this->smarty->assign('titulo','FORMULARIO DE LOGIN');
            $this->smarty->assign('msgDeError',$msgDeError);
            $this->smarty->assign('tituloPagina','Formulario de Login');
            $this->smarty->display('templates/formLogin.tpl'); // muestro el template
        }

        public function showFormAlta(){
            $this->smarty->assign('titulo','FORMULARIO DE ALTA');
            $this->smarty->assign('tituloPagina','Formulario de Alta');
            $this->smarty->display('templates/formAltaUser.tpl'); // muestro el template
        }

    }
