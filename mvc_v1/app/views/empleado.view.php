<?php
require_once('app/models/empleado.model.php');
require_once('./libs/smarty/libs/Smarty.class.php');

class EmpleadoView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showError(){
        $this->smarty->assign('msgDeError','ERROR EN LA SOLICITUD');
        $this->smarty->display('templates/showError.tpl'); // muestro el template
    }

    function showFormulario(){
        $this->smarty->assign('titulo','Formulario de Alta de Empleado');
        $this->smarty->assign('tituloPagina','Alta de Empleado');
        $this->smarty->display('templates/formAltaEmpleado.tpl'); // muestro el template
    }

    function showEmpleado($empleado){
        $this->smarty->assign('titulo','Detalle de Empleado');
        $this->smarty->assign('tituloPagina','Detalle Empleado');
        $this->smarty->assign('empleado', $empleado);
        $this->smarty->display('templates/detalleEmpleado.tpl'); // muestro el template
    }

    function showEmpleados($empleados){
        //$smarty = new Smarty();
        $this->smarty->assign('titulo','Lista de Empleados');
        $this->smarty->assign('tituloPagina','Lista de Empleados');
        $this->smarty->assign('empleados', $empleados);
        $this->smarty->display('templates/listaEmpleados.tpl'); // muestro el template
    }
}


