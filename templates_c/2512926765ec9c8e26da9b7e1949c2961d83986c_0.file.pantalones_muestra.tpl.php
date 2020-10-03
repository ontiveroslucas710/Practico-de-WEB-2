<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 00:51:13
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\pantalones_muestra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f765d613c5ff3_00904522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2512926765ec9c8e26da9b7e1949c2961d83986c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\pantalones_muestra.tpl',
      1 => 1601545646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f765d613c5ff3_00904522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="ropa">

       <div >           
            <ul>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'dato');
$_smarty_tpl->tpl_vars['dato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->do_else = false;
?>
                       <li style="font-size: x-large; "><a href="filtro/<?php echo $_smarty_tpl->tpl_vars['dato']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value->marca;?>
</a></li>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                
            </ul>
        </div>         
             
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
