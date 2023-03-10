<?php
	/**
	*	Vista para editar grupos.
	**/

	require_once(_ADD_CONTROLLER_ . "editar-grupo-controller.php");
?>

<!--Area de las alertas-->
<?php
	if (isset($_GET['grupo_editado_exitosamente'])) 
	{
?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		    Grupo actualizado exitosamente.
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a href="./?view=mis_grupos">&laquo; Volver a mis grupos.</a></li>
	  		</ol>
		</nav>
<?php
	}

	if (isset($_GET['eliminar_denegado'])) 
	{
?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		    Eliminar denegado debido a que el grupo posee listas.
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a href="./?view=mis_grupos">&laquo; Volver a mis grupos.</a></li>
	  		</ol>
		</nav>
<?php
	}
?>

<div class="col-md-4 offset-md-4 my-5">
	<form action="./?action=editar_grupo" method="post">
		<fieldset>
			<legend>Editar grupo</legend>

				<div class="form-floating mb-3">
				   	<input type="text" name="nombre_grupo" class="form-control" id="nombre_grupo" placeholder="grupo" value="<?php echo $nombre_grupo_encontrado; ?>">
			    	<label for="nombre_grupo">Nombre del grupo</label>
				</div>

				<input type="hidden" name="id_grupo" value="<?php echo $id_grupo; ?>">
				
				<div class="row justify-content-between">
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
					</div>
					<div class="col-4">
						<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmar">Eliminar</button>
					</div>
				</div>
		</fieldset>
	</form>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Confirmar acci??n</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        		??Est?? seguro de querer eliminar el grupo? Esta acci??n es irreversible.
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        		<a class="btn btn-primary" href="./?action=eliminar_grupo&id_grupo=<?php echo $id_grupo; ?>" role="button">Eliminar definitivamente</a>
      		</div>
		</div>
  	</div>
</div>