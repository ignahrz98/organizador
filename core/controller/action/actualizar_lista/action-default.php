<?php
	/**
	*	Action para actualizar una lista.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas.php");
	$tabla_listas = new Tabla_Listas();

	$id_lista = $_REQUEST['id_lista'];
	$nombre_lista = $_REQUEST['nombre_lista'];

	$tabla_listas->actualizar_lista($id_lista,$nombre_lista);

	header("Location: ./?view=lista&id_lista=" . $id_lista);
?>