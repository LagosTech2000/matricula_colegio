@extends('layouts.app')
@section('title')
Menu
@endsection
@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Archivos</h5>
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

                                        <ul class="list-unstyled ">
                                            <li class="my-4 media">
                                                <a href="{{ route('administracion.index') }}"><i style="color: rgb(255, 127, 80)" class = "mr-3 fa fa-folder-open fa-3x" aria-hidden="true"></i></a>
                                                <div class="media-body">
                                                    <a  href="{{ route('administracion.index') }}">
                                                    <h5>Administracion De Expedientes</h5>
                                                    </a>
                                                    <p>Creacion De Expedientes.</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="list-unstyled ">
                                            <li class="my-4 media">
                                                <a href="{{ route('catalagos.index') }}"><i style="color: rgb(255, 127, 80)" class = "mr-3 fa fa-list fa-3x" aria-hidden="true"></i></a>
                                                <div class="media-body">
                                                    <a  href="{{ route('catalagos.index') }}">
                                                    <h5>Catalagos De Documentos.</h5>
                                                    </a>
                                                    <p>Documentos Varios.</p>

                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled ">
                                            <li class="my-4 media">
                                                <a href="{{ route('adm.dashboard') }}"><i style="color: rgb(255, 127, 80)" class = "mr-3 fa fa-chart-bar fa-3x" aria-hidden="true"></i></a>
                                                <div class="media-body">
                                                    <a  href="{{ route('adm.dashboard') }}">
                                                    <h5>Dashboard De Archivos</h5>
                                                    </a>
                                                    <p>Graficos En Tiempo Real.</p>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
