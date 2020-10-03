<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 00:53:46
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\registrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f765dfa4cac28_66146336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d330f5eb5723fbc0771d67fdbc9df26a3e9e959' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\registrar.tpl',
      1 => 1601405950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f765dfa4cac28_66146336 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <section class="contactenos">
        <div class="boxformulario"> 
            <h2>Loggeate</h2>
        
            <div class="formulario">
                <form action="">
                    <div class="formulario-in">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="" required placeholder="Name and Surname">
                    </div>
                    <div class="formulario-in">
                        <label>Email </label>
                        <input type="email" name="email" id="" required placeholder="Email address">
                    </div>
                    <div class="formulario-in">
                        <label>Contraceña </label>
                        <input type="password" name="" id="" required >
                    </div>
                    
                    <div>
                        <input type="button" id="btn-verificar" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
       
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
