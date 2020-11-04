{include file="header.tpl"}

{foreach from=$pantalon item=item }
<h1> agregue comentario del producto {$item->nombre} </h1>
<form action="agregarComentarioIngresado" method='POST'>   
    <textarea name="comentario" id="" cols="30" rows="10"></textarea>
    
    <input type="hidden" name="id" value="{$item->id_pantalones}">
    
{*<label for="">puntaje</label>
    <select name="marca_edit" id="">        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>      
    </select>*}


    <button type="submit">agregar comentario</button>

</form>    
{/foreach}

{include file="footer.tpl"}