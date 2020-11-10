{include file= 'header.tpl'}
<div style="text-align: center;">
    {foreach from=$panta item=dato}
        <h1 style="text-decoration: none;">Comentarios de {$dato->nombre} - <td>{$dato->marca}</td> </h1>
    {/foreach}
</div>


<div  style="display: flex; justify-content: space-around;">

    <div >
    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>Talle</th>
                <th>Color</th>
                <th>Tela</th>
                <th>Precio</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$panta item=dato}
            <tr>
                <td>{$dato->nombre}</td>
                <td>{$dato->talle}</td>
                <td>{$dato->color}</td>
                <td>{$dato->tela}</td>
                <td>{$dato->precio}</td>
                <td>{$dato->marca}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
        <br>
        <br>
        {if isset($nombreUsuario) || isset($nombre)}
         <form id="agregarComentario" method="post">
            <label for="">comentario</label>
           <textarea name="comentario" id="" cols="30" rows="1"></textarea>
           <label for="">puntaje</label>
           <select name="puntaje" id="">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
           </select>  
            {foreach from=$panta item=dato}     
                <input type="hidden" name="idDelComentario" value="{$dato->id_pantalones}">
            {/foreach} 
            <button type="submit">agregar</button>
            </form>
        {/if}
        <!--habria que hacer un foreach con el usuario conectado-->
        {if isset ($nombre)}
            <!--<input type="hidden" name="usuarioConectado" value="{$usuario->nombre}">-->
        {/if}
    </div>

    <div id="noCommets">
        <table>
            <thead>
                <tr>
                    <th>Comentario</th>
                    <th>Puntaje</th>
                    <th>Borrar comentario</th>
                </tr>
            </thead>
            <tbody id="appearsComments">
            </tbody>
        </table>
    </div>


</div>

<script src="./js/comentarios.js"></script>
{include file='footer.tpl'}