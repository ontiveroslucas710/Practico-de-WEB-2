{include file="header.tpl"}
{foreach from=$pantalon item=item }
<form action="edit" method='POST'>
    <input type="text" name="nombre_edit" value="{$item->nombre}" required>
    <input type="number" name="talle_edit" value="{$item->talle}" required>
    <input type="text" name="color_edit" value="{$item->color}" required>
    <input type="text" name="tela_edit" value="{$item->tela}" required>
    <input type="number" name="precio_edit" value="{$item->precio}" required>
    <input type="number" name="marca_edit" value="{$item->id_marca}" required>
    <input type="hidden" name="id" value="{$item->id_pantalones}">

    <button type="submit">Editar</button>

</form>    
{/foreach}

{include file="footer.tpl"}