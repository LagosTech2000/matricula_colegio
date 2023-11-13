@extends('layouts.app')
@section('title')
Vehiculos
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">
  </div>
  <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Vehiculos:</h5>
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

            @if(Session::has('notiBorrado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Eliminado!</h5>
              <strong>{{Session('notiBorrado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            {{-- inicio --}}

            <ul class="row">
              <li class="media">

                <div class="media-body xs-md-3">
                  <a class="btn btn-primary btn-lg" href="{{route('vehiculos')}}"><i class="fas fa-home"></i></a>
                  <a class="btn btn-primary btn-lg" href="{{route('vehiculos-ordenes')}}"><i class="fas fa-gas-pump"></i> Ordenes</a>
                  <a href="{{ route('vehiculos-emitidas') }}" class="btn btn-primary btn-lg" id="botonCancelar" type="button"><i class="fas fa-car" aria-hidden="true"></i> Emitidas</a>
                  <a href="{{ route('crearvehiculos') }}" class="btn btn-primary btn-lg" id="botonCancelar" type="button"><i class="fas fa-car-crash" aria-hidden="true"></i> Nuevo Vehiculo</a>
                </div>
              </li>


            </ul>

            <div>

              <form action="{{route('vehiculos')}}" method="POST">
                @csrf
                <div class="d-flex ">

                  <input class="me-2 form-control w-25" type="text" name="nregistro" placeholder="No de registro">
                  <button class="btn btn-primary" type="submit" name="buscarvehiculo"><i class="fas fa-search"></i> Buscar</button>
                  &nbsp;
                  <button class="btn btn-primary" type="submit" name="buscarvehiculo"><i class="fas fa-trash"></i> Limpiar </button>
                </div>


              </form>

            </div>
            <br>

            <table id="archivos" class="table table-striped table-bordered table-sm  text-center" style="width:95%">
              <thead style="background-color:#315d9a;">
                <tr>

                  <th style="color: #fff;">No de Registro</th>
                  <th style="color: #fff;">Marca</th>
                  <th style="color: #fff;">Modelo</th>
                  <th style="color: #fff;">Tipo</th>
                  <th style="color: #fff;">Combustible</th>
                  <th style="color: #fff;">Traccion</th>
                  <th style="color: #fff;">Año</th>
                  <th style="color: #fff;">Placa</th>
                  <th style="color: #fff;">Capacidad</th>
                  <th style="color: #fff; width:5cm;">Acciones</th>


                </tr>
              </thead>

              <tbody>

                @foreach($data as $d)
                <tr>

                  <td>{{$d['Numerodevehiculo']}}</td>
                  <td>{{$d['Marca']}}</td>
                  <td>{{$d['modelo']}}</td>
                  <td>{{$d['tipo']}}</td>
                  <td>{{$d['combustible']}}</td>
                  <td>{{$d['traccion']}}</td>
                  <td>{{$d['año']}}</td>
                  <td>{{$d['Placa']}}</td>
                  <td>{{$d['capacidad']}}</td>



                  <td>

                    <div class="row">

                      <div class="col-4">
                        @if($d['idEmpleado']!=0)
                        <form action="{{route('abastecer')}}" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{$d['idvehiculo']}}">
                          <button class=" w-100 btn btn-primary btn-xs" type="submit"><i class="fas fa-gas-pump"></i></button>
                        </form>
                        @endif
                      </div>

                      <div class="col-4">

                        <form action="{{route('asignar')}}" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{$d['idvehiculo']}}">
                          <button class="w-100 btn btn-primary btn-xs" type="submit"><i class="fas fa-user"></i></button>


                        </form>
                      </div>

                      <div class="col-4">

                        <form action="{{route('editar-vehiculos')}}" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{$d['idvehiculo']}}">
                          <button class="w-100 btn btn-primary btn-xs" type="submit"><i class="fas fa-edit me-5 "></i></button>


                        </form>
                      </div>

                    </div>


                  </td>

                </tr>

                @endforeach
              </tbody>

            </table>
            {{-- final --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@section('scripts')







@endsection
@endsection