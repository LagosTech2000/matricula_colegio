@extends('layouts.app')
@section('title')
Editar
@endsection
@section('content')
<section class="">
    <div class="section-header" style="max-height: 4rem;">
    </div>
    <div class="section-body">
        <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Editar Expediente</h5>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


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
                        {{-- FORMULARIO PARA CREAR UN TIPO DE EXPEDIENTE DE CLIENTE  --}}

                        <form id="form" action=" {{route('administracion.edit')}} " method="post">
                            @csrf
                            <div class="container center">
                                <div class=" form row">
                                    <center>
                                        <div class="col-sm">


                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-group">
                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="numerodearchivo" id="numerodearchivo">N° De Archivo</label>
                                                        <select required class="form-control" id="numerodearchivo" name="numerodearchivo">
                                                            <option selected value="{{$data['numerodearchivo']}}">{{$data['numerodearchivo']}}</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-group">
                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="gavetadearchivo" id="gavetadearchivo">Gaveta </label>
                                                        <select required class="form-control" id="gavetadearchivo" name="gavetadearchivo">
                                                            <option vaue="{{$data['gavetadearchivo']}}">{{$data['gavetadearchivo']}}</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-group">

                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="municipio">Municipio:</label>
                                                        <select required class="form-control" id="municipio" name="municipio" style="font-weight:bold;">
                                                            <option  selected value="{{$data['municipio']}}" >{{$data['municipio']}}</option>
                                                            <option value="JUTICALPA">JUTICALPA</option>
                                                            <option value="CATACAMAS">CATACAMAS</option>
                                                            <option value="SAN FRANCISCO DE LA PAZ">SAN FRANCISCO DE LA PAZ</option>
                                                            <option value="CAMPAMENTO">CAMPAMENTO</option>
                                                            <option value="SAN ESTEBAN">SAN ESTEBAN</option>
                                                            <option value="BECERRA">BECERRA</option>
                                                            <option value="PATUCA">PATUCA</option>
                                                            <option value="JUTIQUILE">JUTIQUILE</option>
                                                            <option value="LA CONCEPCION">LA CONCEPCION</option>
                                                            <option value="LA CONCORDIA ">LA CONCORDIA</option>


                                                        </select>
                                                    </div>
                                                </div>


                                                <br>




                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="tipodeservicio">Tipo de Servicio</label>
                                                        <select required  required class="form-control" style="font-weight:bold;" id="tipodeservicio" name="tipodeservicio">
                                                            <option  selected value="{{$data['tipodeservicio']}}">{{$data['tipodeservicio']}}</option>
                                                            <option value="RESIDENCIAL">RESIDENCIAL</option>
                                                            <option value="COMERCIAL">COMERCIAL</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="servicioadquirido">Servicio Aquirido</label>
                                                        <select required class="form-control" style="font-weight:bold;" id="servicioadquirido" name="servicioadquirido">                                                           
                                                            <option value="LINEA TELEFONICA">LINEA TELEFONICA</option>                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="servicioadquirido2">2 Servicio Aquirido</label>
                                                        <select class="form-control" style="font-weight:bold;" id="servicioadquirido2" name="servicioadquirido2">
                                                            <option  selected value="{{$data['servicioadquirido2']}}">{{$data['servicioadquirido2']}}</option>
                                                            <option value="ADSL">ADSL</option>                                                            
                                                            <option value="CORPORATIVA">CORPORATIVA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>

                                </div>
                                {{-- FIN --}}
                            </div><br><br>

                            <center>
                                <ul class="list-unstyled">
                                    <div class="media-body">
                                        <input type="hidden" name="id" value="{{$data['id']}}">
                                        <!-- <input type="hidden" name="numerodearchivo" value="{{$data['numerodearchivo']}}">
                                        <input type="hidden" name="gavetadearchivo" value="{{$data['gavetadearchivo']}}">
                                        <input type="hidden" name="municipio" value="{{$data['municipio']}}">
                                        <input type="hidden" name="tipodeservicio" value="{{$data['tipodeservicio']}}">
                                        <input type="hidden" name="servicioadquirido" value="{{$data['servicioadquirido']}}">                                         -->
                                        <input value="Guardar" name="guardaredit" class="btn btn-primary" type="submit" style="font-size:13px;" class="btn btn-primary" />
                                        <a href="{{ route('administracion.index') }}" class="btn btn-danger" id="botonCancelar" type="button" style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                    </div>
                                </ul>
                            </center>

                        </form>

                    </div>
                    {{-- final --}}
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
        $(this).find('button[type="submit"]').attr('', '');
    });
</script>
@endsection
@endsection