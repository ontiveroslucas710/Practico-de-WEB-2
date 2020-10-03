{include file= 'header.tpl'}
<section class="guiaTRopa">
{foreach from=$marca item=dato}

    <h2>{$dato->marca}</h2>
    
<table>
    <thead>
        <tr>
            <td>nombre</td>
            <td>Talle</td>
            <td>Color</td>
            <td>Tela</td>
            <td>Precio</td>
            <td>marca</td>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>{$dato->nombre}</td>
            <td>{$dato->talle}</td>
            <td>{$dato->color}</td>
            <td>{$dato->tela}</td>
            <td>{$dato->precio}</td>
            <td>{$dato->marca}</td>
    {/foreach}
        </tr>
   </tbody>    
</table>

<a href="ropa">Volver</a>
</section>   
                
{include file='footer.tpl'}
