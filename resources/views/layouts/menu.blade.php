<li class="side-menus {{ Request::is('*') ? 'active' : 'inactive' }}">

    <a class="nav-link" href="{{ route('home')}}">
        <i class=" fas fa-home"></i><span>Inicio</span>
    </a>
    @can('admin-ver')
    <a class="nav-link" href="{{ route('usuarios.index')}}">
        <i class=" fas fa-users"></i><span>Maestros</span>
    </a>
    @endcan

    @can('admin-ver')
    <a class="nav-link" href="{{ route('grado.index')}}">
        <i class=" fas fa-school"></i><span>Grados</span>
    </a>
    @endcan

    @can('admin-ver')
    <a class="nav-link" href="{{ route('alumno.index')}}">
        <i class=" fas fa-user-graduate"></i><span>Alumnos</span>
    </a>
    @endcan

    @can('admin-ver')
    <a class="nav-link" href="{{ route('padres.index')}}">
        <i class=" fas fa-user-tie"></i><span>Encargados</span>

    </a>
    @endcan

</li>