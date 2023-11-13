@extends('layouts.app')
@section('title')
  Editar permiso personal
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            
            <center><h4 id="paseSalidaMensaje">Editar el Permiso Personal:</h4></center>

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

                                         
                               <form id="form" action=" {{url('/recursos-humanos-permisos/permiso-personal/'.$permiso->id)}} " method="post">
                                 @csrf
                                 {{ method_field('PATCH')}}   
                                
                                 
                                 <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- INICIO --}}

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horasPermisoPersonal">duracion del permiso:</label>
                                       <select class="form-control" id="horasPermisoPersonal" name="horasPermisoPersonal" required>
                                         <option value="{{ $permiso->horasPermisoPersonal }}">{{ $permiso->horasPermisoPersonal }}</option>
                                           <option id="medioDiaOption" value="4">Medio dia</option>
                                           <option id="diaUnoOption" value="8">Un dia</option>
                                           <option id="diaDosOption" value="16">Dos dias</option>
                                         </select>
                                      </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaPermisoPersonalDia1">fecha Dia 1.</label>
                                      <input style="font-size:14px;" value="{{ $permiso->fechaPermisoPersonalDia1 }}" class="form-control" type="date" name="fechaPermisoPersonalDia1" id="fechaPermisoPersonalDia1" required>
                                    </div>
                                    </div>

                                    <div id="dia2" class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaPermisoPersonalDia2">fecha Dia 2.</label>
                                        <input id="dia2Igual" style="font-size:14;" value="{{ $permiso->fechaPermisoPersonalDia2 }}" class="form-control" type="date" name="fechaPermisoPersonalDia2"   id="fechaPermisoPersonalDia2">
                                    </div>
                                    </div>

                                  

                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}
                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Motivo del permiso:</label>
                                           <input style="font-size:14px;" value="{{ $permiso->motivoTrabajoEnfermedad }}" class="form-control" type="text" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group"> 
                                          <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso">Fecha de solicitud</label>
                                          <input style="font-size:14px;" class="form-control"  type="date" value="{{ $permiso->fechaSolicitudPermiso }}" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                      </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lugarSolicitudPermiso">Lugar:</label>
                                         <select class="form-control" id="lugarSolicitudPermiso" name="lugarSolicitudPermiso" required>
                                           
                                             <option value="Juticalpa">Juticalpa</option>
                                           
                                           </select>
                                        </div>
                                      </div>

                                     {{-- FIN --}}
                                    </div>
                                  </div>
                                    <hr>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled">
                                        <div class="media-body">
                                          <div class="d-flex">
                                          <button style="margin-right: 2rem" class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size:20px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                          <a href="{{ route('permiso-personal.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
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

