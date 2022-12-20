<?php
	/**
	*	Controlador de la vista de editar grupo.
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	$tabla_grupos = new Tabla_Grupos();

	$id_grupo = $_REQUEST['id_grupo'];

	$grupo_encontrado = $tabla_grupos->get_grupo_por_id($id_grupo);

	foreach ($grupo_encontrado as $key) 
	{
		$nombre_grupo_encontrado = $key['nombre_grupo'];
	}
?>