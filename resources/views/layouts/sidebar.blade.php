<aside id="sidebar-wrapper ">
    <div class="sidebar-brand">
      <!--   <img class="navbar-brand-full app-header-logo" src="{{ asset('img/hondutel_logo.png') }}" width="240"
             alt="Infyom Logo"> -->
             <p>INSERTAR LOGO MATRICULA COLEGIO</p>
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logohondutel.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu ">
        @include('layouts.menu')
    </ul>
</aside>
