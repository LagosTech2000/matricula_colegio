@extends('layouts.app')
@section('title')
 Crear permiso de venta
@endsection
@section('content')
  <section class="">
    <div class="section-header"  style="max-height: 3rem;">
      {{-- <h3 class="page__heading">Recursos Humanos:</h3> --}}
       </div>
        <div class="section-body">
      
          <center><h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un permiso de ventas:</h5></center>
         
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                                                {{-- inicio --}}
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                    <label  style="font-size:17px; font-weight:bold; color:rgb(89, 89, 89); background-color:rgb(230, 230, 230); padding:0.3rem; border-radius:1rem;"  for="nombreEmpleado">-Empleado: {{ $empleado->nombreEmpleado }}-</label>
                                                  </div>
                                                </div>
                           
         
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
                            
                                 {{-- FORMULARIO PARA CREAR UN PASE DE SALIDA                       --}}
                     <form id="form" action=" {{url('/recursos-humanos-permisos/ventas-rc')}} " method="post">
                      @csrf

                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              {{-- INICIO --}}

                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Numero personal:</label>
                                  <input  style="font-size:16px;" readonly value="{{ $empleado->id }}" class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado">
                                </div>
                              </div>

                             <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaSalida">Hora de salida:</label>
                                <input  style="font-size:16px;" class="form-control" type="time" name="horaSalida" id="horaSalida" required>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (aproximada):</label> 
                               <input  style="font-size:16px;" class="form-control" type="time" name="horaEntradaAproximada" id="horaEntradaAproximada" required>
                              </div>
                           </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Trabajo a realizar:</label>
                               <input style="font-size:14px;" class="form-control" type="text" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                             </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="vehiculoDescripcion">descripcion del vehiculo:</label>
                               <input style="font-size:14px;" class="form-control" type="text" name="vehiculoDescripcion" id="vehiculoDescripcion" required>
                             </div>
                          </div>
                              {{-- final --}}
                            </div>
                            <div class="col-sm">
                             {{-- INICIO --}}

                             <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lineatVendida">Linea unificada vendida:</label>
                               <select class="form-control" id="lineaVendida" name="lineaVendida" required>
                                <option disabled selected value="">Seleccione una opción</option>
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                                 
                                 </select>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="telefonoVendido">Telefono vendido:</label>
                               <select class="form-control" id="telefonoVendido" name="telefonoVendido" required>
                                <option disabled selected value="">Seleccione una opción</option>
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                                 
                                 </select>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="internetVendido">Internet vendido:</label>
                               <select class="form-control" id="internetVendido" name="internetVendido" required> 
                                <option disabled selected value="">Seleccione una opción</option>
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                                 
                                 </select>
                              </div>
                            </div>

             
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group"> 
                                <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso">Fecha de solicitud</label>
                                <input style="font-size:14px;" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lugarSolicitudPermiso">Lugar:</label>
                               <select class="form-control" id="lugarSolicitudPermiso" name="lugarSolicitudPermiso">
                                 
                                   <option value="Juticalpa">Juticalpa</option>
                                 
                                 </select>
                              </div>
                            </div>
                          </div>
                              {{-- final --}}
                              
                            </div>
                        
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <ul class="list-unstyled">
                              <div class="media-body">
                                
                                <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Enviar</button>
                                <a href="{{ route('recursos-h-tipos-de-permisos') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                              </div>
                            </ul>
                          </div>
                               </form>
                                 
                               {{-- final --}}
                              
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script>
      
    
        // es para desabilitar al hacer submit una sola vez
    $('#form').one('submit', function() {
    $(this).find('button[type="submit"]').attr('disabled','disabled');
});

    </script>
    @endsection
            
@endsection

