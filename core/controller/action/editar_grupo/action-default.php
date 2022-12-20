<?php
	/**
	*	Action para editar grupos.
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	$tabla_grupos = new Tabla_Grupos();

	$id_grupo = $_REQUEST['id_grupo'];
	$new_nombre_grupo = $_REQUEST['nombre_grupo'];

	$tabla_grupos->actualizar_grupo($id_grupo,$new_nombre_grupo);

	header("Location: ./?view=editar_grupo&id_grupo=" . $id_grupo . "&grupo_editado_exitosamente");

?>