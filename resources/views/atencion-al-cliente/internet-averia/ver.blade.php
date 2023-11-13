@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Crear nuevo registro</h5>
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
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="id"><h6>Nombre del Cliente:</h6></label>
                                      <label id="id"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->nombreCliente}} </h6></label>
                                     </div>
                                      </div>
                                  </div>   
                                  
                                  
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteNombre"><h6>Numero de linea:</h6></label>
                                <label id="clienteNombre"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->numeroDeLinea}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col--12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteCorreo"><h6>Contacto:</h6></label>
                                <label id="clienteCorreo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->contacto}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteProfesion"><h6>Direccion:</h6></label>
                                <label id="clienteProfesion"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->direccion}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="telefonoContacto"><h6>Contacto:</h6></label>
                                    <label id="telefonoContacto"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->contacto}} </h6></label>
                                   </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="clienteDireccionTrabajo"><h6>Fecha de solicitud:</h6></label>
                                    <label id="clienteDireccionTrabajo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->fechaDeSolicitud}} </h6></label>
                                   </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="clienteEstadoCivil"><h6>Megas:</h6></label>
                                    <label id="clienteEstadoCivil"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->Megas}} </h6></label>
                                   </div>
                                    </div>
                                </div>
                               
                                          
                                <a href="{{url('/atencion-al-cliente/internet-averia') }}" class="btn btn-primary"> Regresar </a>
                                   
                                           
                               
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection