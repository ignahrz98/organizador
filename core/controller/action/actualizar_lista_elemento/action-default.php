<?php
	/**
	*	Action para actualizar un elemento de una lista.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas_elementos.php");
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista_elemento = $_REQUEST['id_lista_elemento'];
	$contenido_lista_elemento = $_REQUEST['contenido_lista_elemento'];
	$estado_del_elemento = $_REQUEST['estado_del_elemento'];

	$tabla_listas_elementos->actualizar_lista_elemento(	$id_lista_elemento,
														$contenido_lista_elemento,
														$estado_del_elemento);

	header("Location: ./?view=editar_lista_elemento&id_lista_elemento=" . $id_lista_elemento . "&elemento_actualizado_exitosamente");
?>