<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/menuResponsive.js"></script>
    <title>My Label ® - Sitio Oficial</title>
</head>
<body>
<div>
    <header>
        <h1>My Label ®</h1>
        <h3 class="sub-title">Pantalones</h2>
    </header>

    <div style="text-align: right;">
        {if isset($nombre)}
            <p>Hola - {$nombre}</p>
        {/if}
    </div>

</div>

    <nav>
        <div class="menu">
            <div class="btn_menu"><a>MENÚ</a></div>
          <ul class="navigation">
               <li><a href="home">Home</a></li>
               <li><a href="ropa">Nuestros pantalones</a></li>
               <li><a href="tabla_de_pantalones">Lista de pantalones</a></li>

                {if isset($nombre)}
                    <li><a href="logout">log out</a></li> {*aca borre class="btn-borrar" para que quede igual que el nav*}
                {/if}
                {if !isset($nombre)}
                    <li><a href="login">log in</a></li> {*aca borre class="boton" para que quede igual que el nav*}
                {/if}
           </ul>      
        </div>  
    </nav>