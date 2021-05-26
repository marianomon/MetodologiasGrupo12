{include file="header.tpl"}
{include file="navdeslog.tpl"}
    <main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">REGISTRO PARA CIUDADANO</h2>
                <p>Ingrese sus datos en el siguiente formulario: </p>
            </div>
            <form>
                <div class="form-group"><label>Nombre</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Apellido</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Email</label><input class="form-control" type="email" /></div>
                <div class="form-group"><label>Contraseña</label><input class="form-control" type="password" /></div>
                <div class="form-group"><label>Dirección</label><textarea class="form-control"></textarea></div>
                <div class="form-group"><label>Teléfono</label><input class="form-control" type="number"></input></div>
                <div class="form-group"><p>Horario de preferencia</p>
                  <div><label><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="horario">9hs a 12hs</label></div>
                  <div><label for=""><input type="radio" value="1" class="radio-horario" type="text" name="horario">13hs a 17hs</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form>
        </div>
    </section>
</main>
</body>
</html>
