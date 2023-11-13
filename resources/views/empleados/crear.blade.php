@extends('layouts.app')
@section('title')
 Crear empleado:
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un nuevo empleado:</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                              </div>
                            </div>
  
  @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <strong>Revise los campos</strong>
        @foreach($errors->all() as $error)
          <span class="badge badge-danger">{{$error}}</span>
        @endforeach
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
    </div>
  @endif
                                            {{-- FORMULARIO PARA CREAR UN PERMISO DE INCAPACIDAD  --}}
                                         
                               <form id="form" action=" {{url('/empleados')}} " method="post">
                                 @csrf
                                 <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- INICIO --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="id" >Numero personal:</label>
                                          <input required placeholder="escribir el numero personal" id="id" name="id"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreEmpleado" >Nombre completo:</label>
                                          <input required placeholder="escribir nombre"  style="font-weight:bold;" class="form-control" type="text" name="nombreEmpleado" id="nombreEmpleado" >
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="telefonoEmpleado" >teléfono (contacto):</label>
                                          <input required placeholder="escribir el telefono" id="telefonoEmpleado" name="telefonoEmpleado"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                      </div>

                                     {{-- FIN --}}
                                    </div>
                                    <div class="col-sm">
                                       {{-- INICIO --}}
                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numIdentidadEmpleado" >Número de identidad:</label>
                                          <input required placeholder="escribir el número de identidad"  style="font-weight:bold;" class="form-control" type="text" name="numIdentidadEmpleado" id="numIdentidadEmpleado" >
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="areaTrabajo" >Area de trabajo:</label>
                                          <select required class="form-control" style="font-weight:bold;" id="areaTrabajo" name="areaTrabajo" >
                                          <option disabled selected value="">Seleccione una Area</option>
                                          <option value="recursos humanos">Recursos humanos</option>
                                          <option value="administrativa">Administración</option>
                                          <option value="atencion al cliente">Atencion al cliente</option>
                                          <option value="seguridad">Seguridad</option>
                                          <option value="planta externa">Planta Externa</option>
                                          <option value="soporte">Soporte</option>
                                         
                                          </select>
                                        </div>
                                      </div>

                                     
                                      
                                     {{-- FIN --}}
                                    </div>
                                  </div><hr>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled">
                                        <div class="media-body">
                                          
                                          <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                          <a href="{{ route('empleados.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                        </div>
                                      </ul>
                                    </div>
                               </form>.
                               
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
