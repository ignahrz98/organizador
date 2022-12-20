# Organizador.

Este es un organizador de listas por grupos. Permite agrupar diferentes listas y así tener mejor organización de las diferentes tareas y actividades que se desee tener ordenadas.

De esta manera en lugar de tener cientos de listas desordenadas, se pueden agrupar para la lista de supermercado o actividades de un proyecto, por nombrar algunos ejemplos.

## Instalación.

Copiar la carpeta **organizador** en la carpeta raíz de su servidor web.

Posteriormente, deberá cargar el archivo de la base de datos "**organizador.sql**", no necesita crear la base de datos manualmente, ya que el archivo **.sql** lo crea automáticamente.

## Personalizar la configuración de la base de datos.

Si usted desea cambiarle el nombre a la base de datos, o tiene la configuración de  usuario de la base de datos diferente a la de por defecto, proceda a realizar lo siguiente:

El archivo **.php** que contiene la información para conectar y operar la base de datos se encuentra en "**core/controller/datos-de-la-bd.php**". Usted debe cambiar los valores que retornan los métodos estáticos por los que correspondan en su instalación localhost o servidor online.

## Primer Uso.

- Al abrir el sistema se muestra una pantalla de bienvenida, donde el primer paso a realizar es crear un grupo al que posteriormente le añadiremos las listas.
- Para crear el primer grupo ir a **Home / Mis Grupos**. 
- Ahora se muestra en la barra lateral el nombre del grupo, al seleccionarlo despliega la opción para **Crear lista nueva**.
- Una vez una lista ha sido creada se muestra en la barra lateral al seleccionar el grupo que la contiene.
- Al crear elementos a la lista la tabla se va llenando con información acerca el elemento, tal como su fecha de creación y estado del elemento (Inactivo, Activo, Completado).