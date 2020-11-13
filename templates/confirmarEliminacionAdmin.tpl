{include file= 'header.tpl'}


{foreach from=$nombreAdmin item=admin}
    <h1>Desea eliminar el administrador {$admin->nombre}</h1>
{/foreach}

{foreach from=$id_borrar item=id}
<a href="confirmarBorradoAdmin/{$id}"><button>Borrar</button></a>
{/foreach}

<a href="tablaAdministradore"><button>Cancelar</button></a>
{include file='footer.tpl'}