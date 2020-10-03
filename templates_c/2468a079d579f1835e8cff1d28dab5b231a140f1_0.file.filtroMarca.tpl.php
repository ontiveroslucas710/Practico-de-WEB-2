<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:44:25
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\filtroMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7677e9bab858_34212126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2468a079d579f1835e8cff1d28dab5b231a140f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\filtroMarca.tpl',
      1 => 1601599461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7677e9bab858_34212126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="guiaTRopa">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marca']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>

    <h2><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
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
        </tr>
    </thead>
    <tbody>
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
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
   </tbody>    
</table>

<a href="ropa">Volver</a>
</section>   
                
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
