<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 03:13:59
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\filtroCompleto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e67d70ceab6_37225542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c324608b93882cacc8f95b06a67ae896cf79e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\filtroCompleto.tpl',
      1 => 1602096176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7e67d70ceab6_37225542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="guiaTRopa">


    <h2></h2>
    <div style="display: flex;">
        <div>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marca']->value, 'dato');
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
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

        </div>
        <div>
            <h4 style="text-decoration: none;"><?php echo $_smarty_tpl->tpl_vars['dato']->value->descripcion;?>
</h4>
        </div>

    </div>
<a href="ropa">Volver</a>
    
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
