@extends('layouts.app')
@section('title')
Catalagos
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Nuevo Documento</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                              </div>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" rolenh="alert">
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

                        <form id="form" action=" {{route('catalagos.store')}} " method="post">
                                 @csrf
                            <div class="container">

                                <div class="row">
                                    {{-- INICIO --}}
                                    <div class="col-xs-5 col-sm-6 col-md-5">
                                        <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombredeldocumento" >Nombre Del Documento</label>
                                        <input required placeholder="Escribir el Nombre del Documento"  style="font-weight:bold;" class="form-control" type="text" name="nombredeldocumento" id="nombredeldocumento" aria-describedby="inputGroup-sizing-default" >
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechadecreacion" >Fecha De Creacion</label>
                                            <input  required placeholder="Elija Fecha De Creacion" id="fechadecreacion" name="fechadecreacion"  style="font-weight:bold;" type="date"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                    </div>


                                </div>
                            </div>

                        </div><br>
                                    <center>
                                    <ul class="center">
                                        <div class="center">
                                                <button style="text-center"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                                <a href="{{ route('catalagos.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                        </div>
                                    </ul>
                                    </center>

                        </form>
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






