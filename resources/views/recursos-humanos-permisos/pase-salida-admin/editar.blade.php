@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header" style="max-height: 4rem;">
            
            <h5 class="page__heading">Confirmar permiso</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label id=""><h6> {{$permiso->permisos->tipoPermiso}} / {{$permiso->empleados->nombreEmpleado}}</h6></label>
                                  </div>
                              </div>
                              <div class="container" style="color:rgb(73, 73, 73)">
                                <div class="row">
                                  <div class="col-sm">
                                    {{-- <h6>Informacion del registro del usuario del mes actual</h6> --}}
                                    
                                  </div>
                                  <div class="col-sm">
                                    {{-- <h6>Informacion del registro del usuario del año actual</h6> --}}
                                  </div>
                                  
                                </div>
                              </div>                                                  
                          
                              <input id="numerotipoPermiso" name="numerotipoPermiso"  type="hidden" value="{{$permiso->permisos->id}} ">      
 <form action=" {{url('/recursos-humanos-permisos/pase-salida-admin/'.$permiso->id)}} " method="post" id="form">
   @csrf   
   {{ method_field('PATCH')}}   
   
  
 <div class="container">


  <div id="dia1Div" style="display: none" class="input-group mb-2">
    <div class="input-group-prepend">
      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Inicio del permiso personal:</span>
    </div>
    <input id="fechaPermisoPersonalDia1" value=" {{$permiso->fechaPermisoPersonalDia1}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
  </div>

  <div id="dia2Div" style="display: none" class="input-group mb-2">
    <div class="input-group-prepend">
      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Final del permiso personal:</span>
    </div>
    <input id="fechaPermisoPersonalDia2" value=" {{$permiso->fechaPermisoPersonalDia2}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
  </div>
  
  <div id="horasPPersonalDiv" style="display: none" class="input-group mb-2">
    <div class="input-group-prepend">
      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Horas del permiso personal:</span>
    </div>
    <input id="horasPermisoPersonal" value=" {{$permiso->horasPermisoPersonal}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
  </div>

  <div id="horaSalidaDiv" style="display: none" class="input-group mb-2">
    <div class="input-group-prepend">
      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Hora de salida</span>
    </div>
    <input id="horaSalida" value=" {{$permiso->horaSalida}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
  </div>
      
  <div id="horaEntradaAproxDiv" style="display: none" class="input-group mb-2">
    <div class="input-group-prepend">
      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Hora de entrada aproximada:</span>
    </div>
    <input id="horaSalida" value=" {{$permiso->horaEntradaAproximada}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
  </div>

      <div id="motivoDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Motivo del permiso:</span>
        </div>
        <input id="horaSalida" value=" {{$permiso->motivoTrabajoEnfermedad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Telefono de emergencia:</span>
        </div>
        <input id="telefonoEmergencia" value=" {{$permiso->telefonoEmergencia}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="vehiculoDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Vehiculo:</span>
        </div>
        <input id="vehiculoDescripcion" value=" {{$permiso->vehiculoDescripcion}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="internetDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Internet vendido:</span>
        </div>
        <input id="internetVendido" value=" {{$permiso->internetVendido}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="telefonoDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Telefono vendido:</span>
        </div>
        <input id="telefonoVendido" value=" {{$permiso->telefonoVendido}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="lineaVendida" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Linea vendida:</span>
        </div>
        <input id="lineaVendida" value=" {{$permiso->lineaVendida}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divCertificado" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Certificado de incapacidad:</span>
        </div>
        <input id="numCertificadoIncapacidad" value=" {{$permiso->numCertificadoIncapacidad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divAfiliacion" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Numero de afiliación:</span>
        </div>
        <input id="numAfiliacionIncapacidad" value=" {{$permiso->numAfiliacionIncapacidad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divInicioIncapacidad" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio de incapacidad:</span>
        </div>
        <input id="fechaInicioIncapacidad" value=" {{$permiso->fechaInicioIncapacidad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>
        
      <div id="divFinalIncapacidad" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha final de incapacidad:</span>
        </div>
        <input id="fechafinalIncapacidad" value=" {{$permiso->fechafinalIncapacidad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divDiasIncapacidad" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Total dias de incapacidad:</span>
        </div>
        <input id="totalDiasIncapacidad" value=" {{$permiso->totalDiasIncapacidad}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divIHSS" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">IHSS:</span>
        </div>
        <input id="hss" value=" {{$permiso->ihss}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divSueldoBase" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Sueldo base:</span>
        </div>
        <input id="hss" value=" {{$permiso->sueldoBaseSubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divFechaInicioSubsidio" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio:</span>
        </div>
        <input id="hss" value=" {{$permiso->fechaInicioSubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divFechaFinalSubsidio" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de finalización:</span>
        </div>
        <input id="hss" value=" {{$permiso->fechaFinalSubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divDiasSubsidio" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Días de incapacidad:</span>
        </div>
        <input id="hss" value=" {{$permiso->totalDiassubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divDiasSubsidioPagar" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Días a pagar:</span>
        </div>
        <input id="hss" value=" {{$permiso->DiasPagarSubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="divObservacion" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Observación:</span>
        </div>
        <input id="hss" value=" {{$permiso->ObservacionesSubsidio}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Creado por:</span>
        </div>
        <input id="fk_id_user" value=" {{$permiso->nombreQuienCreo}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="fechaSolicitudDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha del permiso:</span>
        </div>
        <input id="fechaSolicitudPermiso" value=" {{$permiso->fechaSolicitudPermiso}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

      <div id="lugarDiv" style="display: none" class="input-group mb-2">
        <div class="input-group-prepend">
          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Lugar del permiso:</span>
        </div>
        <input id="lugarSolicitudPermiso" value=" {{$permiso->lugarSolicitudPermiso}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
      </div>

         <input class="form-control" type="hidden" name="aprobacion"  id="aprobacion" value="aprobado">
  
     <input type = "hidden" name="nombreQuienAprobo" id="nombreQuienCreo" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
