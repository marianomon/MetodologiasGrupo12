{include file="header.tpl"}
{include file="navdeslog.tpl"}
    <main class="page contact-us-page">
        <section class="clean-block clean-form">
            <div class="container">
                
                <form action="registrarseCartonero" method="post">
                    <div class="block-heading">
                        <h2 class="text-info">REGISTRO PARA CARTONERO</h2>
                        <p>Ingrese sus datos en el siguiente formulario: </p>
                    </div>
                    <div class="form-group"><label>Nombre</label><input class="form-control"  id="nombre" name="nombre" placeholder="nombre" type="text" /></div>
                    <div class="form-group"><label>Apellido</label><input  id="apellido" name="apellido" placeholder="apellido" class="form-control" type="text" /></div>
                    <div class="form-group"><label>Contraseña</label><input class="form-control" id="password" name="password" placeholder="password"  type="password"/></div>
                    <div class="form-group"><label>Dirección</label><input id="direccion" name="direccion" placeholder="direccion" class="form-control"/></div>
                    <div class="form-group"><label>DNI</label><input id="dni" name="dni" placeholder="DNI" class="form-control"/></div>
                    <div class="form-group"><p>Fecha de Nacimiento</p><input type="date" id="nacimiento" name="nacimiento"
                            value="2000-07-22"
                            min="1900-01-01" max="2002-01-01"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" value="registrarseCartonero " type="submit">Registrarse</button></div>
                </form>
            </div>
        </section>
    </main>
{include file="footer.tpl"}