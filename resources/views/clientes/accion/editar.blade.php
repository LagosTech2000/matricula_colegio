@extends('layouts.app')
@section('title')
CLIENTES
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Crear un nuevo Cliente:</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                              </div>
                            </div>

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

            @if(Session::has('notiEditado') )
                <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                  <h5 class="alert-heading">!Cliente Editado!</h5>
                    <strong>{{Session('notiEditado')}}  </strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 @endif

                 @if(Session::has('notiGuardado') )
                 <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                   <h5 class="alert-heading">! Cliente Guardado!</h5>
                     <strong>{{Session('notiGuardado')}}  </strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
            @endif
                                            {{-- FORMULARIO PARA CREAR UN PERMISO DE INCAPACIDAD  --}}
                        <form id="form" action=" {{url('/clientes/accion/'.$cliente->id)}} " method="post">
                            @csrf
                            {{ method_field('PATCH')}}

                            <div class="container">
                                <div class="row ">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerotelefonico" >Numero Telefonico:</label>
                                        <input required placeholder="Escribir el Numero de Contacto"  style="font-weight:bold;" class="form-control" type="text" name="numerotelefonico" id="numerotelefonico"  aria-describedby="inputGroup-sizing-default" value="{{ $cliente->numerotelefonico }}"
                                        >
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombre" >Nombre Completo</label>
                                        <input required placeholder="Escribir Nombre Completo" id="nombre" name="nombre"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default" value="{{ $cliente->nombre }}"
                                        >

                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerodeidentidad" >Numero De Identidad</label>
                                        <input required placeholder="Escribir el Numero de Identidad" id="numerodeidentidad" name="numerodeidentidad"  style="font-weight:bold;" type="text"   class="form-control" aria-describedby="inputGroup-sizing-default" value="{{ $cliente->numerodeidentidad }}">

                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"   for="servicioadquirido"  >Servicio Adquirido:</label>
                                        <select required class="form-control" style="font-weight:bold;" id="servicioadquirido" name="servicioadquirido"  >
                                        <option value=" {{ $cliente->servicioadquirido }}"> {{ $cliente->servicioadquirido }}</option>
                                        <option value="ADSL"> ADSL</option>
                                        <option value="TELEFONIA FIJA">TELEFONIA FIJA</option>
                                        <option value="FIBRA OPTICA">FIBRA OPTICA</option>
                                        </select>
                                    </div>
                                </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="tipodeservicio" >Tipo de Servicio</label>
                                        <select required class="form-control" style="font-weight:bold;" id="tipodeservicio" name="tipodeservicio" >
                                            <option value=" {{ $cliente->tipodeservicio }}"> {{ $cliente->tipodeservicio }}</option>
                                            <option value="RESIDENCIAL">RESIDENCIAL</option>
                                            <option value="COMERCIAL">COMERCIAL</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="municipio"  >Municipio:</label>
                                        <select required class="form-control" id="municipio" name="municipio" style="font-weight:bold; ">
                                            <option value=" {{ $cliente->municipio }}">{{ $cliente->municipio }}</option>
                                            <option value="JUTICALPA">JUTICALPA</option>
                                            <option value="CATACAMAS">CATACAMAS</option>
                                            <option value="SAN FRANCISCO DE LA PAZ">SAN FRANCISCO DE LA PAZ</option>
                                            <option value="CAMPAMENTO">CAMPAMENTO</option>
                                            <option value="SAN ESTEBAN">SAN ESTEBAN</option>
                                            <option value="BECERRA">BECERRA</option>
                                            <option value="PATUCA">PATUCA</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="tarifas">Tarifas:</label>
                                          <select required class="form-control" style="font-weight:bold;" id="tarifas" name="tarifas"  >
                                            <option value=" {{ $cliente->tarifas }}"> {{ $cliente->tarifas }}</option>
                                            <option value="NO ADQUIRIDO">NO ADQUIRIDO</option>
                                              <option value="2 MB">2 MB  $17.00</option>
                                              <option value="3 MB">3 MB  $19.00 </option>
                                              <option value="4 MB">4MB  $23.00</option>
                                              <option value="5 MB">5MB  $25.00</option>
                                              <option value="6 MB">6MB  $26.00</option>
                                              <option value="8 MB">8MB  $28.00</option>
                                              <option value="10 MB">10MB  $31.00</option>
                                              <option value="12 MB">12MB  $32.00</option>
                                              <option value="15 MB">15MB  $34.00</option>
                                              <option value="20 MB">20MB  $36.00</option>
                                          </select>
                                        </div>
                                      </div>

                                </div>

                                <div class="row">
                                    {{-- INICIO --}}
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerodecontacto" >Numero De Contacto</label>
                                        <input required placeholder="Escribir el Numero de Contacto"  style="font-weight:bold;" class="form-control" type="number" name="numerodecontacto" id="numerodecontacto" aria-describedby="inputGroup-sizing-default"  value="{{ $cliente->numerodecontacto }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="email" >Email</label>
                                            <input required placeholder="Escribir el Email" id="email" name="email"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default" value="{{ $cliente->email }}">
                                        </div>
                                    </div>


                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="gps" >Gps</label>
                                            <input required placeholder="Gps" id="gps" name="gps"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default" value="{{ $cliente->gps }}">
                                        </div>
                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="direccion" >Direccion</label>
                                            <input required placeholder="Ingrese Direccion" id="direccion" name="direccion"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default  "value="{{ $cliente->direccion }} " >
                                        </div>

                                    </div>
                                </div><br><br>
                                <center>
                                    <ul class="list-unstyled">
                                        <div class="media-body">
                                            <button style="text-center"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                            <a href="{{ route('accion.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
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






