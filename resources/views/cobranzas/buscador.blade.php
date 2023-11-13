@extends('layouts.app')
@section('title')
Buscador
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">

  </div>


  <div class="section-body">
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

            @if(Session::has('notiEditado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Expediente Editado!</h5>
              <strong>{{Session('notiEditado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(Session::has('notiGuardado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">! Expediente Guardado!</h5>
              <strong>{{Session('notiGuardado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(Session::has('notiUsuario') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Guardado!</h5>
              <strong>{{Session('notiUsuario')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            {{-- inicio --}}
            <label>









              <div class="media-body">









                <div class="section-body">
                  <table id="porid" class="table table-striped table-bordered table-sm text-center" style="width:100%">
                    <thead style="background-color:#315d9a;">
                      <tr>
                        
                        @if(isset($datos) || isset($numerotelefonico))
                        <th style="color: #fff;">Telefono</th>
                        <th style="width:3.4cm; color: #fff;">Cliente</th>
                        <th style="width:3cm; color: #fff;">Identidad</th>
                        <th style="width:3cm; color: #fff;">Direccion</th>
                        <th style="color: #fff;">Contacto</th>
                        <th style="width:3cm; color: #fff;">Email</th>
                        <th style="color: #fff;">Estado</th>
                        <th style="color: #fff;">Tarifa</th>
                        <th style="color: #fff;">Mora</th>
                        <th style="color: #fff;">Meses</th>
                        <th style="color: #fff;">Nueva Direccion</th>
                        <th class="text-center" style="color: #fff;">Accion</th>
                        @endif



                      </tr>
                    </thead>

                    <tbody>
                      <center>

                        <form class="text-center " style="align-content:center;" action="{{ route('buscador') }}" method="POST">
                          @csrf

                          <label for="filtro">Filtrar por </label>
                          <select name="filtro" id="filtro">
                            <option selected="selected" value="Identidad">Identidad</option>
                            <option value="Telefono">Telefono</option>
                            <input id="buscador" style="margin:auto; text-align:center;" required name="idBuscar" type="search" class="w-25 form-control form-control-sm" placeholder="BUSCAR" aria-controls="roles_tabla" />
                            <input class="btn btn-outline-warning" name="btnBuscar" type="submit" style=" margin-top: 12px;margin-bottom:12px;" value="BUSCAR">

                        </form>
                      </center>
                      @if($numerotelefonico)

                      <td style="color: black;">{{$numerotelefonico}}</th>
                      <td style="color: black;">{{$nombre}}</td>
                      <td style="color: black;">{{$numerodeidentidad}}</td>
                      <td style="color: black;">{{$direccion}} </td>
                      <td style="color: black;">{{$numerodecontacto}}</td>
                      <td style="color: black;">{{$email}}</td>
                      <td style="color: black;">{{$Estado}}</td>
                      <td style="color: black;">{{$tarifa}}</td>
                      <td style="color: black;">{{$Mora}}</td>
                      <td style="color: black;">{{$Meses}}</td>
                      <td style="color: black;">{{$Nuevadireccion}}</td>
                      <td class="" style="color: #fff;">

                        <form action="{{ route('agendar') }}" method="post">
                          @csrf
                          @if($Mora!=0)

                          @if($cita==0)
                          <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                          <button class="btn btn-outline-warning" style="color:darkorange; ">cita 1</button><br />
                        </form>

                        @elseif($cita_2==0)

                        <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                        <button class="btn btn-outline-warning" style="color:darkorange; ">Cita 2</button><br />
                        </form>

                        @elseif($cita_3==0)

                        <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                        <button class="btn btn-outline-warning" style="color:darkorange; ">Cita3</button><br />
                        </form>

                        @elseif($abogado==0)

                        <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                        <button class="btn btn-outline-warning" style="color:darkorange; ">Abogado</button><br />
                        </form>
                        @elseif($abogado_2==0)

                        <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                        <button class="btn btn-outline-warning" style="color:darkorange; ">Abogado 2</button><br />
                        </form>



                        @elseif($abogado_3==0)
                        <input type=hidden name="idCita" value="{{$id}}" id="project-type">
                        <button class="btn btn-outline-warning" style="color:darkorange; ">Abogado 3</button><br />
                        </form>

                        @else

                        </form>
                        <button id="btnRiesgo" class="btn btn-danger text-white" style="color:darkorange; ">Riesgo</button>
                        @endif

                        @endif
                        </form>




                        <form action="{{ route('buscador') }}" method="post">
                          @csrf
                          <input type=hidden name="idEditar" value="{{$id}}" id="project-type">
                          <button class="btn btn-outline-warning" style="  margin-top: 5px; ">Editar</button>
                        </form>
                      </td>

                      @else

                      @if(isset($cobranzas))
                      @foreach ($cobranzas as $c)

                    <tbody>
                      <form action="{{ route('agendar') }}" method="post">
                        @csrf

                        <td style="color: black;">{{$c['numerotelefonico']}}</th>
                        <td style="color: black;">{{$c['nombre']}}</td>
                        <td style="color: black;">{{$c['numerodeidentidad']}}</td>
                        <td style="color: black;">{{$c['direccion']}} </td>
                        <td style="color: black;">{{$c['numerodecontacto']}}</td>
                        <td style="color: black;">{{$c['email']}}</td>
                        <td style="color: black;">{{$c['Estado']}}</td>
                        <td style="color: black;">{{$c['tarifa']}}</td>
                        <td style="color: black;">{{$c['Mora']}}</td>
                        <td style="color: black;">{{$c['Meses']}}</td>
                        <td style="color: black;">{{$c['Nuevadireccion']}}</td>
                        <td style="color: black;">{{$c['Clientesindeuda']}}</td>

                        <td class="" style="color: #fff;">
                          @if($c['Mora']!=0)

                          @if($c['cita']==0)


                          <input type="hidden" name="idCita" value="{{$c['id']}}" id="project-type">

                          <button class="btn btn-outline-warning" style="color:darkorange; ">cita 1</button><br />
                      </form>

                      @elseif($c['cita_2']==0)

                      <input type=hidden name="idCita" value="{{$c['id']}}" id="project-type">
                      <button class="btn btn-outline-warning" style="color:darkorange; ">Cita 2</button><br />
                      </form>

                      @elseif($c['cita_3']==0)

                      <input type=hidden name="idCita" value="{{$c['id']}}" id="project-type">
                      <button class="btn btn-outline-warning" style="color:darkorange; ">Cita3</button><br />
                      </form>

                      @elseif($c['abogado']==0)

                      <input type=hidden name="idCita" value="{{$c['id']}}" id="project-type">
                      <button class="btn btn-outline-warning" style="color:darkorange; ">Abogado</button><br />
                      </form>

                      @elseif($c['abogado_2']==0)

                      <input type=hidden name="idCita" value="{{$c['id']}}" id="project-type">
                      <button class=" btn btn-outline-warning" style="color:darkorange; ">Abogado 2</button><br />
                      </form>

                      @elseif($c['abogado_3']==0)
                      <input type=hidden name="idCita" value="{{$c['id']}}" id="project-type">
                      <button class="btn btn-outline-warning" style="color:darkorange; ">Abogado 3</button><br />
                      </form>

                      @else

                      <button id="btnRiesgo" class="btn btn-danger text-white" style="color:darkorange; ">Riesgo</button>
                      </form>

                      @endif
                      @endif
                      </form>


                      <form action="{{ route('buscador') }}" method="post">
                        @csrf
                        <input type=hidden name="idEditar" value="{{$c['id']}}" id="project-type">
                        <button class="btn btn-outline-warning" style="  margin-top: 5px; ">Editar</button>
                      </form>

                      </td>
                    </tbody>

                    @endforeach
                    @endif

                    @endif

                  </table>
                </div>
</section>
@section('scripts')



<script>
  function DeleteFunction() {
    if (confirm('seguro que deseas borrar este registro?'))
      return true;
    else {
      return false;
    }
  }
</script>

<script>
  const inputBuscador = document.getElementById("buscador");
  const filtro = document.getElementById("filtro");

  filtro.addEventListener("change", () => {

            inputBuscador.value=""
            
  })

inputBuscador.addEventListener("input", () => {
  // Se asegura de que solo se ingresen números
  inputBuscador.value = inputBuscador.value.replace(/[^0-9]/g, "");

  // Limita la longitud del input a 13 caracteres
  if(filtro.value=="Identidad"){

    if (inputBuscador.value.length > 13) {
      inputBuscador.value = inputBuscador.value.slice(0, 13);
    }
  }else{
    if (inputBuscador.value.length > 8) {
      inputBuscador.value = inputBuscador.value.slice(0, 8);
    }
  }
});

</script>







@endsection
@endsection