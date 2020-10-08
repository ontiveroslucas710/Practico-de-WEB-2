<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 18:24:40
  from 'C:\xampp\htdocs\Proyectos\web_2\tpe_parte_2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f3d48c118b3_16032449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde6d387f2a9377b3e0e23ed4bf5d5916f1a8c65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web_2\\tpe_parte_2\\templates\\header.tpl',
      1 => 1602122387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f3d48c118b3_16032449 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/menuResponsive.js"><?php echo '</script'; ?>
>
    <title>My Label ® - Sitio Oficial</title>
</head>
<body>
<div>
    <header>
        <h1>My Label ®</h1>
        <h3 class="sub-title">Pantalones</h2>
    </header>

    <div style="text-align: right;">
        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
            <p>Hola - <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
        <?php }?>
    </div>

</div>

    <nav>
        <div class="menu">
            <div class="btn_menu"><a>MENÚ</a></div>
          <ul class="navigation">
               <li><a href="home">Home</a></li>
               <li><a href="ropa">Nuestros pantalones</a></li>
               <li><a href="tabla_de_pantalones">Lista de pantalones</a></li>

                <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                    <li><a href="logout">log out</a></li>                 <?php }?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
                    <li><a href="login">log in</a></li>                 <?php }?>
           </ul>      
        </div>  
    </nav><?php }
}
