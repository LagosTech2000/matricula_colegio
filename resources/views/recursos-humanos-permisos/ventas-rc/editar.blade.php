@extends('layouts.app')
@section('title')
  Editar permiso de venta
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            
            <center><h4 id="paseSalidaMensaje">Editar el Permiso de venta:</h4></center>

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

                                         
                               <form id="form" action=" {{url('/recursos-humanos-permisos/ventas-rc/'.$permiso->id)}} " method="post">
                                 @csrf
                                 {{ method_field('PATCH')}}   
                                
                                 
                                 <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                      {{-- INICIO --}}
        
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaSalida">Hora de salida:</label>
                                        <input  style="font-size:16px;" value="{{ $permiso->horaSalida }}" class="form-control" type="time" name="horaSalida" id="horaSalida" required>
                                      </div>
                                    </div>
        
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (aproximada):</label> 
                                       <input  style="font-size:16px;" value="{{ $permiso->horaEntradaAproximada }}" class="form-control" type="time" name="horaEntradaAproximada" id="horaEntradaAproximada" required>
                                      </div>
                                   </div>

                                   <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (Real):</label> 
                                     <input  style="font-size:16px;" value="{{ $permiso->horaEntradaReal }}" class="form-control" type="time" name="horaEntradaReal" id="horaEntradaAproximada" required>
                                    </div>
                                 </div>
        
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Trabajo a realizar:</label>
                                       <input style="font-size:14px;" value="{{ $permiso->motivoTrabajoEnfermedad }}" class="form-control" type="text" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                     </div>
                                  </div>
        
                                      {{-- final --}}
                                    </div>
                                    <div class="col-sm">
                                     {{-- INICIO --}}
        
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lineatVendida">Linea unificada vendida:</label>
                                       <select class="form-control"  id="lineaVendida" name="lineaVendida" required>
                                        <option value="{{ $permiso->lineaVendida }}" >{{ $permiso->lineaVendida }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                         
                                         </select>
                                      </div>
                                    </div>
        
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="telefonoVendido">Telefono vendido:</label>
                                       <select class="form-control" id="telefonoVendido" name="telefonoVendido" required>
                                        <option value="{{ $permiso->telefonoVendido }}" >{{ $permiso->telefonoVendido }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                         
                                         </select>
                                      </div>
                                    </div>
        
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="internetVendido">Internet vendido:</label>
                                       <select class="form-control" id="internetVendido" name="internetVendido" required> 
                                        <option value="{{ $permiso->internetVendido }}" >{{ $permiso->internetVendido }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                         
                                         </select>
                                      </div>
                                    </div>
        
                     
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso">Fecha de solicitud</label>
                                        <input style="font-size:14px;" value="{{ $permiso->fechaSolicitudPermiso }}" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                    </div>
                                    </div>
                                    
                                      {{-- final --}}
                                      
                                    </div>
                                
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                  <ul class="list-unstyled">
                                      <div class="media-body">
                                        
                                        <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Enviar</button>
                                        <a href="{{ route('ventas-rc.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
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

