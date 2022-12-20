<?php
	/**
	*	Vista para editar un elemento de una lista.
	**/

	require_once(_ADD_CONTROLLER_ . "editar-lista-elemento-controller.php");
?>

<!--Area de alertas-->
<?php
    if (isset($_GET['elemento_actualizado_exitosamente'])) 
    {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Elemento actualizado exitosamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a href="./?view=lista&id_lista=<?php echo $id_lista; ?>">&laquo; Volver a la lista.</a></li>
	  		</ol>
		</nav>
<?php
    }
?>

<div class="col-md-4 offset-md-4 my-5">
	<form action="./?action=actualizar_lista_elemento" method="post">
		<fieldset>
			<legend>Editar elemento</legend>

				<div class="form-floating mb-3">
				   	<input type="text" name="contenido_lista_elemento" class="form-control" id="contenido_lista_elemento" placeholder="grupo" value="<?php echo $contenido_lista_elemento; ?>">
			    	<label for="contenido_lista_elemento">Contenido</label>
				</div>

				<input type="hidden" name="id_lista_elemento" value="<?php echo $id_lista_elemento; ?>">
				
				<input type="radio" class="btn-check" name="estado_del_elemento" id="inactivo" autocomplete="off" value="0" <?php verificar_checked(0,$estado_de_elemento); ?>>
				<label class="btn btn-outline-secondary" for="inactivo">Inactivo</label>
	
				<input type="radio" class="btn-check" name="estado_del_elemento" id="activo" autocomplete="off" value="1" <?php verificar_checked(1,$estado_de_elemento); ?>>
				<label class="btn btn-outline-primary" for="activo">Activo</label>

				<input type="radio" class="btn-check" name="estado_del_elemento" id="completado" autocomplete="off" value="2" <?php verificar_checked(2,$estado_de_elemento); ?>>
				<label class="btn btn-outline-success" for="completado">Completado</label>
				<br><br>
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
        		<h5 class="modal-title" id="exampleModalLabel">Confirmar acción</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        		¿Está seguro de querer eliminar el elemento? Esta acción es irreversible.
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        		<a class="btn btn-primary" href="./?action=eliminar_elemento&id_lista=<?php echo $id_lista; ?>&id_lista_elemento=<?php echo $id_lista_elemento; ?>" role="button">Eliminar definitivamente</a>
      		</div>
		</div>
  	</div>
</div>