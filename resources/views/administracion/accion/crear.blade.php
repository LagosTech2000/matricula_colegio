@extends('layouts.app')
@section('title')
EXPEDIENTES
@endsection
@section('content')
<section class="">
    <div class="section-header" style="max-height: 4rem;">
    </div>
    <div class="section-body">
        <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Nuevo Expediente</h5>
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

                        <form id="form" action=" {{route('administracion.store')}} " method="post">
                            @csrf
                            <div class="container center">
                                <div class=" form row">
                                    <center>
                                    <div  class="col-sm">

                                            
                                            <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="form-group">
                                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="numerodearchivo" id="numerodearchivo">N° De Archivo</label>
                                                    <select required class="form-control" id="numerodearchivo" name="numerodearchivo">
                                                        <option disabled selected value="">N° Archivo</option>
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
                                                        <option value="">N° Gaveta</option>
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
                                                       <option disabled selected value=""></option>                                                       
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
                                            <div class="col-xs-5 col-sm-3 col-md-5">
                                                <div class="form-group">
                                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="numerodeidentidad">Numero De Identidad De Cliente</label>
                                                    <input required placeholder="N° Identidad" style="font-weight:bold;" class="form-control" type="number" name="numerodeidentidad" id="numerodeidentidad">
                                                    
                                                </div>
                                            </div>
                                          
                                           
                                            <br>

                                        </div>
                                        <div class="row">
                                            
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="tipodeservicio">Tipo de Servicio</label>
                                                    <select required placeholder="Elija el Tipo De Servicio" required class="form-control" style="font-weight:bold;" id="tipodeservicio" name="tipodeservicio">                                                        
                                                    <option disabled selected value=""></option>    
                                                    <option value="RESIDENCIAL">RESIDENCIAL</option>
                                                        <option value="COMERCIAL">COMERCIAL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                        
                                        
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="servicioadquirido">Servicio Aquirido</label>
                                                    <select required class="form-control" style="font-weight:bold;" id="servicioadquirido" name="servicioadquirido">
                                                        <option disabled selected value=""></option>                                                        
                                                        <option value="LINEA TELEFONICA">LINEA TELEFONICA</option>                                                        
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="servicioadquirido2">2 Servicio Aquirido</label>
                                                    <select class="form-control" style="font-weight:bold;" id="servicioadquirido2" name="servicioadquirido2">
                                                        <option disabled selected value=""></option>
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
                                        <button name="enviar" class="text-center  btn btn-primary" id="botonGuardar" type="submit" style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check"  aria-hidden="true"></i> Guardar</button>
                                        <a href="{{ route('administracion.index') }}" class="btn btn-danger" id="botonCancelar" type="button" style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                    </div>
                                </ul>
                            </center>

                    </div>
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
    // es para desabilitar al hacer submit una sola vez
    $('#form').one('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled', 'disabled');
    });
</script>
@endsection
@endsection