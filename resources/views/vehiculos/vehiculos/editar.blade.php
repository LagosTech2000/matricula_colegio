@extends('layouts.app')
@section('title')
Editar vehiculo
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">
  </div>
  <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Editar vehiculo:</h5>
  <div class="section-body">

    <form id="form" action="{{route('editar-vehiculos')}}" method="post">
      @csrf
      <div class="container">


        <div class="row ">

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="placa">Placa:</label>
              <input required type="text" maxlength="9" class="form-control" style="font-weight:bold;" id="placa" name="placa" value="{{$vehiculo->Placa}}" />

            </div>
          </div>


          <div class="col-xs-3 col-sm-3 col-md-3">
            <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="marca">Marca</label>
            <input id="marca" required name="marca" style="font-weight:bold;" type="text" class="form-control" aria-describedby="inputGroup-sizing-default" value="{{$vehiculo->Marca}}">
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="modelo">Modelo</label>
              <input required class="form-control" style="font-weight:bold;" id="modelo" name="modelo" value="{{$vehiculo->modelo}}" />
            </div>
          </div>
        </div>



        <div class="row ">
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="kilometraje">Kilometraje</label>
              <input required type="number" class="form-control" style="font-weight:bold;" id="kilometraje" name="kilometraje" value="{{$vehiculo->Kilometraje}}" />
            </div>
          </div>



          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="combustible">Combustible</label>
              <select required class="form-control" style="font-weight:bold;" id="tipo" name="combustible">
                <option disabled selected>{{$vehiculo->combustible}}</option>
                <option value="Diesel">Diesel</option>
                <option value="Gasolina">Gasolina</option>
              </select>
            </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="capacidad">Capacidad</label>
              <input required type="number" class="form-control" style="font-weight:bold;" id="capacidad" name="capacidad" value="{{$vehiculo->capacidad}}" />
            </div>


          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="tipo">Tipo</label>
              <select required class="form-control" style="font-weight:bold;" id="tipo" name="tipo">
                <option disabled selected value="">{{$vehiculo->tipo}}</option>
                <option value="Pick Up">Pick Up</option>
                <option value="Turismo">Turismo</option>
                <option value="SUV">SUV</option>
              </select>
            </div>


          </div>
        </div>






        <div class="row ">
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="año">Año</label>
              <input required type="number" class="form-control" style="font-weight:bold;" id="año" name="año" value="{{$vehiculo->año}}" />
            </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="traccion">Traccion</label>
              <select required class="form-control" style="font-weight:bold;" id="tipo" name="traccion">
                <option disabled selected value="">{{$vehiculo->traccion}}</option>
                <option value="4x4">4x4</option>
                <option value="4x2">4x2</option>
              </select>
            </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="area">Area</label>
              <select required class="form-control" style="font-weight:bold;" id="area" name="area">
                <option disabled selected value="">{{$vehiculo->area}}</option>
                <option value="administrativa">Administración</option>
                <option value="atencion al cliente">Atencion al cliente</option>
                <option value="recursos humanos">Recursos humanos</option>
                <option value="seguridad">Seguridad</option>
                <option value="planta externa">Planta Externa</option>
                <option value="soporte">Soporte</option>
              </select>
            </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="agencia">Agencia</label>
              <input required type="text" class="form-control" style="font-weight:bold;" id="agencia" name="agencia" value="{{$vehiculo->Agencia}}" />
            </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="observaciones">Observaciones</label>
              <input type="text" class="form-control" style="font-weight:bold;" id="observaciones" name="observaciones" value="{{$vehiculo->Observaciones}}" />

            </div>



          </div>         

          <div class="col-xs-3 col-sm-4 m-auto ">
            <div class="form-group">
              <div class="media-body xs-md-3">

              </div>
              <input type="hidden" name="idvehiculo" value="{{$vehiculo->idvehiculo}}">
              <input class="btn btn-outline-primary btn-lg rounded mt-4" type="submit" value="Guardar" name="enviar">
            </div>
          </div>



        </div>

        <hr>

    </form>
  </div>
</section>
@section('scripts')

<script>
  const inputMarca = document.getElementById("marca");

  inputMarca.addEventListener("input", () => {

  // Se asegura de que solo se ingresen letras
  inputMarca.value = inputMarca.value.replace(/\d+/g, "");
    

});


</script>


@endsection
@endsection