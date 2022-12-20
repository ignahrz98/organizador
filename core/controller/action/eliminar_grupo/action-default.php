<?php
	/**
	*	Action para eliminar un grupo.
	**/

	require_once(_ADD_MODEL_ . "tabla_grupos.php");
	require_once(_ADD_MODEL_ . "tabla_listas.php");
	$tabla_grupos = new Tabla_Grupos();
	$tabla_listas = new Tabla_Listas();

	$id_grupo = $_REQUEST['id_grupo'];

	# 	Verificar si el grupo posee listas.
	if ($tabla_listas->get_status_grupo_posee_listas($id_grupo) == false) 
	{
		$tabla_grupos->eliminar_grupo($id_grupo);

		header("Location: ./?view=mis_grupos&grupo_eliminado_exitosamente");
	}
		else
	{
		header("Location: ./?view=editar_grupo&id_grupo=" . $id_grupo . "&eliminar_denegado");
	}
?>