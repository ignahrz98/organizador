<?php
	/**
	*	Action para crear un elemento para una lista.
	**/

	require_once(_ADD_MODEL_ . "tabla_listas_elementos.php");
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista = $_REQUEST['id_lista'];
	$contenido_lista_elemento = $_REQUEST['contenido_lista_elemento'];

	$estado_de_elemento_default = 0;
	$fecha_de_creacion = date("Y/m/d");

	$tabla_listas_elementos->set_nuevo_lista_elemento(	$id_lista,
														$contenido_lista_elemento,
														$fecha_de_creacion,
														$estado_de_elemento_default);

	header("Location: ./?view=lista&id_lista=" . $id_lista . "&elemento_añadido_exitosamente");

?>