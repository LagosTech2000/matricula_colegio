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

                           
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="id"><h6>Identidad:</h6></label>
                                      <label id="id"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->id}} </h6></label>
                                     </div>
                                      </div>
                                  </div>   
                                  
                                  
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteNombre"><h6>Nombre del cliente:</h6></label>
                                <label id="clienteNombre"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteNombre}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col--12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteCorreo"><h6>Correo:</h6></label>
                                <label id="clienteCorreo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteCorreo}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteProfesion"><h6>Profesion:</h6></label>
                                <label id="clienteProfesion"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteProfesion}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="telefonoContacto"><h6>Contacto:</h6></label>
                                    <label id="telefonoContacto"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->telefonoContacto}} </h6></label>
                                   </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="clienteDireccionTrabajo"><h6>Direccion del Trabajo:</h6></label>
                                    <label id="clienteDireccionTrabajo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteDireccionTrabajo}} </h6></label>
                                   </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="clienteEstadoCivil"><h6>Estado Civil:</h6></label>
                                    <label id="clienteEstadoCivil"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteEstadoCivil}} </h6></label>
                                   </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col--12">
                                  <div class="form-inline">
                                   <div class="form-group">
                                    <label id="beneficiarioParentesco"><h6>Parentesco:</h6></label>
                                    <label id="beneficiarioParentesco"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->beneficiarioParentesco}} </h6></label>
                                   </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-inline">
                                 <div class="form-group">
                                  <label id="cuotas"><h6>Cuotas:</h6></label>
                                  <label id="cuotas"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->cuotas}} </h6></label>
                                 </div>
                                  </div>
                              </div>  
                              
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-inline">
                                 <div class="form-group">
                                  <label id="numeroCuotas"><h6>numeroCuotas:</h6></label>
                                  <label id="numeroCuotas"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->numeroCuotas}} </h6></label>
                                 </div>
                                  </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-inline">
                                 <div class="form-group">
                                  <label id="nombreBeneficiario"><h6>Beneficiario:</h6></label>
                                  <label id="nombreBeneficiario"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->nombreBeneficiario}} </h6></label>
                                 </div>
                                  </div>
                              </div>
                      
                                

                                   
                                            
                                        
                                                  
                                                  
                                            
                                                    <a href="{{url('/atencion-al-cliente/ventas-linea') }}" class="btn btn-primary"> Regresar </a>
                               
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection