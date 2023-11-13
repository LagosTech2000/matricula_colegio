@extends('layouts.app')
@section('title')
  Crear Roles
@endsection
@section('content')
    <section class="">
        <div class="section-header">
          
        </div>
        <div class="section-body">
          <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje"> Crear un rol:</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                         
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
                             {{-- laravel colective --}}
                               {!! Form::open(array('route' => 'roles.store', 'method'=> 'POST')) !!}
                                 <div class="row">
{{-- 
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold;" for="">Nombre del rol</label>
                                         {!! Form::text('name', null, array('class' => 'form-control', 'style="font-size:16px; font-weight:bold;')) !!}
                                       </div>
                                     </div> --}}

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_empleado">Nombre del rol:</label>
                                        <input required placeholder="ingrese el nombre del rol"  style="font-size:16px;"class="form-control" type="text" name="name" id="name">
                                      </div>
                                    </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                            <label for="">Permisos para este rol</label>
                                            <br>
                                            @foreach($permission as $value)
                                              <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name}}</label>
                                                <br>
                                            @endforeach
                                          </div>
                                        </div>
                                 </div>

                                 <button style="margin-right: 1rem"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                          <a href="{{ route('roles.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                        
                                        {!! Form::close() !!}

                             {{-- fin --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