<hr>
    <div class="col-xs-12 col-sm-12 col-md-12">
      
          <div class="media-body">
            <div class="d-flex">
            <button style="margin-right: 1rem" class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size:20px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Aprobar</button>
            <a href="{{ route('pase-salida-admin.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
          </div>
          </div>
       
      </div>

  </div>
 </form>
  
                            {{-- final --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script>
     //Ocultar o mostrar dependiendo el tipo de permiso
      var  tipoDePermiso = document.getElementsByName("numerotipoPermiso")[0].value
     $(function(){
      // pase de salida
       if(tipoDePermiso == 1){
        $('#horaSalidaDiv').show();
        $('#horaEntradaAproxDiv').show();
        $('#motivoDiv').show();
        $('#fechaSolicitudDiv').show();
        $('#lugarDiv').show();
       }
       // permiso personal
       else if(tipoDePermiso == 2){
        
        $('#dia1Div').show();
        $('#dia2Div').show();
        $('#horasPPersonalDiv').show();
        $('#motivoDiv').show();
        $('#fechaSolicitudDiv').show();
        $('#lugarDiv').show();
       }
        // permiso administrativo
       else if(tipoDePermiso == 3){
        $('#horaSalidaDiv').show();
        $('#horaEntradaAproxDiv').show();
        $('#motivoDiv').show();
        $('#fechaSolicitudDiv').show();
        $('#lugarDiv').show();
       }
         // permiso de ventas
       else if(tipoDePermiso == 4){
        $('#horaSalidaDiv').show();
        $('#horaEntradaAproxDiv').show();
        $('#motivoDiv').show();
        $('#fechaSolicitudDiv').show();
        $('#lugarDiv').show();
        $('#vehiculoDiv').show();
        $('#internetDiv').show();
        $('#telefonoDiv').show();
        $('#lineaVendida').show();
        

       }
       else if(tipoDePermiso == 5){
        $('#divCertificado').show();
        $('#divAfiliacion').show();
        $('#divInicioIncapacidad').show();
        $('#divFinalIncapacidad').show(); 
        $('#fechaSolicitudDiv').show();
        $('#lugarDiv').show();
        $('#divDiasIncapacidad').show();
        $('#divIHSS').show();
       }

       else if(tipoDePermiso == 6){
        $('#divCertificado').show();
        $('#divAfiliacion').show();
        $('#divSueldoBase').show();
        $('#divFechaInicioSubsidio').show();
        $('#divFechaFinalSubsidio').show();
        $('#divDiasSubsidio').show(); 
        $('#divDiasSubsidioPagar').show(); 
        $('#fechaSolicitudDiv').show();
        $('#divObservacion').show();
       }



       
     });


     //solo presionar una vez el submit
     $('#form').one('submit', function unaVezSubmit() {
    $(this).find('button[type="submit"]').attr('disabled','disabled');
});
    </script>
    @endsection
@endsection
