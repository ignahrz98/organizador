<?php
	/**
	*	Controlador del sidebar
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	require_once(_ADD_MODEL_ . "tabla_listas.php");
	$tabla_grupos = new Tabla_Grupos();
	$tabla_listas = new Tabla_Listas();

	$grupos_creados = $tabla_grupos->get_grupos();

?>