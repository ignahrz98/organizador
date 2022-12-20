<?php
	/**
	*	Controlador de la vista de una lista.
	**/

	/**
	*	Mostrar mensaje de estado correspondiente a su numeral.
	*
	*	@param 	estado_de_elemento 	Estado de elemento en numeral.
	*
	* 	@return String 				Mensaje correspondiente.
	**/
	function show_mensaje_estado($estado_de_elemento)
	{
		if ($estado_de_elemento == 0 ) 
		{
			return "Inactivo";
		} 
			elseif ($estado_de_elemento == 1) 
		{
			return "Activo";
		}
			elseif ($estado_de_elemento == 2) 
		{
			return "Completado";
		}
	}

	/**
	*	Añadir class para estilo de la fila de la tabla
	*
	*	@param 	estado_de_elemento 	Estado del elemento de la fila de la tabla.
	*
	*	@return 	class correspondiente.
	**/
	function add_class_estado_de_elemento_fila($estado_de_elemento)
	{
		if ($estado_de_elemento == 0 ) 
		{
			return "table-default";
		} 
			elseif ($estado_de_elemento == 1) 
		{
			return "table-primary";
		}
			elseif ($estado_de_elemento == 2) 
		{
			return "table-success";
		}
	}

	require_once(_ADD_MODEL_ . "tabla_listas.php");
	require_once(_ADD_MODEL_. "tabla_listas_elementos.php");
	$tabla_listas = new Tabla_Listas();
	$tabla_listas_elementos = new Tabla_Listas_Elementos();

	$id_lista = $_REQUEST['id_lista'];

	foreach ($tabla_listas->get_lista($id_lista) as $key)
	{
		$id_lista = $key['id_lista'];
		$nombre_lista = $key['nombre_lista'];
	}

	#	Obtener los elementos de una lista.
	$elementos_encontrados = $tabla_listas_elementos->get_listas_elementos($id_lista);

?>