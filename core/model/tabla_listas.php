<?php
	/**
	*	Modelo de la tabla: listas.
	**/

	class Tabla_Listas
	{
		const NOMBRE_DE_TABLA = "listas";

		var $resultados_de_la_consulta;


		/**
		*	Crear una nueva lista.
		*
		*	@param 	$nombre_lista 	Nombre de la lista crear.
		*	@param 	$id_grupo 		ID del grupo a añadir.
		**/
		public function set_nueva_lista($nombre_lista,$id_grupo)
		{
			$db = new DBController();

			$sql = 	"INSERT INTO " . self::NOMBRE_DE_TABLA . "(
						id_grupo,
						nombre_lista )

					VALUES (
						" . $id_grupo . ",
						'" . $nombre_lista . "'
					);";

			$db->ejecutar($sql);
		}

		/**
		*	Obtener las listas que pertenecen a un grupo.
		*
		*	@param 		$id_grupo 	ID del grupo a obtener listas
		*
		*	@return 	listas encontradas.
		**/
		public function get_listas_by_grupo($id_grupo)
		{
			$db = new DBController();

			$sql = 	"SELECT * FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_grupo = " . $id_grupo . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;
		}

		/**
		*	Obtener la info de una lista
		*
		*	@param 		$id_lista 	ID de la lista a consultar-
		*
		* 	@return 	Lista encontrada
		**/
		public function get_lista($id_lista)
		{
			$db = new DBController();

			$sql = 	"SELECT * FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista = " . $id_lista . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;
		}

		/**
		*	Actualizar una lista.
		*
		*	@param 	id_lista 		ID de la lista a actualizar.
		*	@param 	nombre_lista 	Nombre la lista nuevo.
		**/
		public function actualizar_lista($id_lista,$nombre_lista)
		{
			$db = new DBController();

			$sql = 	"UPDATE " . self::NOMBRE_DE_TABLA . "
					SET 
						nombre_lista = '" . $nombre_lista . "'
					WHERE id_lista = " . $id_lista . ";";

			$db->ejecutar($sql);
		}

		/**
		*	Eliminar una lista.
		*
		*	@param id_lista 	ID de la lista a eliminar
		**/
		public function eliminar_lista($id_lista)
		{
			$db = new DBController();

			$sql = "DELETE FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_lista = " . $id_lista . ";";

			$db->ejecutar($sql);
		}

		/**
		*	Verificar si una grupo posee listas
		*	Si se encuentra listas que pertenecen a una grupo, retornar true.
		*
		*	@param 		id_grupo 	ID del grupo a consultar si posee listas.
		*
		*	@return 	boolean 	Status de la consulta.
		**/
		public function get_status_grupo_posee_listas($id_grupo)
		{
			$db = new DBController();

			$sql = "SELECT COUNT(*) FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_grupo = " . $id_grupo . ";";

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