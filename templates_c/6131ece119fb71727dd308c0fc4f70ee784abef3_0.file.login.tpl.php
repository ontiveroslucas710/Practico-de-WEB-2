<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 04:30:46
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77e256cc9402_40288942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6131ece119fb71727dd308c0fc4f70ee784abef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\login.tpl',
      1 => 1601692171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f77e256cc9402_40288942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="contactenos">
        <div class="boxformulario">
        
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
        
            <div class="formulario">

                <form action="verificaForm" method='POST'>
                    
                        <label>Nombre</label>
                        <input type="text" name="nombre" required placeholder="Name and Surname">
                        <label>Email </label>
                        <input type="email" name="email" required placeholder="Email address">
                        <label>Contraceña </label>
                        <input type="password" name="contraseña" required>

                        <input type="submit" value="Ingresar">
                    
                </form>
            </div>
        </div>
       
        </div>
    </section>
<?php }
}
