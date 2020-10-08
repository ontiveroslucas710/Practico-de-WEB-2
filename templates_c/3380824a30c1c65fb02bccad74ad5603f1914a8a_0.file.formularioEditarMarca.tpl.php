<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 03:26:59
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\formularioEditarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e6ae3a2fa35_97456773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3380824a30c1c65fb02bccad74ad5603f1914a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\formularioEditarMarca.tpl',
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
function content_5f7e6ae3a2fa35_97456773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marca']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

<form action="editMarca" method='POST'>

    <input type="text" name="marca_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->marca;?>
" required>

    <textarea type="text" name="descripcion_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
" required></textarea>

     <input type="hidden" name="id_edit" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_marca;?>
">
    <button type="submit">Editar marca</button>

</form>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
