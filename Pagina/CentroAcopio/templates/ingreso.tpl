<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Cooperativa Tandil</title>
                <link rel="stylesheet" href="./css/ingreso.css">
                <link rel="stylesheet" href="./css/navdeslog.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
                <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="./fonts/ionicons.min.css">
            </head>
            <body>
<div class="container-fluid">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{$BASE_URL}">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{$BASE_URL}inicio">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{$BASE_URL}ofertas">Ofertas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{$BASE_URL}entrar">Ingresar</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{$BASE_URL}registro">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>
<main class="page login-page fondo">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Ingrese sus datos</h2>
            </div>
            <form action="iniciarSesion" method="post">
                <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email" id="email" aria-describedby="usuarioId" placeholder="email" /></div>

                <div class="form-group"><label for="password">Password</label>  
                <input class="form-control" type="password" id="password" name="password" placeholder="password" /></div>
                <div class="form-group"></div>
                <button class="btn btn-primary btn-block" value="Login"  type="submit">Entrar</button>
            </form>
        </div>
    </section>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
</html>