@extends('layouts.app')

@section('content')
    <section class="">
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
                                  <a href=""data-toggle="modal" data-target="#averiainternet"><img  class="mr-3" src="{{ asset('img/crearPermisos.png') }}" height="50px"></a>
                                <div class="media-body">
                                    <a href="" data-toggle="modal" data-target="#averiainternet">
                                       <h5>Internet</h5></a>
                                       <p>Crear registro de internet</p>
                                </div>
                              </li>

                              <ul class="list-unstyled ">
                                <li class="media my-4">
                                    <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                  <div class="media-body">
                                      <a href="{{ route('internet-averia.index') }}">
                                         <h5>Consulta Internet Final</h5>
                                      </a>
                                    
                                    <p> Consultar averia de internet</p>
                                  </div>
                                </li>

                                <ul class="list-unstyled ">
                                  <li class="media my-4">
                                      <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                    <div class="media-body">
                                        <a href="{{ route('internet-solicitud.index') }}">
                                           <h5>Solicitudes Internet</h5>
                                        </a>
                                      
                                      <p> Consulta solicitudes de internet</p>
                                    </div>
                                  </li>

                                

                                
                                    {{-- fin --}}
                                  </div>
                                  <div class="col-sm">
                                    {{-- One of three columns --}}

                                    <ul class="list-unstyled ">
                                      <li class="media my-4">
                                          <a href="{{ route('linea-fija.create') }}"><img  class="mr-3" src="{{ asset('img/crearPermisos.png') }}" height="50px"></a>
                                        <div class="media-body">
                                            <a  href="{{ route('linea-fija.create') }}">
                                               <h5>Linea Fija</h5></a>
                                               <p>Crear linea fija</p>
                                        </div>
                                      </li>
        
                                      <ul class="list-unstyled ">
                                        <li class="media my-4">
                                            <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                          <div class="media-body">
                                              <a href="{{ route('linea-fija.index') }}">
                                                 <h5>Consulta linea fija final</h5>
                                              </a>
                                            
                                            <p> Consultar averia linea fija</p>
                                          </div>
                                        </li>


                                          <ul class="list-unstyled ">
                                            <li class="media my-4">
                                                <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                              <div class="media-body">
                                                  <a href="{{ route('solicitud-averia.index') }}">
                                                     <h5>Solicitudes averia</h5>
                                                  </a>
                                                <p> consulta de averias</p>
                                              </div>
                                            </li>

                                            <ul class="list-unstyled ">
                                              <li class="media my-4">
                                                  <img class="mr-3" src="{{ asset('img/consulta.png') }}" height="50px">
                                                <div class="media-body">
                                                    <a href="{{ route('material-averia.index') }}">
                                                       <h5>Averias pendientes</h5>
                                                    </a>
                                                  
                                                  <p> consulta de (averias)</p>
                                                </div>
                                              </li>


                                              {{-- Modal para averias de internet --}}
                                        <!-- Modal -->
                            <div class="modal fade" id="averiainternet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Registro Averia Internet</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  
                                  <div class="modal-body">
                                 
                              <form action=" {{url('/atencion-al-cliente/internet-averia/averiainternet')}} " method="get">
                                
                               
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="hola">Ingrese numero telefonico:</label>
                                    <input  style="font-size:16px;"  class="form-control" type="text" name="hola" id="hola">
                                  </div>
                                </div>
                                  <br>
                                    <ul class="list-unstyled">
                                    <div class="media-body">
                                      <input  type="submit"  class="btn btn-primary" value="Continuar">
                                    </div>
                              </form>
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                                    
                          
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
