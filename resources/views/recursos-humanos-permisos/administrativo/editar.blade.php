@extends('layouts.app')
@section('title')
  Editar permiso administrativo
@endsection
@section('content')
  <section class="">
    <div class="section-header"  style="max-height: 3rem;">
     
       </div>
        <div class="section-body">
       
          <center><h4>Editar permiso administrativo</h4></center>
          
        
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                                                {{-- inicio --}}
                      
                   
                    

                                              

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                  <label  style="font-size:17px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreEmpleado">Nombre: {{ $permiso->empleados->nombreEmpleado }}</label>
                                                </div>
                                              </div>
                                            
                                 {{-- FORMULARIO PARA CREAR UN permiso administrativo                     --}}
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
                               
                               <form id="form" action=" {{url('/recursos-humanos-permisos/administrativo/'.$permiso->id)}} " method="post">
                                @csrf
                                {{ method_field('PATCH')}}   


                                    <div class="container">
                                      <div class="row">
                                        <div class="col-sm">
                                         {{-- INICIO --}}
                          
    
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaSalida">Hora de salida:</label>
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
                                          <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="horaEntradaAproximada">Hora de entrada (real):</label> 
                                         <input  style="font-size:16px;" class="form-control" type="time" value="{{$permiso->horaEntradaReal}}" name="horaEntradaReal" id="horaEntradaReal" required>
                                        </div>
                                     </div>

                                         {{-- FIN --}}
                                        </div>
                                        <div class="col-sm">
                                           {{-- INICIO --}}
    
                                           <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                               <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="motivoTrabajoEnfermedad">Trabajo a realizar:</label>
                                               <input style="font-size:14px;" class="form-control" type="text" value="{{$permiso->motivoTrabajoEnfermedad}}" name="motivoTrabajoEnfermedad" id="motivoTrabajoEnfermedad" required>
                                             </div>
                                          </div>

                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group"> 
                                              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitudPermiso">Fecha de solicitud</label>
                                              <input style="font-size:14px;" class="form-control" type="date" value="{{$permiso->fechaSolicitudPermiso}}" name="fechaSolicitudPermiso" id="fechaSolicitudPermiso" required>
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

                                      </div>
                                         {{-- FIN --}}

                                         <hr>
                                         <div class="col-xs-12 col-sm-12 col-md-12">
                                         <ul class="list-unstyled">
                                             <div class="media-body">
                                               
                                               <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Enviar</button>
                                               <a href="{{ route('administrativo.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
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

