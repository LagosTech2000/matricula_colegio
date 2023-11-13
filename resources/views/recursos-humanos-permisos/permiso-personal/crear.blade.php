@extends('layouts.app')
@section('title')
    Crear permiso personal
@endsection
@section('content')
  <section class="">
    <div class="section-header"  style="max-height: 3rem;">
      {{-- <h3 class="page__heading">Recursos Humanos:</h3> --}}
       </div>
        <div class="section-body">
          <center><h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un permiso personal:</h5></center>
          <a style="font-size: 15px;  border-radius:1.5rem;"   style="margin-top: 0.5rem" type="" class="btn btn-primary">
            Numero de horas solicitadas en este mes:<span style="font-size: 15px" class="badge badge-light">{{ $individual }}</span>
          </a>
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
                     <form id="form" action=" {{url('/recursos-humanos-permisos/permiso-personal')}} " method="post">
                      @csrf
  
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- INICIO --}}

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Numero personal:</label>
                                        <input  style="font-size:16px;" readonly value="{{ $empleado->id }}" class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado" required>
                                      </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horasPermisoPersonal">duracion del permiso:</label>
                                       <select class="form-control" id="horasPermisoPersonal" name="horasPermisoPersonal" required>
                                         <option disabled selected value="">Seleccione la duracion</option>
                                           <option id="medioDiaOption" value="4">Medio dia</option>
                                           <option id="diaUnoOption" value="8">Un dia</option>
                                           <option id="diaDosOption" value="16">Dos dias</option>
                                         </select>
                                      </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaPermisoPersonalDia1">fecha Dia 1.</label>
                                      <input style="font-size:14px;" class="form-control" type="date" name="fechaPermisoPersonalDia1" id="fechaPermisoPersonalDia1" required>
                                    </div>
                                    </div>

                                    <div style="display: none" id="dia2" class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaPermisoPersonalDia2">fecha Dia 2.</label>
                                        <input id="dia2Igual" style="font-size:14;" value="" class="form-control" type="date" name="fechaPermisoPersonalDia2"   id="fechaPermisoPersonalDia2">
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
                                          <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso">Fecha de solicitud</label>
                                          <input style="font-size:14px;" class="form-control" type="date" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
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
                    <div id="mensajeError" style="display: none">
                      <center><h4>agotaste el numero de horas para este mes</h4></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
             
    @section('scripts')
   

    <script>

 // PERMISO AGOTADO
     $(function permisoAgotado(){
       if( {{ $individual }} >= 16){
         $('#botonGuardar').hide();
         $('#form').hide();
         $('#mensajeError').show();
            var textoMensaje = "Permiso personal";
            var mensaje = document.getElementById("permisoPersonalMensaje");
            mensaje.innerHTML = textoMensaje;
    }
});

// MENSAJE DE EROROR
$(function mensajeError2(){
       if( {{ $individual }} >= 16){
        
         $('#mensajeError').show();
           
    }
});

    
  // OCULTAR LOS OPTION DEL SELECT
$(function ocultarOption(){
   if( {{ $individual }} == 4){
     $('#diaDosOption').hide();
   }

   else if( {{ $individual }} == 8){
       
       $('#diaDosOption').hide();
   }

    else if( {{ $individual }} == 12){
       $('#diaUnoOption').hide();
       $('#diaDosOption').hide();
   }

   else if( {{ $individual }} == 16){
       $('#diaUnoOption').hide();
       $('#diaDosOption').hide();
       
   }
});

    
      //  BOTON SUBMI nnnT UNA SOLA VEZ
    $('#form').one('submit', function() {
      $(this).find('button[type="submit"]').attr('disabled','disabled');
});


 //ocultar mediante el select
 $('#horasPermisoPersonal').on('change',function(){
      
     

        var selectValor = $(this).val();
        if (selectValor == 16) {
            $('#dia2').show();
            $("#dia2Igual").prop('required', true);
            $('input[type="date"]').val('');


        }else if ((selectValor == 4 || selectValor == 8 )){
          $('#dia2').hide();
          // $("input").prop('required', false);
          // $('#fechaPermisoPersonalDia2').val('');
          $('input[type="date"]').val('');
          $("#dia2Igual").prop('required', false);
        }
    });

  
  
    </script>


  
  
    @endsection
@endsection

