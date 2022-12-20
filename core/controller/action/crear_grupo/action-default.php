<?php
	/**
	*	Crear un nuevo grupo
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	$tabla_grupos = new Tabla_Grupos();

	$nombre_del_grupo = $_REQUEST['nombre_del_grupo'];

	$tabla_grupos->set_nuevo_grupo($nombre_del_grupo);

	header("Location: ./?view=mis_grupos&grupo_creado_exitosamente");
?>