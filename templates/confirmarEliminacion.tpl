{include file= 'header.tpl'}


{foreach from=$marcaAEliminar item=dato}
    <h1>desea eliminar la marca {$dato->marca}</h1>
{/foreach}

{foreach from=$datoAEliminar item=dato}

<a href="confirmarElBorrado/{$dato}"><button>borrar</button></a>

<a href="tabla_de_pantalones"><button>cancelar</button></a>
{/foreach}
{include file='footer.tpl'}