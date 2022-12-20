<?php
	/**
	*	Action para crear una lista nueva.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas.php");
	$tabla_listas = new Tabla_Listas();

	$id_grupo = $_REQUEST['id_grupo'];
	$nombre_lista = $_REQUEST['nombre_lista'];

	$tabla_listas->set_nueva_lista($nombre_lista,$id_grupo);

	header("Location: ./?view=crear_lista_nueva&id_grupo=" . $id_grupo . "&lista_creada_exitosamente");
?>