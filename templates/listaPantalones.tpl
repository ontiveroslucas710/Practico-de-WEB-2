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
            <br>
                <h2>{$titulo}</h2>
            <table>
                <thead>
                    <tr>
                        
                        <td>marca</td>
                        <td>Descripcion</td>
                        <td>Editar</td>
                        <td>Borrar</td>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$marcas item=dato}
                    <tr>
                        <td>{$dato->marca}</td>
                        <td>{$dato->descripcion}</td>
                        <td><a href="editMarca/{$dato->id_marca}">editar</a></td>
                        <td><a href="borrarMarca/{$dato->id_marca}">borrar</a></td>
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
            <p class="texto">Agregar producto</p>
            <form action="agregar" method="POST">

                <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
                <input type="number" name="talle" placeholder="Ingrese Talle" required>
                <input type="text" name="color" placeholder="Ingrese Color" required>
                <input type="text" name="tela" placeholder="Ingrese Tela" required>
                <input type="number" name="precio" placeholder="Ingrese Precio" required>
                <select name="marca" id="">
                    {foreach from=$marcas item=dato}
                    <option value="{$dato->id_marca}">{$dato->marca}</option>
                    {/foreach}
                </select>
                <input type="submit" value="agregar">
            </form>

        </div>


        <div class="separar">
            <div class="separar1">
                <p class="texto">Agregar marca Y descripcion</p>
                <form action="agregarMarca" method="POST">
                    <input type="text" name="marca" placeholder="Ingrese marca" required>
                    <textarea  name="descripcion" placeholder="Ingrese descripcion" required></textarea>
                    <input type="submit" value="agregar">
                </form>
            </div>

        </div>
    </div>
</section>

{include file='footer.tpl'}