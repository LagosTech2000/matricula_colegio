@extends('layouts.app')
@section('title')
  Editar Maestros
@endsection
@section('content')
    <section class="">
        <div class="section-header">
        </div>
        <div class="section-body">
          <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Editar Maestros:</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                                 {{-- control de errores: --}}
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
                            {{-- Laravel colective --}}

                            {!! Form::model($user,['method' => 'PUT', 'route' =>['usuarios.update', $user->id]]) !!}

                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                 {{-- 1 --}}
                                
                                 <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label for="name">Nombre</label>
                                         {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                      </div>
                                    </div>
  
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label for="email">Correo</label>
                                         {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                      </div>
                                    </div>

                                  
                                 {{-- 1 --}}
                                </div>

                                </div>
                                <div class="col-sm">
                                 {{-- 1 --}}
                                
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                     <label for="password">Contraseña</label>
                                     {!! Form::password('password', array('class' => 'form-control')) !!}
                                  </div>
                                </div>

                           
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                     <label for="confirm-password">Confirmar Contraseña</label>
                                     {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                  </div>
                                </div>
  
                                 {{-- 1 --}}
                              </div>
                              </div><br>
                            <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                            <a href="{{ route('usuarios.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
  
                            </div>
                            {!! Form::close() !!}
                            {{-- fin --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection