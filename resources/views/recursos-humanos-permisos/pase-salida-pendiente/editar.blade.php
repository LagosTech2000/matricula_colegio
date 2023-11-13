@extends('layouts.app')
@section('title')
  Confirmar pase de salida
@endsection
@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            
            <h5 class="page__heading">Confirmar permiso</h5> 
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
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
                            {{-- inicio --}}
                              {{-- <h3 class="text-center">Pase de salida</h3> --}}
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label id=""><h4> {{$permiso->permisos->tipoPermiso}} / {{$permiso->empleados->nombreEmpleado}}</h4></label>
                                  </div>
                              </div>
                                                          
                          
                                 {{-- FORMULARIO PARA almacenar un pase de salida  --}}
                              <form id="form" action=" {{url('/recursos-humanos-permisos/pase-salida-pendiente/'.$permiso->id)}} " method="post">
                                  @csrf   
                                  {{ method_field('PATCH')}} 
        
                             <div class="container">

                               <div class="col-xs-4 col-sm-4 col-md-4">
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Hora de entrada (Real):</span>
                                    </div>
                                      <input id="horaEntradaReal" name="horaEntradaReal" style="font-weight:bold;" required type="time" class="form-control" aria-describedby="inputGroup-sizing-default">
                                  </div>
                                     <hr>
                                    <div class="media-body">
                                      <div class="d-flex">
                                       <input class="form-control" type="hidden" name="aprobacion" readonly id="aprobacion" value="almacenado">
                                       <button style="margin-right: 1rem" class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size:20px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Aprobar</button>
                                       <a href="{{ route('pase-salida-pendiente.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                      </div>
                                    </div>
                         
                               </div>
                  
                             </div>
                  
                              </form>
     
   
  
</div>
    {{-- fin columna 3 --}}
      
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
    

     //solo presionar una vez el submit
     $('#form').one('submit', function unaVezSubmit() {
    $(this).find('button[type="submit"]').attr('disabled','disabled');
});
    </script>
    @endsection
@endsection