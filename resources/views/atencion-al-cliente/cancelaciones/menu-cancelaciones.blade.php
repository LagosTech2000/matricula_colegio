@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Registro Averia</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <div class="container">
                                <div class="row">
                                  <div class="col-sm">
                                    {{-- One of three columns --}}
                                    
                            <ul class="list-unstyled ">
                              <li class="media my-4">
                                  <a href="{{ route('cancelaciones.create') }}"><img  class="mr-3" src="{{ asset('img/crearPermisos.png') }}" height="50px"></a>
                                <div class="media-body">
                                    <a  href="{{ route('cancelaciones.create') }}">
                                       <h5>Nuevo registro</h5></a>
                                       <p>Crear registros de averias</p>
                                </div>
                              </li>

                              <ul class="list-unstyled ">
                                <li class="media my-4">
                                    <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                  <div class="media-body">
                                      <a href="{{ route('cancelaciones.index') }}">
                                         <h5>Consultar</h5>
                                      </a>
                                    
                                    <p> Consultar registro</p>
                                  </div>
                                </li>

                        
                                    {{-- fin --}}
                                  </div>
                                  <div class="col-sm">
                                    {{-- One of three columns --}}
                                    
                          
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection