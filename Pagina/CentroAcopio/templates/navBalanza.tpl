<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{$BASE_URL}">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                     {if $Activo}
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ObtenerMatAportados">Ver mis materiales aportados</a></li>
                     {/if}
                    <li class="nav-item" role="presentation"><a class="nav-link" href="LogOut">Salir</a></li>
                </ul>
            </div>
        </div>
</nav>