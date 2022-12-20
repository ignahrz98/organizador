<?php
	/**
	*	Controlador de la vista de editar elemento de una lista.
	**/

	/**
	*	Verificar checked en radio de estado del elemento.
	*
	*	@param 	estado_de_elemento_a_comparar 
	* 	@param 	estado_de_elemento_entrante
	**/
	function verificar_checked(	$estado_de_elemento_a_comparar,
								$estado_de_elemento_entrante)
	{
		if ($estado_de_elemento_a_comparar == $estado_de_elemento_entrante) 
		{
			echo "checked";
		}
	}

	require_once(_ADD_MODEL_ . "tabla_listas_elementos.php");
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista_elemento = $_REQUEST['id_lista_elemento'];

	$elemento_encontrado = $tabla_listas_elementos->get_lista_elemento($id_lista_elemento);

	foreach ($elemento_encontrado as $key)
	{
		$id_lista = $key['id_lista'];
		$contenido_lista_elemento = $key['contenido_lista_elemento'];
		$estado_de_elemento = $key['estado_de_elemento'];
	}
?>