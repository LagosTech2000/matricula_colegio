@extends('layouts.app')
@section('title')
    Permisos
@endsection
@section('content')
  <section class="">
    <div class="section-header" style="max-height: 3rem;">
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" class="page__heading">Recursos Humanos</h5>
        </div>

          <div class="section-body">
         
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h4><center> Selección del tipo de permiso</center></h4><hr>
                            {{-- inicio --}}
         {{-- NOTIFICACIONES PARA PERMISOS QUE YA TIENE UNO PENDIENTE INICIO --}}
         @if(Session::has('notiPaseSalida') )
         <div  style="max-height: 6.5rem; max-width: 32rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">!Error!</h5>
           <strong>{{Session('notiPaseSalida')}}  </strong>
        
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
          </div>
         @endif

         @if(Session::has('notiAdministrativo') )
         <div  style="max-height: 6.5rem; max-width: 32rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">!Error!</h5>
           <strong>{{Session('notiAdministrativo')}}  </strong>
        
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
          </div>
         @endif
        
         @if(Session::has('notiPaseSalidaSemana') )
        
         <div  style="max-height: 6.5rem; max-width: 24rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">!pases de salida agotados!</h5>
           <strong>{{Session('notiPaseSalidaSemana')}}  </strong>
        
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
          </div>
          <hr>
         @endif

         @if(Session::has('notiPermisoPersonalMes') )
        
         <div  style="max-height:10rem; max-width: 24rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">!Permisos personales agotados!</h5>
           <strong>{{Session('notiPermisoPersonalMes')}}  </strong>
        
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
          </div>
          <hr>
         @endif
        
         @if ($errors->any())
         <div  style="max-height: 6.5rem; max-width: 24rem;"class="alert alert-danger alert-dismissible fade show" role="alert">
           <h5 class="alert-heading">!Error!</h5>
           <strong>El empleado no existe</strong>
             @foreach($errors->all() as $error)
             
                @endforeach
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
          </div>
        @endif
        {{-- NOTIFICACIONES PARA PERMISOS QUE YA TIENE UNO PENDIENTE FINAL --}}
                    
                       <div class="container">
                         <div class="row">
                           <div class="col-sm">
                                    {{-- columna 1 --}}
                          @can('recursos-humanos-ver')      
                             <ul class="list-unstyled">
                               <li class="media my-4">
                                 <a class="btn btn-outline-light" href="" data-toggle="modal" data-target="#paseSalida"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-plus-square" aria-hidden="true"></i></a>
                                  <div class="media-body">
                                    <a type="button" href="" data-toggle="modal" data-target="#paseSalida">
                                      <h5 class="ml-2">Pase de Salida</h5></a>
                                      <p class="ml-2">Crear un pase de salida nuevo</p>
                                  </div>
                               </li>
                             </ul>
                           @endcan
                           
                               <ul class="list-unstyled">
                                <li class="media my-4">
                                    <a class="btn btn-outline-light" data-toggle="modal" data-target="#permisoPersonal" href=""><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-plus-square" aria-hidden="true"></i></a>
                                  <div class="media-body">
                                    <a type="button" href="" data-toggle="modal" data-target="#permisoPersonal">
                                      <h5 class="ml-2">Permiso Personal</h5></a>
                                      <p class="ml-2">Crear un permiso personal</p>
                                  </div>
                                </li>
                               </ul>

                              <ul class="list-unstyled">
                                <li class="media my-4">
                                  <a class="btn btn-outline-light" data-toggle="modal" data-target="#permisoAdministrativo" href=""><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <div class="media-body">
                                      <a type="button" href="" data-toggle="modal" data-target="#permisoAdministrativo">
                                        <h5 class="ml-2">Permiso Administrativo</h5></a>
                                      <p class="ml-2">Crear un permiso (sección administrativa)</p>
                                    </div>
                                </li>
                              </ul>

                                <ul class="list-unstyled">
                                  <li class="media my-4">
                                      <a class="btn btn-outline-light" href="" data-toggle="modal" data-target="#permisoVentas"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <div class="media-body">
                                      <a type="button" href="" data-toggle="modal" data-target="#permisoVentas">
                                        <h5 class="ml-2">Permiso de Ventas</h5></a>
                                           <p class="ml-2">Crear un permiso (sección de ventas)</p>
                                    </div>
                                  </li>
                                </ul>
                                    {{-- fin --}}
                                  </div>
                                  <div class="col-sm">
                                    {{-- segunda Columna --}}
          
                                    <ul class="list-unstyled">
                                      <li class="media my-4">
                                        <a class="btn btn-outline-light" href="" data-toggle="modal" data-target="#incapacidad"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-home" aria-hidden="true"></i></a>
                                         <div class="media-body">
                                           <a type="button" href="" data-toggle="modal" data-target="#incapacidad">
                                             <h5 class="ml-2">Permiso de Incapacidad</h5></a>
                                             <p class="ml-2">Crear un permiso de incapacidad</p>
                                         </div>
                                      </li>
                                    </ul>

                                    <ul class="list-unstyled">
                                      <li class="media my-4">
                                        <a class="btn btn-outline-light" href="" data-toggle="modal" data-target="#subsidio"><i style="color: rgb(112, 126, 141); font-size:2.4rem;" class="fa fa-home" aria-hidden="true"></i></a>
                                         <div class="media-body">
                                           <a type="button" href="" data-toggle="modal" data-target="#subsidio">
                                             <h5 class="ml-2">Pago de subsidio</h5></a>
                                             <p class="ml-2">Crear un Pago de subsidio</p>
                                         </div>
                                      </li>
                                    </ul><hr>
                       
                                    {{-- fin --}}
                                  </div>
                                </div>
                              </div>
                                 {{-- aqui termina el menu  --}}
                      
