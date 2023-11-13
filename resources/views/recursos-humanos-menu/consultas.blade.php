@extends('layouts.app')
@section('title')
    Consultar permisos
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
            <h5 style="background-color:white; padding:0.4rem" class="page__heading">Recursos Humanos</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <center><h4 class="page__heading">Consultar permisos almacenados:</h4></center><hr>
                            <div class="container">
                                <div class="row">
                                  <div class="col-sm">
                                    {{-- One of three columns --}}
                              <ul class="list-unstyled">
                                <li class="media my-4">
                                  <a class="btn btn-outline-light" href="{{ route('pase-salida.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                   <div class="media-body">
                                     <a type="button" href="{{ route('pase-salida.index') }}">
                                       <h5 class="ml-2">Pase de Salida</h5></a>
                                       <p class="ml-2">consultar pases de salida</p>
                                   </div>
                                </li>
                              </ul>

                              <ul class="list-unstyled">
                                <li class="media my-4">
                                  <a class="btn btn-outline-light" href="{{ route('permiso-personal.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                   <div class="media-body">
                                     <a type="button" href="{{ route('permiso-personal.index') }}">
                                       <h5 class="ml-2">Permiso personal</h5></a>
                                       <p class="ml-2">Consultar permisos personales</p>
                                   </div>
                                </li>
                              </ul>

                                <ul class="list-unstyled">
                                  <li class="media my-4">
                                    <a class="btn btn-outline-light" href="{{ route('administrativo.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                     <div class="media-body">
                                       <a type="button" href="{{ route('administrativo.index') }}">
                                         <h5 class="ml-2">Permiso Administrativo</h5></a>
                                         <p class="ml-2">consultar los permisos administrativos</p>
                                     </div>
                                  </li>
                                </ul>

                                <ul class="list-unstyled">
                                  <li class="media my-4">
                                    <a class="btn btn-outline-light" href="{{ route('ventas-rc.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                     <div class="media-body">
                                       <a type="button" href="{{ route('ventas-rc.index') }}">
                                         <h5 class="ml-2">Permiso de ventas</h5></a>
                                         <p class="ml-2">Consultar permisos de ventas</p>
                                     </div>
                                  </li>
                                </ul>

                                    {{-- fin --}}
                                  </div>
                                  <div class="col-sm">
                                    {{-- One of three columns --}}
                                <ul class="list-unstyled">
                                  <li class="media my-4">
                                    <a class="btn btn-outline-light" href="{{ route('incapacidad.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                     <div class="media-body">
                                       <a type="button" href="{{ route('incapacidad.index') }}">
                                         <h5 class="ml-2">Permisos de Incapacidad</h5></a>
                                         <p class="ml-2">Consultar permisos de incapacidad</p>
                                     </div>
                                  </li>
                                </ul>

                                <ul class="list-unstyled">
                                  <li class="media my-4">
                                    <a class="btn btn-outline-light" href="{{ route('subsidio.index') }}"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-archive" aria-hidden="true"></i></a>
                                     <div class="media-body">
                                       <a type="button" href="{{ route('subsidio.index') }}">
                                         <h5 class="ml-2">Pagos de subsidio</h5></a>
                                         <p class="ml-2">Consultar pagos de subsidio</p>
                                     </div>
                                  </li>
                                </ul><hr>
                                    {{-- fin --}}
                                  </div>
                                </div>
                              </div>
                                 {{-- aqui termina el menu  --}}


                                 
                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection