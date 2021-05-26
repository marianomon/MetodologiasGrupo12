{include file="header.tpl"}
{include file="navdeslog.tpl"}
    //Barra de navegacion
    <main class="page contact-us-page">
    <section class="clean-block clean-form">
        <div class="container">
            
            <form action="registrarse" method="post">
                <div class="block-heading">
                    <h2 class="text-info">REGISTRO PARA CIUDADANO</h2>
                    <p>Ingrese sus datos en el siguiente formulario: </p>
                </div>
                <div class="form-group"><label>Nombre</label><input class="form-control"  id="nombre" name="nombre" placeholder="nombre" type="text" /></div>
                <div class="form-group"><label>Apellido</label><input  id="apellido" name="apellido" placeholder="apellido" class="form-control" type="text" /></div>
                <div class="form-group"><label>Email</label><input class="form-control" id="email" name="email" placeholder="email"  type="email" /></div>
                <div class="form-group"><label>Contraseña</label><input class="form-control" id="password" name="password" placeholder="password"  type="password" /></div>
                <div class="form-group"><label>Dirección</label><textarea id="direccion" name="direccion" placeholder="direccion" class="form-control"></textarea></div>
                <div class="form-group"><label>Teléfono</label><input class="form-control" id="telefono" name="telefono" placeholder="telefono"  type="number"></input></div>
                <div class="form-group"><p>Horario de preferencia</p>
                  <div><label><input type="radio" value="1" class="radio-horario" id="horarioPreferencia" name="horarioPreferencia" placeholder="horarioPreferencia" type="text" name="horario">9hs a 12hs</label></div>
                  <div><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="horarioPreferencia">13hs a 17hs</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="registrarse" type="submit">Registrarse</button></div>
            </form>
        </div>
    </section>
</main>
{include file="footer.tpl"}
