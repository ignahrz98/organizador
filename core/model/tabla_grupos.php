<?php
	/**
	*	Modelo de la tabla: grupos.
	**/
	class Tabla_Grupos 
	{
		const NOMBRE_DE_TABLA = "grupos";

		var $resultados_de_la_consulta;

		/**
		*	Crear un nuevo grupo
		*	
		*	$nombre_del_grupo 	Nombre del grupo a crear
		**/
		public function set_nuevo_grupo($nombre_del_grupo)
		{

			$db = new DBController();

			$sql = 	"INSERT INTO " . self::NOMBRE_DE_TABLA . "(
						nombre_grupo )

					VALUES (
						'" . $nombre_del_grupo . "'
					);";

			$db->ejecutar($sql);
			
		}

		/**
		*	Retornar grupos creados.
		**/
		public function get_grupos()
		{

			$db = new DBController();

			$sql = "SELECT * FROM " . self::NOMBRE_DE_TABLA . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;

		}

		/**
		*	Consultar grupo por ID.
		*
		*	@param 		$id_grupo			ID del grupo a consultar.
		*
		*	@return 	Grupo encontrado.
		**/
		public function get_grupo_por_id($id_grupo)
		{
			$db = new DBController();

			$sql = "SELECT * FROM " . self::NOMBRE_DE_TABLA . " 
					WHERE id_grupo = " . $id_grupo . ";";

			$this->resultados_de_la_consulta = $db->ejecutar_consulta($sql);

			return $this->resultados_de_la_consulta;
		}

		/**
		*	Actualizar un grupo.
		*
		*	@param 	$id_grupo 			ID del grupo a actualizar.
		*	@param 	$new_nombre_grupo	Nuevo nombre del grupo.
		**/
		public function actualizar_grupo($id_grupo, $new_nombre_grupo)
		{
			$db = new DBController();

			$sql = 	"UPDATE " . self::NOMBRE_DE_TABLA . "
					SET 
						nombre_grupo = '" . $new_nombre_grupo . "'
					WHERE id_grupo = " . $id_grupo . ";";

			$db->ejecutar($sql);
		}

		/**
		*	Eliminar un grupo.
		*
		* 	@param 	$id_grupo 	ID del grupo a eliminar
		**/
		public function eliminar_grupo($id_grupo)
		{
			$db = new DBController();

			$sql = "DELETE FROM " . self::NOMBRE_DE_TABLA . "
					WHERE id_grupo = " . $id_grupo . ";";

			$db->ejecutar($sql);
		}
	}
?>