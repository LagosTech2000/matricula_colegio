@extends('layouts.app')
@section('title')
  Crear pase de salida
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            
       <center><h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un pase de salida:</h5></center>
       <center><button style="font-size: 15px; border-radius:1.5rem; margin-top: 0.5rem" type="" class="btn btn-primary">
                  permisos en esta semana<span style="font-size: 15px" class="badge badge-light">{{ $individual2 }}</span>
               </button>
               <button style="font-size: 15px; border-radius:1.5rem; margin-top: 0.5rem" type="" class="btn btn-primary">
                  permisos en este mes<span style="font-size: 15px" class="badge badge-light">{{ $individual }}</span>
               </button>
       </center>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                      
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label  style="font-size:17px; font-weight:bold; color:rgb(89, 89, 89); background-color:rgb(230, 230, 230); padding:0.3rem; border-radius:1rem;"  for="nombreEmpleado">-Empleado: {{ $empleado->nombreEmpleado }}-</label>
                              </div>
                            </div>
  
  @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <strong>Complete los campos</strong>
        @foreach($errors->all() as $error)
          <span class="badge badge-danger">{{$error}}</span>
        @endforeach
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
    </div>
  @endif
                                            {{-- FORMULARIO PARA CREAR UN PASE DE SALIDA                       --}}

                                         
                               <form id="form" action=" {{url('/recursos-humanos-permisos/pase-salida')}} " method="post">
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
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaSalida" required>Hora de salida:</label>
                                        <input  style="font-size:16px;" class="form-control" type="time" name="horaSalida" id="horaSalida" required>
                                      </div>
                                    </div>

                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (aproximada):</label> 
                                     <input  style="font-size:16px;" class="form-control" type="time" name="horaEntradaAproximada" id="horaEntradaAproximada" required>
                                    </div>
                                 </div>
                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}

                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Motivo del permiso:</label>
                                          <input placeholder="Escribir un motivo" style="font-size:14px;" class="form-control" type="text" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                        </div>
                                     </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de solicitud</label>
                                        <input style="font-size:16px;" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                      </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="lugarSolicitudPermiso" required>Lugar:</label>
                                          <select class="form-control" id="lugarSolicitudPermiso" name="lugarSolicitudPermiso">
                                            <option value="Juticalpa">Juticalpa</option>
                                          </select>
                                      </div>
                                    </div>
                                     {{-- FIN --}}
                                    </div>
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
                               
                            </div>
                            {{-- final --}}

                            <div id="mensajeError" style="display: none">
                              <center><h4>agotaste el numero de pases de salida para este mes</h4></center>
                            </div>
                            <div id="mensajeError2" style="display: none">
                              <center><h4>agotaste el numero de pases de salida para esta semana</h4></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script>
      
     $(function mes(){
        // FINAL pcultar boton
       if( {{ $individual }} >= 6){
        $('#botonGuardar').hide();
         $('#form').hide();
         $('#mensajeError').show();
        var textoMensaje = "";
        var mensaje = document.getElementById("paseSalidaMensaje");
        mensaje.innerHTML = textoMensaje;
       }
     });
$(function semana(){
     if( {{ $individual2 }} >= 2){
        $('#botonGuardar').hide();
         $('#form').hide();
         $('#mensajeError2').show();
        var textoMensaje = "";
        var mensaje = document.getElementById("paseSalidaMensaje");
        mensaje.innerHTML = textoMensaje;
       }
     });
    
        // es para desabilitar al hacer submit una sola vez
    $('#form').one('submit', function() {
    $(this).find('button[type="submit"]').attr('disabled','disabled');
});

    </script>
    @endsection
@endsection

