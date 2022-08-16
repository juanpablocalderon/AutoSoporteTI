<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/caso.controlador.php";
require_once "controladores/cliente.controlador.php";
require_once "controladores/factura.controlador.php";
require_once "controladores/menu.controlador.php";
require_once "controladores/revisar.controlador.php";
require_once "controladores/tecnico.controlador.php";
require_once "controladores/usuario.controlador.php";


require_once "modelos/inicio.modelo.php";
require_once "modelos/caso.modelo.php";
require_once "modelos/cliente.modelo.php";
require_once "modelos/factura.modelo.php";
require_once "modelos/menu.modelo.php";
require_once "modelos/revisar.modelo.php";
require_once "modelos/tecnico.modelo.php";
require_once "modelos/usuario.modelo.php";


$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();
