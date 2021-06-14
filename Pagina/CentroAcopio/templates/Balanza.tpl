{include file="header.tpl"}
{include file="navdeslog.tpl"}
    //Barra de navegacion
    <main class="page contact-us-page">
    <section class="clean-block clean-form">
        <div class="container">
            
            <form action="subirBalanza" method="post">
                <div class="block-heading">
                    <h2 class="text-info">INGRESE MATERIALES</h2>
                    <p>Ingrese los datos de los materiales: </p>
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Material</option>
                    {foreach from=$materiales item=Material}
                        <option name="material" value={$Material['id_material']}>{$Material['nombre']}</option>
                    {/foreach}
                </select>
                <br>
                <br>
                <div class="form-group"><label>Kilogramos</label><input class="form-control"  id="kg" name="kg" placeholder="Peso" type="number" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="registrarseCartonero " type="submit">Registrarse</button></div>
            </form>
        </div>
    </section>
</main>
{include file="footer.tpl"}