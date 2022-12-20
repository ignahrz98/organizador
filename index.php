<?php
    /**
    * @titulo           Index
    * @descripcion      No hace nada, solo establecer configuraciones iniciales, e iniciar
    *                   la carga del sistema.
    *
    * @titulo           Organizador
    * @author           Ignacio Hernández.
    * @version          1.0
    **/

    #   Para mostrar advertencias comente la siguiente linea.
    error_reporting(0);

    # Establecer zona horaria de Venezuela.
    date_default_timezone_set('America/Caracas');

    define( '_ADD_VIEW_', 'core/view/');
    define( '_ADD_ACTION_', 'core/controller/action/');
    define('_ADD_MODEL_', 'core/model/');
    define( '_ADD_CONTROLLER_', 'core/controller/');
    define( '_VIEW_FILE', 'widget-default.php');
    define( '_ACTION_FILE', 'action-default.php');

    #   Carga inicial de archivos necesarios para ejecutar el sistema.
    require_once("core/autoload.php");
?>