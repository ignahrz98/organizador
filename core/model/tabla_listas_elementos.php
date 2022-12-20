<?php
	/**
	*	Modelo de la tabla: listas_elementos.
	**/
	class Tabla_Listas_Elementos
	{
		const NOMBRE_DE_TABLA = "listas_elementos";

		var $resultados_de_la_consulta;

		/**
		*	Añadir nuevo elemento a una lista.
		*
		*	@param 	id_lista 					ID de la lista a añadir elemento.
		*	@param 	contenido_lista_elemento 	Contenido de la lista.
		* 	@param 	fecha_de_creacion 			Fecha de creación de elemento.
		*	@param 	estado_de_elemento 			Estado por defecto del elemento.
		**/
		public function set_nuevo_lista_elemento(	$id_lista,
													$contenido_lista_elemento,
													$fecha_de_creacion,
													$estado_de_elemento)
		{
			$db = new DBController();

			$sql = 	"INSERT INTO " . self::NOMBRE_DE_TABLA . "(
						id_lista,
						contenido_lista_elemento,
						fecha_de_creacion,
						estado_de_elemento )

					VALUES (
						" . $id_lista . ",
						'" . $contenido_lista_elemento . "',
						'" . $fecha_de_creacion . "',
						" . $estado_de_elemento . "
					);";

			$db->ejecutar($sql);
		}

		/**
		*	Obtener los elementos de una lista.
		*
		*	@param 		id_lista 	ID de la lista a obtener elementos.
		*
		*	@return 	Elementos de la lista.
		**/
		public function get_listas_elementos($id_lista)
		{
			$db = new DBController();

			$sql = 	"SELECT * FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista = " . $id_lista . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;
		}

		/**
		*	Obtener la info de un elemento de la lista.
		*
		*	@param 		$id_lista_elemento 	ID del elemento a consultar.
		*
		*	@return 	Elemento encontrado
		**/
		public function get_lista_elemento($id_lista_elemento)
		{
			$db = new DBController();

			$sql = 	"SELECT * FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista_elemento = " . $id_lista_elemento . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;
		}

		/**
		*	Actualizar un elemento de una lista.
		*
		* 	@param 	contenido_lista_elemento 	ELemento de la lista.
		*	@param 	estado_de_elemento 			Estado del elemento.
		**/
		public function actualizar_lista_elemento(	$id_lista_elemento,
													$contenido_lista_elemento,
													$estado_de_elemento)
		{
			$db = new DBController();

			$sql = 	"UPDATE " . self::NOMBRE_DE_TABLA . "
					SET 
						contenido_lista_elemento = '" . $contenido_lista_elemento . "',
						estado_de_elemento = " . $estado_de_elemento . "
					WHERE id_lista_elemento = " . $id_lista_elemento . ";";

			$db->ejecutar($sql);
		}

		/**
		*	Eliminar un elemento de una lista
		*
		*	@param 	id_lista_elemento  ID del elemento a eliminar
		**/	
		public function eliminar_elemento($id_lista_elemento)
		{
			$db = new DBController();

			$sql = "DELETE FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista_elemento = " . $id_lista_elemento . ";";

			$db->ejecutar($sql);
		}

		/**
		*	Verificar si una lista posee elementos.
		*	Si se encuentra elementos que pertenecen a una lista, retornar true.
		*
		*	@param 		id_lista 	ID de la lista a consultar si posee elementod.
		*
		*	@return 	boolean 	Status de la consulta.
		**/
		public function get_status_lista_posee_elementos($id_lista)
		{
			$db = new DBController();

			$sql = "SELECT COUNT(*) FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista = " . $id_lista . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

					#	Retornar valor boleano.
			foreach ($this->resultados_de_la_consulta as $key) 
			{
				if ($key['COUNT(*)'] == 0) 
				{

					return false;

				} 
					else 
				{

					return true;

				}
			}
		}
	}
?>