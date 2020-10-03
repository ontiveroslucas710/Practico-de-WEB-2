{include file= 'header.tpl'}

<section class="guiaTRopa">
        <div class="box-tabla">
            <div>
                <h2>{$titulo}</h2>
                <table>
                    <thead>
                        <tr>
                            <td>nombre</td>
                            <td>Talle</td>
                            <td>Color</td>
                            <td>Tela</td>
                            <td>Precio</td>
                            <td>marca</td>
                            <td>Editar</td>
                            <td>Borrar</td>
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
                            <td><a href="edit/{$dato->id_pantalones}">editar</a></td>
                            <td><a href="borrar/{$dato->id_pantalones}">borrar</a></td>
                        </tr>
                    {/foreach}
                                 
                </tbody>    
                </table>
                    </tbody>
                </table>
               
            </div>            
        </div>
        
        <div class="box-agregar">
            <div>
                <p class="texto">Ingrese un producto</p>
                <form action="agregar" method="POST">

                    <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
                    <input type="number" name="talle" placeholder="Ingrese Talle" required>
                    <input type="text" name="color" placeholder="Ingrese Color" required>
                    <input type="text" name="tela" placeholder="Ingrese Tela" required>
                    <input type="number" name="precio" placeholder="Ingrese Precio" required>
                    <input type="number" name="marca" placeholder="Ingrese 3 o 4" required>                    
                    <input type="submit" value="agregar">
                </form>

            </div>
        

            <div class="separar">               
                <div class="separar1">
                    
                </div>

            </div>
        </div>       
    </section>   

    {include file='footer.tpl'}