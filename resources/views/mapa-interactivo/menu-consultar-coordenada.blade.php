@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Consultar coordenadas</h5>
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
                                      <a href="{{ route('armario.index') }}"><i style="color:rgb(121, 126, 141)" class="fa fa-archive fa-3x mr-3" aria-hidden="true"></i>
                                    <div class="media-body">
                                        <a  href="{{ route('armario.index') }}">
                                           <h5>Ver armario</h5></a>
                                           <p> Ver armarios alamacenados</p>
                                    </div>
                                  </li>
                                </ul>

                                <ul class="list-unstyled ">
                                    <li class="media my-4">
                                        <a href="{{ route('cajaterminal.index') }}"><i style="color:rgb(121, 126, 141)" class="fa fa-archive fa-3x mr-3" aria-hidden="true"></i>
                                      <div class="media-body">
                                          <a  href="{{ route('cajaterminal.index') }}">
                                             <h5>Ver cajas terminales</h5></a>
                                             <p> Ver cajas terminales almacenadas</p>
                                      </div>
                                    </li>
                                  </ul>

                                  <ul class="list-unstyled ">
                                    <li class="media my-4">
                                        <a href="{{ route('clientegps.index') }}"><i style="color:rgb(121, 126, 141)" class="fa fa-archive fa-3x mr-3" aria-hidden="true"></i>
                                      <div class="media-body">
                                          <a  href="{{ route('clientegps.index') }}">
                                             <h5>Ver clientes</h5></a>
                                             <p> Ver clientes almacenados</p>
                                      </div>
                                    </li>
                                  </ul>
                                
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
