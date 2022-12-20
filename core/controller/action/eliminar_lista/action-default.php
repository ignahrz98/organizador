<?php
	/**
	*	Action para eliminar una lista.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas.php");
	require_once(_ADD_MODEL_ . "tabla_listas_elementos.php");
	$tabla_listas = new Tabla_Listas();
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista = $_REQUEST['id_lista'];

	#	Verificar si lista contiene elementos.
	if ($tabla_listas_elementos->get_status_lista_posee_elementos($id_lista) == false) 
	{
		$tabla_listas->eliminar_lista($id_lista);

		header("Location: ./?view=mis_grupos&lista_eliminada");
	}
		else
	{
		header("Location: ./?view=lista&id_lista=" . $id_lista . "&eliminar_denegado");
	}
?>