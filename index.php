<?php

require_once "controladores/caso.controlador.php";
require_once "controladores/cliente.controlador.php";
require_once "controladores/factura.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/menu.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/revisar.controlador.php";
require_once "controladores/tecnico.controlador.php";
require_once "controladores/usuarios.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/usuarios.modelo.php";

$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();
