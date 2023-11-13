@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Menu de mapa interactivo</h5>
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
                                  <a href="{{ route('menu-crear-coordenadas') }}"><i style="color:rgb(112, 126, 141)" class="fa fa-podcast fa-3x mr-3" aria-hidden="true"></i></a>
                                <div class="media-body">
                                    <a  href="{{ route('menu-crear-coordenadas') }}">
                                       <h5>Crear nueva coordenada</h5></a>
                                       <p>Creacion de marcadores en el mapa</p>
                                </div>
                              </li>

                              <ul class="list-unstyled ">
                                <li class="media my-4">

                                  <a href="{{ route('mapa') }}"i style="color:rgb(112, 126, 141)" class="fa fa-map fa-3x mr-3" aria-hidden="true"></i></a>
                                  <div class="media-body">
                                      <a href="{{ route('mapa') }}">
                                         <h5>Ver mapa</h5>
                                      </a>

                                    <p> Ver todos los marcadores en el mapa</p>
                                  </div>
                                </li>

                                <ul class="list-unstyled ">
                                  <li class="media my-4">
                                      <a href="{{ route('menu-consultar-coordenada') }}"><i style="color:rgb(112, 126, 141)" class="fa fa-location-arrow fa-3x mr-3" aria-hidden="true"></i></a>
                                    <div class="media-body">
                                        <a  href="{{ route('menu-consultar-coordenada') }}">
                                           <h5>Consultar coordenadas</h5></a>
                                           <p>Consultar todas las coordenadas en la base de datos</p>
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
