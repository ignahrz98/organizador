<?php
	/**
	*	Controlador de la vista de mis grupos.
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	$tabla_grupos = new Tabla_Grupos();

	$grupos_creados = $tabla_grupos->get_grupos();
?>