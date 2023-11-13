@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header" style="max-height: 4rem;">
            
            <h3 class="page__heading">editar permiso</h3> 
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                              {{-- <h3 class="text-center">Pase de salida</h3> --}}
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label id=""><h4> {{$permiso->permisos->tipoPermiso}} / {{$permiso->empleados->nombreEmpleado}}</h4></label>
                                  </div>
                              </div>
                                                          
                          
                                 {{-- FORMULARIO PARA almacenar un pase de salida  --}}
 <form action=" {{url('/recursos-humanos-permisos/p-personal-pendiente/'.$permiso->id)}} " method="post">
                                  @csrf   
                                  {{ method_field('PATCH')}} 
                                  
                                 

                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group"> 
                                   
                                     <input class="form-control" type="hidden" name="aprobacion" readonly id="aprobacion" value="almacenado">
                                    </div>
                                 </div>
 
                                   
                                    <input  type="submit"  class="btn btn-primary" value="Confirmar">
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
@endsection