{include file="header.tpl"}
{include file="navCiudadano.tpl"}
    <div class="contact-clean transparente">
        <form action="agregarPedido" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Formulario de ciudadano</h2>
            <div class=" hidden"><input class="form-control" type="radio" value="11254" checked="checked" class="hidden" name="id"></div>
            <div class="form-group form-horario"><p>volumen</p>
            <div class="form-group"><label for=""><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="volumen">menos de 1 metro²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="volumen">entre 1 y 2 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="3" class="radio-horario" type="text" name="volumen">entre 2 y 4 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="4" class="radio-horario" type="text" name="volumen">mas de 4 metros²</label></div>
            <form class="form-group" method="post" action="addImages/{$products->id_product}" enctype="multipart/form-data" id="imagesToUpload">
                <input type="file" name="image" id="imageToUpload" multiple>
                <button type="submit" class="btn btn-primary ">Add</button>
            </form>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Enviar </button></div>
        </form>
    </div>
{include file="footer.tpl"}