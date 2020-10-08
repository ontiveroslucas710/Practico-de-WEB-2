<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 03:13:51
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\filtroMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e67cf84edd7_46089232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2468a079d579f1835e8cff1d28dab5b231a140f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\filtroMarca.tpl',
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
function content_5f7e67cf84edd7_46089232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="guiaTRopa">
    
  
<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>Talle</th>
            <th>marca</th>
            <th></th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
</td>
            <td><a href="verMas/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_pantalones;?>
">Ver mas</a></td>
        </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </tbody>    
</table>

<a href="ropa">Volver</a>
</section>   
                
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
