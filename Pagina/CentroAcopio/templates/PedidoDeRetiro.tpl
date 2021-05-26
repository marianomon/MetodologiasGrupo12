{include file="header.tpl"}
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Cooperativa de Recuperadores Urbanos de Tandil<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Login.html">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="EleccionReg.html">Registrarme</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Ofertas.html">Ofertas</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean fondo">
        <form action="agregarPedido" method="post">
            <h2 class="text-center">Formulario de ciudadano</h2>
            <div class=" hidden"><input class="form-control" type="radio" value="11254" checked="checked" class="hidden" name="id"></div>
            <div class="form-group form-horario"><p>Tamanio</p>
            <div class="form-group"><label for=""><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="volumen">menos de 1 metro²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="volumen">entre 1 y 2 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="3" class="radio-horario" type="text" name="volumen">entre 2 y 4 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="4" class="radio-horario" type="text" name="volumen">mas de 4 metros²</label></div>
            </div>
            <div class="form-group"><input type="file" id="files" name="imagenes" multiple></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Enviar </button></div>
        </form>
    </div>
{include file="footer.tpl"}