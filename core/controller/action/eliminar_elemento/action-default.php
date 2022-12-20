<?php
	/**
	*	Action para eliminar un elemento de un lista.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas_elementos.php");
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista = $_REQUEST['id_lista'];
	$id_lista_elemento = $_REQUEST['id_lista_elemento'];

	$tabla_listas_elementos->eliminar_elemento($id_lista_elemento);

	header("Location: ./?view=lista&id_lista=" . $id_lista . "&elemento_eliminado_exitosamente");
?>