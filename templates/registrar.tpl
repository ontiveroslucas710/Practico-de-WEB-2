  {include file= 'header.tpl'}
  
  <section class="contactenos">
        <div class="boxformulario"> 
            <h2>Loggeate</h2>
        
            <div class="formulario">

                <form action="verificaForm" method='POST'>
                    <div class="formulario-in">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="" required placeholder="Usuario">
                    </div>                    
                    <div class="formulario-in">
                        <label>Contraseña </label>
                        <input type="password" name="contraseña" id="" required  placeholder="contraseña">
                    </div>                    
                    <div>
                        <input type="submit" id="btn-verificar" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
       
        </div>
    </section>

    {include file='footer.tpl'}