{{-------------------------- MODAL PASE DE SALIDA --------------------------------------------------------------------------}}
<div class="modal fade" id="paseSalida" tabindex="-1" role="dialog" aria-labelledby="paseSalidaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Pase de Salida</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio formulario para crear un pase de salida--------------}}
          <form action=" {{url('/recursos-humanos-permisos/pase-salida/creacion')}} " method="get">
           
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Número personal:</label>
                 <input placeholder="Ingrese un número personal"  style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado" required>
               </div>
          
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input class="btn btn-primary btn-lg btn-block"  type="submit"  class="btn btn-primary" value="Continuar">
                 </div>
                </ul>
              </div>
          </form>    
            {{---final formulario para crear un pase de salida----------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL PASE DE SALIDA -----------------------------------------------------------------}}

{{-------------------------- INICIO MODAL PERMISO ADMINISTRATIVO --------------------------------------------------------------------------}}
<div class="modal fade" id="permisoAdministrativo" tabindex="-1" role="dialog" aria-labelledby="permisoAdministrativoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Permiso administrativo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio de formulario para crear un permiso adminitrativo--------------}}
          <form action=" {{url('/recursos-humanos-permisos/administrativo/create2')}} " method="get">
          
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Ingrese el numero personal:</label>
                 <input placeholder="Ingrese un número personal" style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado">
               </div>
             
            
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input  type="submit"  class="btn btn-primary btn-lg btn-block" value="Continuar">
                 </div>
                </ul>
             </div>
          </form>    
            {{---final para crear un permiso administrativo----------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL PASE ADMINISTRATIVO -----------------------------------------------------------------}}

{{-------------------------- INICIO MODAL PERMISO VENTAS --------------------------------------------------------------------------}}
<div class="modal fade" id="permisoVentas" tabindex="-1" role="dialog" aria-labelledby="permisoVentas" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Permiso de Ventas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio de formulario para crear un permiso de ventas--------------}}
          <form action=" {{url('/recursos-humanos-permisos/ventas-rc/create3')}} " method="get">
            
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Ingrese el numero personal:</label>
                 <input  placeholder="Ingrese un número personal" style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado">
               </div>
           
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input  type="submit"  class="btn btn-primary btn-lg btn-block" value="Continuar">
                 </div>
                </ul>
             </div>
          </form>    
            {{---final para crear un permiso de ventas----------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL PERMISO VENTAS -----------------------------------------------------------------}}

{{-------------------------- INICIO MODAL PERMISO PERSONAL --------------------------------------------------------------------------}}
<div class="modal fade" id="permisoPersonal" tabindex="-1" role="dialog" aria-labelledby="permisoPersonal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Permiso Personal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio de formulario para crear un permiso personal--------------}}
          <form action=" {{url('/recursos-humanos-permisos/permiso-personal/creacion2')}} " method="get">
        
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Ingrese el numero personal:</label>
                 <input placeholder="Ingrese un número personal"  style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado">
               </div>
            
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input  type="submit"  class="btn btn-primary btn-lg btn-block" value="Continuar">
                 </div>
                </ul>
             </div>
          </form>    
            {{---final para crear un permiso personal----------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL PERMISO PERSONAL -----------------------------------------------------------------}}

{{-------------------------- MODAL INCAPACIDAD --------------------------------------------------------------------------}}
<div class="modal fade" id="incapacidad" tabindex="-1" role="dialog" aria-labelledby="paseSalidaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Permiso de incapacidad</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio formulario para crear una incapacidad--------------}}
          <form action=" {{url('/recursos-humanos-permisos/incapacidad/create4')}} " method="get">
           
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Número personal:</label>
                 <input placeholder="Ingrese un número personal"  style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado" required>
               </div>
            
              <br>
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input class="btn btn-primary btn-lg btn-block"  type="submit"  class="btn btn-primary" value="Continuar">
                 </div>
                </ul>
              </div>
          </form>    
            {{---final formulario para crear uina incapacidad---------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL INCAPACIDAD -----------------------------------------------------------------}}

{{-------------------------- MODAL SUBSIDIO --------------------------------------------------------------------------}}
<div class="modal fade" id="subsidio" tabindex="-1" role="dialog" aria-labelledby="paseSalidaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="paseSalidaLabel">Pago de subsidio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        <div class="modal-body">
          {{---inicio formulario para crear una pago subsidio--------------}}
          <form action=" {{url('/recursos-humanos-permisos/subsidio/create5')}} " method="get">
           
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Número personal:</label>
                 <input placeholder="Ingrese un número personal"  style="font-size:16px;"  class="form-control" type="text" name="fk_id_empleado" id="fk_id_empleado" required>
               </div>
            
              <br>
                <ul class="list-unstyled">
                 <div class="media-body">
                   <input class="btn btn-primary btn-lg btn-block"  type="submit"  class="btn btn-primary" value="Continuar">
                 </div>
                </ul>
              </div>
          </form>    
            {{---final formulario para crear pago subsidio---------------}}         
        </div>
         <div class="modal-footer">
           </div>
      </div>
    </div>
  </div>
{{-------------------------- FINAL MODAL SUBSIDIO -----------------------------------------------------------------}}
                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

