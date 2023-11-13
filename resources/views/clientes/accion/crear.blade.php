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
                                            {{-- FORMULARIO PARA CREAR UN CLIENTE --}}

                                            <form id="form" action=" {{url('/clientes/accion/')}} " method="post">
                                 @csrf
                            <div class="container">
                                <div class="row ">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerotelefonico" >Numero Telefonico:</label>
                                        <input required placeholder="Escribir el No de Telefono"  style="font-weight:bold;" class="form-control" type="text" name="numerotelefonico" id="numerotelefonico"  aria-describedby="inputGroup-sizing-default" >
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombre" >Nombre Completo</label>
                                        <input required placeholder="Escribir Nombre Completo" id="nombre" name="nombre"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">

                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerodeidentidad" >Numero De Identidad</label>
                                        <input required placeholder="Escribir el No de Identidad" id="numerodeidentidad" name="numerodeidentidad"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">

                                    </div>

                                </div>

                                <div class="row">
                                    {{-- INICIO --}}
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numerodecontacto" >Numero De Contacto</label>
                                        <input required placeholder="Escribir el No de Contacto"  style="font-weight:bold;" class="form-control" type="number" name="numerodecontacto" id="numerodecontacto" aria-describedby="inputGroup-sizing-default" >
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="email" >Email</label>
                                            <input required placeholder="Escribir el Email" id="email" name="email"  style="font-weight:bold;" type="email"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="gps" >Gps</label>
                                            <input required placeholder="Gps" id="gps" name="gps"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="direccion" >Direccion</label>
                                            <input required placeholder="Ingrese Direccion" id="direccion" name="direccion"  style="font-weight:bold;" type="text"  class="form-control" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="tarifa" >Tarifas:</label>
                                          <select required class="form-control" style="font-weight:bold;" id="tarifa" name="tarifa" >                                              
                                             <option aria-readonly=""></option>    
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
                                
                                
                                <br><br>

                                    <ul class="list-unstyled">
                                        <div class="media-body">
                                           <center>
                                            <button class="text-center btn btn-primary"     id="botonGuardar"  type="submit"  style="font-size: 13px" class="btn btn-primary"><i style="font-size: 15px" class="fa fa-check" aria-hidden="true"></i> Guardar</button>
                                            <a href="{{ route('accion.index') }}" class="btn btn-danger" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                            </center>

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

<script>

  const numerotelefonico = document.getElementById("numerotelefonico"); 
  const nombre = document.getElementById("nombre"); 
  const numerodeidentidad = document.getElementById("numerodeidentidad"); 

  numerotelefonico.addEventListener("input", () => {
  // Se asegura de que solo se ingresen números
  numerotelefonico.value = numerotelefonico.value.replace(/[^0-9]/g, "");

  // Limita la longitud del input a 8 caracteres 
    if (numerotelefonico.value.length > 8) {
      numerotelefonico.value = numerotelefonico.value.slice(0, 8);
    }
 
});

numerodeidentidad.addEventListener("input", () => {
  // Se asegura de que solo se ingresen números
  numerodeidentidad.value = numerodeidentidad.value.replace(/[^0-9]/g, "");

  // Limita la longitud del input a 13 caracteres 
    if (numerodeidentidad.value.length > 13) {
      numerodeidentidad.value = numerodeidentidad.value.slice(0, 13);
    }
 
});
 
nombre.addEventListener("input", () => {

// Se asegura de que solo se ingresen letras
nombre.value = nombre.value.replace(/\d+/g, "");
  

});



</script>   


    @endsection
@endsection






