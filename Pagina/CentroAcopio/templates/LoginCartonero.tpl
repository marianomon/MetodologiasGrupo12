{include file="header.tpl"}
{include file="navdeslog.tpl"}

<main class="page login-page">
    <section class="clean-block clean-form">
        <div class="container">
            <form action="logCartonero" method="post">
                <div class="block-heading">
                 <h2 class="text-info">Ingrese sus datos</h2>
                </div>
                <div class="form-group"><label>DNI</label><input class="form-control"  id="dni" name="dni" placeholder="DNI" type="text"/></div>
                <div class="form-group"><label for="password">Password</label>  
                <input class="form-control" type="password" id="password" name="password" placeholder="password" /></div>
                <div class="form-group"></div>
                <button class="btn btn-primary btn-block" value="logCartonero"  type="submit">Entrar</button>
            </form>
        </div>
    </section>
</main>
{include file="footer.tpl"}

