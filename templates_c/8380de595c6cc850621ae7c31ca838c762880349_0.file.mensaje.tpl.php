<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 03:17:12
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\mensaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77d118b83312_15885559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8380de595c6cc850621ae7c31ca838c762880349' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\mensaje.tpl',
      1 => 1601687822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f77d118b83312_15885559 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contactenos">
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
        <div class="boxformulario"> 
            <h2>esto es del mensaje</h2>
        
            <div class="formulario">
                <form action="addlogin" method='POST'>
                    
                        <label>Nombre</label>
                        <input type="text" name="nombre" required placeholder="Name and Surname">
                        <label>Email </label>
                        <input type="email" name="usuario" required placeholder="Email address">
                        <label>Contraceña </label>
                        <input type="password" name="contra" required >

                        <input type="submit" value="Ingresar">
                    
                </form>
            </div>
        </div>
       
        </div>
    </section>
<?php }
}
