@extends('layouts.app')
@section('title')
Vehiculos
@endsection
@section('content')
    <section class="">
        <div class="section-header" style="max-height: 4rem;">
        </div>
        <div class="section-body">
            <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Generar Orden De Vehiculos</h5>
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

                        <form id="form" action=" {{route('vehiculos.store')}} " method="post">
                                 @csrf
                            <div class="container">

                            <div class="row ">

                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerodevehiculo" >Numero de vehiculo:</label>
                                    <input required type="number" class="form-control" style="font-weight:bold;" id="numerodevehiculo" name="numerodevehiculo" />
                                    </select>
                                    </div>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="placa" >Placa:</label>
                                    <input required type="text" maxlength="9" class="form-control" style="font-weight:bold;" id="placa" name="placa" />

                                    </div>
                                </div>


                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="marca" >Marca</label>
                                    <input required  id="marca" name="marca"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                </div>
                                </div>



                                <div class="row ">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="kilometraje" >Kilometraje</label>
                                    <input required type="number" class="form-control" style="font-weight:bold;" id="kilometraje" name="kilometraje" />
                                    </div>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="cantidaddecombustible" >Cantidad De Combustible Gal</label>
                                    <input required type="number" class="form-control" style="font-weight:bold;" id="cantidaddecombustible" name="cantidaddecombustible" />
                                    </div>
                                </div>



                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeropersonal" >Numero Personal</label>
                                    <input required  id="numeropersonal" name="numeropersonal"  style="font-weight:bold;" type="tel"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                </div>
                                </div>



                                <div class="row ">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombredeempleado" >Empleado</label>
                                    <input required  class="form-control" style="font-weight:bold;" id="nombredeempleado" name="nombredeempleado" />
                                    </div>
                                </div>


                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="agencia" >Agencia:</label>
                                                        <select required class="form-control" id="agencia" name="agencia" style="font-weight:bold;">
                                                            <option value=""></option>
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
                                    <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="observaciones" >Observaciones</label>
                                    <input required type="text" class="form-control" style="font-weight:bold;" id="observaciones" name="observaciones" />
                                    </div>
                                </div>


                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechadecreacion" >Fecha De Creacion</label>
                                        <input  required placeholder="Elija Fecha De Creacion" id="fechadecreacion" name="fechadecreacion"  style="font-weight:bold;" type="date"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                            </div>
                                    <ul class="center">
                                     <div class="center">
                                            <button style="text-center"  class="btn btn-primary" id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                            <a href="{{ route('vehiculos.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                        </div>
                                    </ul>
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
