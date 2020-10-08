<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 18:24:53
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\listaPantalones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f3d55997b17_63160473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55482c17dd580496a04f8142d96d77f0b1b4a4c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\listaPantalones.tpl',
      1 => 1602122613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f3d55997b17_63160473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="guiaTRopa">
    <div class="box-tabla">
        <div>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <table>
                <thead>
                    <tr>
                        <td>nombre</td>
                        <td>Talle</td>
                        <td>Color</td>
                        <td>Tela</td>
                        <td>Precio</td>
                        <td>marca</td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                        <td>Editar</td>
                        <td>Borrar</td>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panta']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->talle;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->color;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->tela;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->precio;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
</td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                        <td><a class="btn-editar"  href="edit/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_pantalones;?>
">Editar</a></td>
                        <td><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_pantalones;?>
"><img src="./img/icono-borrar.jpg" width="20" height="20" alt="" srcset=""></a></td>
                        <?php }?>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
            </tbody>
            </table>
            <br>
                <h2>Lista de marca y descripcion</h2>
            <table>
                <thead>
                    <tr>
                        
                        <td>marca</td>
                        <td>Descripcion</td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                        <td>Editar</td>
                        <td>Borrar</td>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->descripcion;?>
</td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                        <td><a class="btn-editar"  href="editMarca/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_marca;?>
">Editar</td>
                        <td><a  href="borrarMarca/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_marca;?>
"><img src="./img/icono-borrar.jpg" width="20" height="20" alt="" srcset=""></a></td>
                        <?php }?>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
            </tbody>
            </table>
        </div>
    </div>

    <div class="box-agregar">
        <div>
            <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
            <p class="texto">Agregar producto</p>

            <form action="agregar" method="POST">

                <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
                <input type="number" name="talle" placeholder="Ingrese Talle" required>
                <input type="text" name="color" placeholder="Ingrese Color" required>
                <input type="text" name="tela" placeholder="Ingrese Tela" required>
                <input type="number" name="precio" placeholder="Ingrese Precio" required>
                <select name="marca" id="">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="submit" value="agregar">
            </form>
            <?php }?>
        </div>

        <div class="separar">
            <div class="separar1">
            <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                <p class="texto">Agregar marca Y descripcion</p>

                <form action="agregarMarca" method="POST">
                    <input type="text" name="marca" placeholder="Ingrese marca" required>
                    <textarea  name="descripcion" placeholder="Ingrese descripcion" required></textarea>
                    <input type="submit" value="agregar">
                </form>
            <?php }?>
            </div>

        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
