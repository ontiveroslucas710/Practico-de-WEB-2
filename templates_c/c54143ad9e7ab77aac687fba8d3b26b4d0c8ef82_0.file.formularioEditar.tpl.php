<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 00:52:55
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\formularioEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f765dc7cd9b34_64551498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54143ad9e7ab77aac687fba8d3b26b4d0c8ef82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\formularioEditar.tpl',
      1 => 1601494192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f765dc7cd9b34_64551498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pantalon']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<form action="edit" method='POST'>

    <input type="text" name="nombre_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
" required>
    <input type="number" name="talle_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->talle;?>
" required>
    <input type="text" name="color_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
" required>
    <input type="text" name="tela_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->tela;?>
" required>
    <input type="number" name="precio_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
" required>
    <input type="number" name="marca_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_marca;?>
" required>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_pantalones;?>
">

    <button type="submit">Editar</button>

</form>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
