@extends('layouts.app')
  @section('title')
    Recursos Humamos
  @endsection
@section('content')
    <section class="section">
        <div class="section-header" style="max-height: 3rem;">
          <h5 class="page__heading">Recursos Humamos</h5>
        </div>
      <div class="text-center">
    
        {{-- inicio estadisticas --}}
        <a id="paseSalidaNot" href="{{ route('pase-salida-pendiente.index') }}" style="margin-top: 0.5rem; display:none;" type="button" class="btn btn-danger">
          Pases de salida nuevos:<span class="badge badge-light">{{$paseSalida}}</span>
        </a>

        <a id="personalNot" href="{{ route('p-personal-pendiente.index') }}" type="button" style="margin-top: 0.5rem; display:none;" type="button" class="btn btn-danger">
           Permisos personales nuevos: <span class="badge badge-light">{{$permisoPersonal}}</span>
        </a>

        <a id="administrativoNot" href="{{ route('administrativo-pendiente.index') }}" type="button" style="margin-top: 0.5rem; display:none;" type="button" class="btn btn-danger">
          Permisos Administrativos nuevos: <span class="badge badge-light">{{ $permisoAdministrativo }}</span>
        </a>

        <a id="ventaNot" href="{{ route('ventas-pendientes.index') }}" type="button" class="btn btn-danger" style="margin-top: 0.5rem; display:none;" type="button">
          Permisos de venta nuevos: <span class="badge badge-light">{{ $permisoVenta }}</span>
        </a>

        <a id="incapacidadNot" href="{{ route('incapacidad-pendiente.index') }}" type="button" class="btn btn-danger" style="margin-top: 0.5rem; display:none;" type="button">
          Incapacidades nuevas: <span class="badge badge-light">{{ $permisoIncapacidad }}</span>
        </a>

        <a id="subsidioNot" href="{{ route('subsidio-pendiente.index') }}" type="button" class="btn btn-danger" style="margin-top: 0.5rem; display:none;" type="button">
          Pagos de subsidio nuevos: <span class="badge badge-light">{{ $permisoSubsidio }}</span>
        </a>
        {{-- final de estadisticas --}}

      </div>
        {{-- final norificaciones --}}
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- NOTIFICACIONES PARA PERMISOS QUE YA TIENE UNO PENDIENTE INICIO --}}
      @if(Session::has('notiEnviado') )
      <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
       <h5 class="alert-heading">!Enviado!</h5>
        <strong>{{Session('notiEnviado')}}  </strong>
     
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
       </div>
      @endif

{{-- NOTIFICACIONES PARA PERMISOS QUE YA TIENE UNO PENDIENTE FINAL --}}
                  {{-- INICIO --}}

                            <hr>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              {{-- One of three columns --}}
                              
                      <ul class="list-unstyled ">
                        <li class="media my-4">
                          <a class="btn btn-outline-light" href="{{ url('/recursos-humanos-menu/tipos-de-permisos') }}"><i style="color: rgb(112, 126, 141); font-size:3.1rem;" class="fa fa-address-card " aria-hidden="true"></i></a>
                        
                          <div class="media-body">
                           <a href="{{ url('/recursos-humanos-menu/tipos-de-permisos') }}"> <h5 class="mt-1  ml-2">Nuevo permiso</h5></a>
                            
                            <p class="ml-2">Creacion de nuevos permisos</p>
                          </div>
                        </li>
                      </ul>
                              {{-- fin --}}
                            </div>
                            <div class="col-sm">
                              {{-- One of three columns --}}
                              
                      <ul class="list-unstyled ">
                        <li class="media my-4">
                          <a class="btn btn-outline-light" href="{{ url('/recursos-humanos-menu/consultas') }}"><i class="fa fa-folder-open" aria-hidden="true" style="color: rgb(112, 126, 141);  font-size:3.1rem;"></i></a>
                          <div class="media-body">
                            <a href="{{ url('/recursos-humanos-menu/consultas') }}" > <h5 class="mt-1  ml-2">Consultar</h5></a>
                           <p class="ml-2">Consultar permisos almacenados</p>
                          </div>
                        </li>
                      </ul>
                              {{-- fin --}}
                            </div>
                          </div>
                        </div>
                           {{-- aqui termina el menu  --}}
                        <!-- Button trigger modal -->
<hr>
                              {{-- FINAL --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('scripts')
   

    <script>
// Notifiaciones
$(function paseSalida(){
       if( {{$paseSalida}} >= 1){
         $('#paseSalidaNot').show();
        }
});
$(function personal(){
       if( {{$permisoPersonal}} >= 1){
         $('#personalNot').show();
        }
});
$(function administrativo(){
       if( {{$permisoAdministrativo}} >= 1){
         $('#administrativoNot').show();
        }
});
$(function venta(){
       if( {{$permisoVenta}} >= 1){
         $('#ventaNot').show();
        }
});
$(function incapacidad(){
       if( {{$permisoIncapacidad}} >= 1){
         $('#incapacidadNot').show();
        }
});
$(function subsidio(){
       if( {{$permisoSubsidio}} >= 1){
         $('#subsidioNot').show();
        }
});
//  recargar automaticamente el inico
 $(document).ready(function(){
       setTimeout(refrescar, 20000);
      });
  function refrescar(){
      location.reload();
     }
</script>

    @endsection
@endsection

