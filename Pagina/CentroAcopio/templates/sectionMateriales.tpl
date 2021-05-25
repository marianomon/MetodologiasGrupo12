 <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">¿Que Materiales Reciclamos y Como?</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center">
                {foreach from=$materiales item=Material}
                    <div class="col-md-5 feature-box">
                        <i class="bi bi-check-circle"></i>
                        <h4 style="font-size: 23px;">{$Material['nombre']}</h4>
                        <p style="color: rgb(0,0,0);"><strong> {$Material['descripcion']}</strong></p>
                    </div>
                {/foreach}
                </div>
            </div>
        </section>