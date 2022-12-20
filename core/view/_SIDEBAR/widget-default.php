<?php
    /**
    *   Sidebar.
    **/

    require_once(_ADD_CONTROLLER_ . "sidebar-controller.php");
?>

<div class="flex-shrink-0 p-3 bg-white">
	<a href="./" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
  		<svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
  		<span class="fs-5 fw-semibold">Organizador</span>
	</a>
	<ul class="list-unstyled ps-0">
  		<li class="mb-1">
    		<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
      			Home
    		</button>
        	<div class="collapse show" id="home-collapse">
          		<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            		<li><a href="./?view=mis_grupos" class="link-dark rounded">Mis grupos</a></li>
            		<!--<li><a href="#" class="link-dark rounded">Explorar</a></li>
            		<li><a href="#" class="link-dark rounded">Seguimiento</a></li>
            		<li><a href="#" class="link-dark rounded">Estadísticas</a></li>-->
          		</ul>
        	</div>
  		</li>
  		
  		<li class="border-top my-3"></li>

        <?php
            $id_collapse = 0;

            #   Generar opciones de menú para cada grupo creado.
            foreach ($grupos_creados as $key)
            {
                #   Generar un id diferente para cada collapse.
                $id_collapse++;
        ?>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="<?php echo "#grupo-collapse-" . $id_collapse; ?>" aria-expanded="false">
                        <?php echo $key['nombre_grupo']; ?>
                    </button>
                    <div class="collapse" id="<?php echo "grupo-collapse-" . $id_collapse; ?>">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="./?view=crear_lista_nueva&id_grupo=<?php echo $key['id_grupo']; ?>" class="link-dark rounded">Crear lista nueva</a></li>
                            <?php
                                foreach ($tabla_listas->get_listas_by_grupo($key['id_grupo']) as $key) 
                                {
                            ?>
                                    <li><a href="./?view=lista&id_lista=<?php echo $key['id_lista']; ?>" class="link-dark rounded"><?php echo $key['nombre_lista']; ?></a></li>
                            <?php
                                }
                            ?>
                            <!--<li><a href="#" class="link-dark rounded">Explorar</a></li>
                            <li><a href="#" class="link-dark rounded">Estadísticas</a></li>-->
                        </ul>
                    </div>
                </li>
        <?php
            }
        ?>
        <!--
  		<li class="border-top my-3"></li>
  		<li class="mb-1">
    		<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
      			Configuración
    		</button>
    		<div class="collapse" id="account-collapse">
      			<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
        			<li><a href="#" class="link-dark rounded">Panel de control</a></li>
      			</ul>
    		</div>
  		</li>
        -->
	</ul>
</div>