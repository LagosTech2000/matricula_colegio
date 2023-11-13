@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Vehiculos</h5>
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
                                      <a href="{{ route('vehiculos') }}"><i style="color:rgb(255, 127, 80)" class="fa fa-car fa-3x mr-3 " aria-hidden="true"></i>
                                      </a>
                                    <div class="media-body">
                                        <a  href="{{ route('vehiculos') }}">
                                        <p>   </p>
                                           <h5>Combustible </h5></a>
                                           <p></p>
                                    </div>
                                  </li>

                                  
                                  <li class="media my-4">
                                      <a href="{{ route('vehiculos-dashboard') }}"><i style="color:rgb(255, 127, 80)" class="mr-3 fa fa-chart-line fa-3x mr-3 " aria-hidden="true"></i>
                                      </a>
                                    <div class="media-body">
                                        <a  href="{{ route('vehiculos-dashboard') }}">
                                        <p>   </p>
                                           <h5>Dashboard</h5></a>
                                           <p></p>
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
