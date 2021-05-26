
<!DOCTYPE html>
            <html lang="en">
            <head>
                <<meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title>{$Titulo}</title>
                <link rel="stylesheet" href="css/css.css">
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
                <link rel="stylesheet" href="assets/css/styles.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
                <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
                <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
                <link rel="stylesheet" href="assets/css/smoothproducts.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">   
            </head>
            <body>
{include file='header.tpl'}
{include file='navdeslog.tpl'}
<br>
<br>
<div class="container-fluid login">
<main class="page login-page fondo">
    <section class="clean-block clean-form">
        <div class="container">
            <form action="iniciarSesion" method="post">
                <div class="block-heading">
                    <h2 class="text-info">Ingrese sus datos</h2>
                </div>
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