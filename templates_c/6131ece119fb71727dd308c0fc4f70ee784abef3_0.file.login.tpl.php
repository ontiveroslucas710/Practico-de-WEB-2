<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 18:24:40
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f3d48bdada7_15183093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6131ece119fb71727dd308c0fc4f70ee784abef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\login.tpl',
      1 => 1602119571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f3d48bdada7_15183093 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <section class="contactenos">
        <div class="boxformulario"> 
            <h2>Loggeate</h2>
        <h3><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
            <div class="formulario">

                <form action="verificaForm" method='POST'>
                    <div class="formulario-in">
                        <label>Usuario</label>
                        <input type="text" name="usuario" required placeholder="Usuario">
                    </div>                    
                    <div class="formulario-in">
                        <label>Contraseña </label>
                        <input type="password" name="contraseña" required  placeholder="contraseña">
                    </div>                    
                    <div>
                        <input type="submit" id="btn-verificar" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
       
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
