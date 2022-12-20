<?php
	/**
	*	Vista para crear una lista nueva
	**/

	require_once(_ADD_CONTROLLER_ . "crear-lista-nueva-controller.php");
?>

<!--Area de las alertas-->
<?php
	if (isset($_GET['lista_creada_exitosamente'])) 
	{
?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		    Lista creada exitosamente.
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php
	}
?>

<div class="col-md-4 offset-md-4 my-5">
	<form action="./?action=crear_lista" method="post">
		<fieldset>
			<legend>Crear lista</legend>

				<div class="form-floating mb-3">
				   	<input type="text" name="nombre_lista" class="form-control" id="nombre_lista" placeholder="grupo">
			    	<label for="nombre_lista">Nombre de la nueva lista</label>
				</div>

				<input type="hidden" name="id_grupo" value="<?php echo $id_grupo; ?>">
				
				<div class="row justify-content-start">
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
					</div>
				</div>
		</fieldset>
	</form>
</div>