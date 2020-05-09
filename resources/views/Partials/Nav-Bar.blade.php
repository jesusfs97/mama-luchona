<nav class="navbar navbar-expand-lg text-uppercase fixed-top navbar-dark">
    <div class="container">
        @if(auth()->check())
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info sombra dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('MiCuenta',auth()->user()->id)}}">Mi cuenta</a>

                    @if(auth()->user()->rol === 'Admin')
                        <a class="dropdown-item" href="{{ route('articulos.crear') }}">Crear un Articulo</a>
                        <a class="dropdown-item" href="{{ route('Administrar') }}">Administrar</a>
                    @endif

                <div class="dropdown-divider"></div>
                    <a class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Cerrar Sesion
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endif
    
        <barra></barra>
        </div>
    </div>
</nav>