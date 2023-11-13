@extends('layouts.app')
@section('title')
  Editar pago de subsidio
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            
            <center><h4 id="paseSalidaMensaje">Editar planilla por pago de subsidio:</h4></center>
  
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                      
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label  style="font-size:17px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreEmpleado">Empleado: {{ $permiso->empleados->nombreEmpleado }}</label>
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
                                            {{-- FORMULARIO PARA CREAR UN PERMISO DE INCAPACIDAD  --}}

                                         
                               <form id="form" action=" {{url('/recursos-humanos-permisos/subsidio/'.$permiso->id)}}  " method="post">
                                 @csrf
                                 {{ method_field('PATCH')}}   
  
                                 <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- INICIO --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numCertificadoIncapacidad" required>Numero de certificado:</label>
                                          <input value="{{ $permiso->numCertificadoIncapacidad }}" id="numCertificadoIncapacidad" name="numCertificadoIncapacidad"  style="font-weight:bold;" type="text" required class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numAfiliacionIncapacidad" required>Numero de afiliación:</label>
                                          <input value="{{ $permiso->numAfiliacionIncapacidad }}"  style="font-size:16px;" class="form-control" type="text" name="numAfiliacionIncapacidad" id="numAfiliacionIncapacidad" required>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numAfiliacionIncapacidad" required>Sueldo base:</label>
                                          <input value="{{ $permiso->sueldoBaseSubsidio }}" id="sueldoBaseSubsidio" name="sueldoBaseSubsidio"  style="font-weight:bold;" type="text" required class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de solicitud:</label>
                                          <input value="{{ $permiso->fechaSolicitudPermiso }}" style="font-size:16px;" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                        </div>
                                      </div>
                                      

                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}

                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de inicio:</label>
                                          <input value="{{ $permiso->fechaInicioSubsidio }}" style="font-weight:bold;" id="fechaInicioSubsidio" name="fechaInicioSubsidio" type="date" required class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de finalización:</label>
                                          <input value="{{ $permiso->fechaFinalSubsidio }}" style="font-weight:bold;" id="fechaFinalSubsidio" name="fechaFinalSubsidio" type="date" required class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Días de incapacidad:</label>
                                          <select class="form-control" style="font-weight:bold;" id="totalDiassubsidio" name="totalDiassubsidio" required>
                                            <option value="{{ $permiso->totalDiassubsidio }}">{{ $permiso->totalDiassubsidio }}</option>
                                            <option value="1">1 día</option>
                                            <option value="2">2 días</option>
                                            <option value="3">3 días</option>
                                            <option value="4">4 días</option>
                                            <option value="5">5 días</option>
                                            <option value="6">6 días</option>
                                            <option value="7">7 días</option>
                                            <option value="8">8 días</option>
                                            <option value="9">9 días</option>
                                            <option value="10">10 días</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Días a pagar:</label>
                                          <select class="form-control" style="font-weight:bold;" id="DiasPagarSubsidio" name="DiasPagarSubsidio" required>
                                            <option value="{{ $permiso->DiasPagarSubsidio }}">{{ $permiso->DiasPagarSubsidio }}</option>
                                          <option value="1">1 día</option>
                                          <option value="2">2 días</option>
                                          <option value="3">3 días</option>
                                          <option value="4">4 días</option>
                                          <option value="5">5 días</option>
                                          <option value="6">6 días</option>
                                          <option value="7">7 días</option>
                                          <option value="8">8 días</option>
                                          <option value="9">9 días</option>
                                          <option value="10">10 días</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Observación:</label>
                                          <input value="{{ $permiso->ObservacionesSubsidio }}" id="ObservacionesSubsidio"  name="ObservacionesSubsidio" style="font-weight:bold;" type="text" class="form-control" required aria-describedby="inputGroup-sizing-default">
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
      
    
        // es para desabilitar al hacer submit una sola vez
    $('#form').one('submit', function() {
    $(this).find('button[type="submit"]').attr('disabled','disabled');
});

    </script>
    @endsection
@endsection
