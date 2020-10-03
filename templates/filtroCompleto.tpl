{include file= 'header.tpl'}
<section class="guiaTRopa">


    <h2></h2>
  
<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>Talle</th>
            <th>color</th>
            <th>tela</th>
            <th>precio</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
{foreach from=$marca item=dato}
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

<a href="ropa">Volver</a>
</section>   
                
{include file='footer.tpl'}
