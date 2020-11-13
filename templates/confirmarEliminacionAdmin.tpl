{include file= 'header.tpl'}

<h1>desea borrar al administrador {$administradorABorrar->nombre}</h1>

{foreach from=$id_borrar item=id}
<a href="confirmarBorradoAdmin/{$id}"><button>Borrar</button></a>
{/foreach}

<a href="tablaAdministradore"><button>Cancelar</button></a>
{include file='footer.tpl'}