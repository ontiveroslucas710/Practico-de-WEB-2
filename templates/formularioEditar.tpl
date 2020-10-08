{include file="header.tpl"}

{foreach from=$pantalon item=item }
<form action="edit" method='POST'>
    <input type="text" name="nombre_edit" value="{$item->nombre}" required>
    <input type="number" name="talle_edit" value="{$item->talle}" required>
    <input type="text" name="color_edit" value="{$item->color}" required>
    <input type="text" name="tela_edit" value="{$item->tela}" required>
    <input type="number" name="precio_edit" value="{$item->precio}" required>
    {*<input type="text" name="marca_edit" value="{$item->marca}" required>*}
    <input type="hidden" name="id" value="{$item->id_pantalones}">
    

    <select name="marca_edit" id="">
        {foreach from=$marca item=dato}
        <option value="{$dato->id_marca}">{$dato->marca}</option>
        {/foreach}
    </select>


    <button type="submit">Editar</button>

</form>    
{/foreach}

{include file="footer.tpl"}