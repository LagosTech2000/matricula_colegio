@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading"> Cobranzas</h5>
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
                                            <a href="{{ route('buscador') }}"><i style='font-size:48px;color:orange' class="fas fa-money-check-alt fa-3x mr-3" aria-hidden="true"></i></i>
                                            </a>
                                            <div class="media-body">
                                                <a href="{{ route('buscador') }}">
                                                    <h5>Buscador cobranzas</h5>
                                                </a>

                                                <p>activos e inactivos </p>
                                            </div>

                                        </li>
                                        <li class="media my-4">
                                            <a href="{{ route('dashboardCobranza') }}"><i style='font-size:48px;color:orange' class="fas fa-chart-pie fa-3x mr-3" aria-hidden="true"></i></i>
                                            </a>
                                            <div class="media-body">
                                                <a href="{{ route('dashboardCobranza') }}">
                                                    <h5>Dashboard</h5>
                                                </a>

                                                <p>Datos en tiempo real</p>
                                            </div>

                                        </li>


                                        {{-- final --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
@endsection
