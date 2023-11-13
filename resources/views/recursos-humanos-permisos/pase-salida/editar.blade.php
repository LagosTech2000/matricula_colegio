@extends('layouts.app')
@section('title')
  Editar pase de salida
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            
            <center><h4 id="paseSalidaMensaje">Editar el pase de salida:</h4></center>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                      
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label  style="font-size:17px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreEmpleado">Empleado: {{$permiso->empleados->nombreEmpleado}}</label>
                              </div>
                            </div>
  
  
                                            {{-- FORMULARIO PARA CREAR UN PASE DE SALIDA                       --}}

                                         
                               <form id="form" action=" {{url('/recursos-humanos-permisos/pase-salida/'.$permiso->id)}} " method="post">
                                 @csrf
                                 {{ method_field('PATCH')}}   
                                
                                 
                                 
                                 <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- INICIO --}}
                                     

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaSalida" required>Hora de salida:</label>
                                        <input  style="font-size:16px;" class="form-control" type="time" value="{{$permiso->horaSalida}}" name="horaSalida" id="horaSalida" required>
                                      </div>
                                    </div>

                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (aproximada):</label> 
                                     <input  style="font-size:16px;" class="form-control" type="time" value="{{$permiso->horaEntradaAproximada}}" name="horaEntradaAproximada" id="horaEntradaAproximada" required>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaReal">Hora de entrada (real):</label> 
                                   <input  style="font-size:16px;" class="form-control" type="time" value="{{$permiso->horaEntradaReal}}" name="horaEntradaReal" id="horaEntradaReal" required>
                                  </div>
                               </div>
                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}

                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Motivo del permiso:</label>
                                          <input style="font-size:14px;" class="form-control" type="text" value="{{$permiso->motivoTrabajoEnfermedad}}" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                        </div>
                                     </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de solicitud</label>
                                        <input style="font-size:16px;" class="form-control" type="date" value="{{$permiso->fechaSolicitudPermiso}}" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                      </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lugarSolicitudPermiso" required>Lugar:</label>
                                          <select class="form-control" id="lugarSolicitudPermiso" value="{{$permiso->lugarSolicitudPermiso}}" name="lugarSolicitudPermiso">
                                            <option value="Juticalpa">Juticalpa</option>
                                          </select>
                                      </div>
                                    </div>
                                     {{-- FIN --}}
                                    </div>
                                  </div>
                                    <br>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled">
                                        <div class="media-body">
                                          <div class="d-flex">
                                          <button style="margin-right: 2rem" class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size:20px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Confirmar</button>
                                          <a href="{{ route('pase-salida.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                        </div>
                                        </div>
                                      </ul>
                                    </div>

                               </form>
                               
                            </div>
                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

