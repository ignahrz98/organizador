<?php
	/**
	*	Vista de una lista.
	**/

	require_once(_ADD_CONTROLLER_ . "lista-controller.php");
?>

<!--Area de alertas-->
<?php
    if (isset($_GET['elemento_añadido_exitosamente'])) 
    {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Elemento añadido exitosamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    } 
    	elseif (isset($_GET['elemento_eliminado_exitosamente'])) 
    {
?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
            Elemento eliminado exitosamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php	
    }
        elseif (isset($_GET['eliminar_denegado'])) 
        {
?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Eliminar denegado, debido a que la lista posee elementos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
<?php
        }
?>

<h1><?php echo $nombre_lista; ?> <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#confirmar">Editar</button></h1><hr>

<form action="./?action=crear_lista_elemento" method="post">
	<div class="input-group mb-3">
		<input name="contenido_lista_elemento" class="form-control form-control-sm" type="text" placeholder="Escriba algo" aria-label=".form-control-lg example" required>
		<input type="hidden" name="id_lista" value="<?php echo $id_lista; ?>">
		<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Añadir</button>
	</div>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Contenido</th>
            <th scope="col">Fecha de creación</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php
    #   Si no hay registros, mostrar un mensaje.
    $existen_registros = false;

    foreach ($elementos_encontrados as $key) 
    {
        $existen_registros = true;
?>
  
        <tr class="<?php echo add_class_estado_de_elemento_fila($key['estado_de_elemento']); ?>">
            <th scope="row"><?php echo $key['contenido_lista_elemento']?></th>
            <td><?php echo $key['fecha_de_creacion']; ?></td>
            <td><?php echo show_mensaje_estado($key['estado_de_elemento']); ?></td>
            <td>
                <form action="./?view=editar_lista_elemento" method="post">
                    <input type="hidden" name="id_lista_elemento" value="<?php echo $key['id_lista_elemento']; ?>">
                    <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                </form>
            </td>
        </tr>
            
<?php
    }
?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Lista</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./?action=actualizar_lista" method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="nombre_lista" class="form-control" id="nombre_lista" placeholder="grupo" value="<?php echo $nombre_lista; ?>">
                    <label for="nombre_lista">Nombre de la lista</label>
                </div>
                <input type="hidden" name="id_lista" value="<?php echo $id_lista; ?>">
                * Si la lista posee elementos no se permitirá eliminarla.
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                
                <a class="btn btn-danger" href="./?action=eliminar_lista&id_lista=<?php echo $id_lista; ?>" role="button">Eliminar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>