@extends('layouts.app')
@section('title')
  Crear Empleados(Maestros)
@endsection
@section('content')
    <section class="">
        <div class="section-header"  style="max-height: 3rem;">
            {{-- <h5 class="page__heading">Crear Maestros</h5> --}}
        </div>
        <div class="section-body">
            <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear Empleados(Maestros)</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          

                            {{-- codigo por si se genero un error --}}
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
                            
                            {{-- laravel collective --}}
                            {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST', 'id="form"')) !!}
                          {{-- <div class="row">
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                       <label for="name">Nombre</label>
                                       {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                   </div>
                               </div>

                               <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    {!! Form::text('email',null,array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Confirmar Password</label>
                                    {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Roles</label>
                                    {!! Form::select('roles[]', $roles, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                  <button type="submit" class="btn btn-oultine-primary">Guardar</button>
                            </div>

                          </div> --}}

                          <div class="container">
                            <div class="row">
                              <div class="col-sm">
                               {{-- 1 --}}
                               {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Nombre:</label>
                                  <input required placeholder="ingrese un nombre y un apellido"  style="font-size:16px;"class="form-control" type="text" name="name" id="name">
                                </div>
                              </div>

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Correo</label>
                                    {!! Form::text('email',null,array('class'=>'form-control')) !!}
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Correo:</label>
                                  <input required placeholder="ingrese un correo electronico"  style="font-size:16px;"class="form-control" type="text" name="email" id="email">
                                </div>
                              </div>

                           


                               {{-- 1 --}}
                              </div>
                              <div class="col-sm">
                               {{-- 1 --}}
                               {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', array('class'=>'form-control')) !!}
                                </div>
                            </div> --}}
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Contraseña:</label>
                                  <input required placeholder="ingrese una contraseña"  style="font-size:16px;"class="form-control" type="text" name="password" id="password">
                                </div>
                              </div>

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Confirmar Password</label>
                                    {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Confirmar Contraseña:</label>
                                  <input required placeholder="ingrese una contraseña"  style="font-size:16px;"class="form-control" type="text" name="confirm-password" id="confirm-password">
                                </div>
                              </div>
                            

                               {{-- 1 --}}
                              </div>
                            </div>

                           
    
        
                          <button style="margin-right: 1rem"  class="btn btn-outline-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                          <a href="{{ route('usuarios.index') }}" class="btn btn-outline-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>

                       
                          </div>

                            {!! Form::close() !!}

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