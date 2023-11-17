<form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <div class="btn-group">
            <div class="btn-group">

                <style>
                    #limenu:hover {
                        background-color: steelblue;
                    }
                </style>

                <button class="d-lg-none d-xl-none form-control btn btn-outline-primary dropdown-toggle" type="button" id="menuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="dropdown-menu dropdown-menu bg-primary" aria-labelledby="menuDropdown">
                    <li id="limenu" class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">
                        <a class="nav-link " href="{{ route('home') }}">
                            <i class="fas fa-home"></i>&nbsp; <span>Inicio</span>
                        </a>
                    </li>

                    @can('admin-ver')
                    <li id="limenu" class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">
                        <a class="nav-link " href="{{ route('usuarios.index') }}">
                            <i class="fas fa-users"></i>&nbsp;<span>Maestros</span>
                        </a>
                    </li>
                    @endcan

                    @can('admin-ver')
                    <li id="limenu" class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">
                        <a class="nav-link " href="{{ route('grado.index') }}">
                            <i class="fas fa-school"></i>&nbsp;<span>Grados</span>
                        </a>
                    </li>
                    @endcan

                    @can('admin-ver')
                    <li id="limenu" class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">
                        <a class="nav-link " href="{{ route('alumno.index') }}">
                            <i class="fas fa-user-graduate"></i>&nbsp;<span>Alumnos</span>
                        </a>
                    </li>
                    @endcan

                    @can('admin-ver')
                    <li id="limenu" class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">
                        <a class="nav-link " href="{{ route('padres.index') }}">
                            <i class="fas fa-user-tie"></i>&nbsp;<span>Encargados</span>
                        </a>
                    </li>
                    @endcan

                </div>
            </div>

        </div>

    </ul>
</form>
<ul class="navbar-nav navbar-right">

    @if(\Illuminate\Support\Facades\Auth::user())
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            {{-- <img alt="image" src="{{ asset('img/user.png') }}"
            class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "> --}}
            <i class="fa fa-user-circle mr-2 mb-1" aria-hidden="true" style="color: rgb(255, 255, 255);  font-size:1.4rem; "></i>
            <div class="d-sm-none d-lg-inline-block mt-2">
                {{\Illuminate\Support\Facades\Auth::user()->name}}
            </div>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">
                {{\Illuminate\Support\Facades\Auth::user()->email}}
            </div>
            @can('admin-ver')
            <a class="dropdown-item has-icon edit-profile" href="{{route('usuarios.edit', auth()->id()) }}" data-id="{{ \Auth::id() }}">
                <i class="fa fa-user"></i>Editar Perfil</a>
            @endcan


            <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                {{ csrf_field() }}
            </form>
        </div>
    </li>
    @endif
</ul>