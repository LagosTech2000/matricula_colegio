@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Registro de coordenadas</h5>
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
                                  <a href="{{ route('clientegps.create') }}"><i style="color: rgb(121, 126, 141)" class="fa fa-street-view fa-3x mr-3" aria-hidden="true"></i></a>
                                <div class="media-body">
                                    <a  href="{{ route('clientegps.create') }}">
                                       <h5>Crear nuevo cliente</h5></a>
                                       <p>Crear nuevas coordenadas para clientes</p>
                                </div>
                              </li>

                              <ul class="list-unstyled ">
                                <li class="media my-4">
                              
                                  <a href="{{ route('cajaterminal.create') }}"><i style="color:rgb(63, 71, 99)" class="fa fa-map-pin fa-3x mr-3" aria-hidden="true"></i></a>
                                  <div class="media-body">
                                      <a href="{{ route('cajaterminal.create') }}">
                                         <h5>Crear caja terminal</h5>
                                      </a>
                                    
                                    <p>Crear nuevas cajas terminales</p>
                                  </div>
                                </li>

                                <ul class="list-unstyled ">
                                  <li class="media my-4">
                                      <a href="{{ route('armario.create') }}"><i style="color:rgb(121, 126, 141)" class="fa fa-archive fa-3x mr-3" aria-hidden="true"></i>
                                      </a>
                                    <div class="media-body">
                                        <a  href="{{ route('armario.create') }}">
                                           <h5>Crear nuevo armario</h5></a>
                                           <p>Crear nevos armarios</p>
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
