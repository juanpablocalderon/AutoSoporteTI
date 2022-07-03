<?php

require_once "controladores/caso.controlador.php";
require_once "controladores/cliente.controlador.php";
require_once "controladores/factura.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/menu.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/revisar.controlador.php";
require_once "controladores/tecnico.controlador.php";
require_once "controladores/usuario.controlador.php";

require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/usuario.modelo.php";

$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();
