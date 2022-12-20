<?php
    /**
    *   Vista de mis grupos
    **/

    require_once(_ADD_CONTROLLER_ . "mis-grupos-controller.php");
?>

<h1>Mis grupos</h1><hr>

<div class="alert alert-dark" role="alert">
	<p>Los grupos le permiten organizar sus listas y ser más productivo.</p>
	<p>Por ejemplo: Inglés, Cocina, Programación, etc.</p>
	<hr>
	<p class="mb-0">Usted deberá crear al menos un grupo, antes de poder crear listas.</p>
</div>

<!--Area de alertas-->
<?php
	if(isset($_GET['grupo_creado_exitosamente']))
	{
?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		    Nuevo grupo creado exitosamente
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php
	}

    if (isset($_GET['grupo_eliminado_exitosamente'])) 
    {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Grupo eliminado exitosamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }

    if (isset($_GET['lista_eliminada'])) 
    {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Lista eliminada exitosamente
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
?>


<form action="./?action=crear_grupo" method="post">
	<div class="input-group mb-3">
		<input name="nombre_del_grupo" class="form-control form-control-sm" type="text" placeholder="Crear un nuevo grupo" aria-label=".form-control-lg example" required>
		<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Crear grupo</button>
	</div>
</form>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre del grupo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php
    #   Si no hay registros, mostrar un mensaje.
    $existen_registros = false;

    foreach ($grupos_creados as $key) 
    {
        $existen_registros = true;
?>
  
        <tr>
            <th scope="row"><?php echo $key['nombre_grupo']?></th>
            <td>
                <form action="./?view=editar_grupo" method="post">
                    <input type="hidden" name="id_grupo" value="<?php echo $key['id_grupo']; ?>">
                    <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                </form>
            </td>
        </tr>
            
<?php
    }
?>
    </tbody>
</table>

<?php
#   Si no hay registros mostrar un mensaje
if (!$existen_registros) 
{
    echo "Aquí veras tus grupos";
}
?>