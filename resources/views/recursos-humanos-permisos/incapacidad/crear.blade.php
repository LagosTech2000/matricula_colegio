@extends('layouts.app')
@section('title')
Crear permiso de incapacidad
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            <center><h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un permiso de incapacidad:</h5></center>
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
                                            {{-- FORMULARIO PARA CREAR UN PERMISO DE INCAPACIDAD  --}}

                               <form id="form" action=" {{url('/recursos-humanos-permisos/incapacidad')}} " method="post">
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
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numCertificadoIncapacidad" required>Numero de certificado:</label>
                                          <input  style="font-size:16px;" class="form-control" type="text" name="numCertificadoIncapacidad" id="numCertificadoIncapacidad" required>
                                        </div>
                                      </div>
                                      
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numAfiliacionIncapacidad" required>Numero de afiliación:</label>
                                          <input  style="font-size:16px;" class="form-control" type="text" name="numAfiliacionIncapacidad" id="numAfiliacionIncapacidad" required>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso" required>Fecha de solicitud:</label>
                                          <input  style="font-size:16px;" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
                                        </div>
                                      </div>

                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}
                                      
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad" required>Tipo de enfermedad:</label>
                                          <input  style="font-size:16px;" class="form-control" type="text" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaInicioIncapacidad" required>Fecha de inicio:</label>
                                          <input  style="font-size:16px;" class="form-control" type="date" name="fechaInicioIncapacidad" id="fechaInicioIncapacidad" required>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechafinalIncapacidad" required>Fecha de finalización:</label>
                                          <input  style="font-size:16px;" class="form-control" type="date" name="fechafinalIncapacidad" id="fechafinalIncapacidad" required>
                                        </div>
                                      </div>

                                       {{-- <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Total de dias:</span>
                                        </div>
                                        <select class="form-control" style="font-weight:bold;" id="totalDiasIncapacidad" name="totalDiasIncapacidad" required>
                                          <option disabled selected value="">Seleccione el total de días</option>
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
                                      </div> --}}

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechafinalIncapacidad" required>Total de dias:</label>
                                          <select class="form-control" style="font-weight:bold;" id="totalDiasIncapacidad" name="totalDiasIncapacidad" required>
                                            <option disabled selected value="">Seleccione el total de días</option>
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
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="ihss" required>CPU/IHSS:</label>
                                          <input  style="font-size:16px;" class="form-control" type="text" name="ihss" id="ihss" required>
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

