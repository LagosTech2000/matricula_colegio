@extends('layouts.app')
@section('title')
Administracion
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">
  </div>
  <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Administracion</h5>
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
              <h5 class="alert-heading">!Cliente Editado En Archivo!</h5>
              <strong>{{Session('notiEditado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(Session::has('notiGuardado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Nuevo Cliente Guardado En Archivo!</h5>
              <strong>{{Session('notiGuardado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            {{-- inicio --}}
            <ul class="row">
              <li class="media">
                <div class="media-body xs-md-2">
                  <a href="{{ route('administracion.create') }}" class="btn btn-primary btn-xs " id="botonGuardar" type="button" style="font-size: 15px "><i style="font-size: 15px" class="fa fa-file" aria-hidden="true"></i> Nuevo Expediente</a>
                </div>
              </li>
            </ul>

            <table id="archivos" class="table text-center table-striped table-bordered table-sm" style="width:100%">
              <thead style="background-color:#315d9a;">
                <tr>
                  <th style="color: #fff;">Numero De Archivo</th>
                  <th style="color: #fff;">Gaveta De Archivo</th>
                  <th style="color: #fff;">Numero Telefonico</th>
                  <th style="color: #fff;">Nombre Del Cliente</th>
                  <th style="color: #fff;">Numero De Contacto</th>
                  <th style="color: #fff;">Numero de Identidad</th>
                  <th style="color: #fff;">Municipio</th>
                  <th style="color: #fff;">Servicio Adquirido</th>
                  <th style="color: #fff;">Tipo De Servicios</th>
                  <th style="color: #fff;">Estado</th>
                  <th style="color: #fff;">Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)

                <tr>
                  <td>{{$row->numerodearchivo}}</td>
                  <td>{{$row->gavetadearchivo}}</td>
                  <td>{{$row->numerotelefonico}}</td>
                  <td>{{$row->nombre}}</td>
                  <td>{{$row->numerodecontacto}}</td>
                  <td>{{$row->numerodeidentidad}}</td>
                  <td>{{$row->municipio}}</td>
                  <td>{{$row->tipodeservicio}}</td>
                  <td>{{$row->servicioadquirido}} <?php if(isset($row->servicioadquirido2)){echo ", ".$row->servicioadquirido2;}?></td>
                  <td>{{$row->Estado}}</td>
                  <td>

                    <form action="{{ route('ver-expediente')}}" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="{{$row->id}}">
                      <button type="submit" class="btn btn-success  btn-sm">
                        <i class="fa fa-eye">&nbsp; </i>
                      </button>

                    </form>

                    <form action="{{ route('administracion.edit')}}" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="{{$row->id}}" >
                      <input type="hidden" name="numerodearchivo" value="{{$row->numerodearchivo}}">
                      <input type="hidden" name="gavetadearchivo" value="{{$row->gavetadearchivo}}">
                      <input type="hidden" name="municipio" value="{{$row->municipio}}">
                      <input type="hidden" name="tipodeservicio" value="{{$row->tipodeservicio}}">
                      <input type="hidden" name="servicioadquirido" value="{{$row->servicioadquirido}}" >
                      <input type="hidden" name="servicioadquirido2" value="{{$row->servicioadquirido2}}" >
                      <button type="submit" class="btn btn-primary  btn-sm">
                        <i class="fa fa-edit">&nbsp; </i>
                        </a>

                    </form>



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
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function() {
    $('#archivos').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      },
    });
  });
</script>
@endsection
@endsection