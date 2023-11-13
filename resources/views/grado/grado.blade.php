@extends('layouts.app')
@section('title')
GRADOS
@endsection
@section('content')
<section class="section">
  <div class="section-header" style="max-height: 3rem;">
    <h5 class="page__heading">Grados</h5>
  </div>
  {{-------------------------- NOTIFICACIONES INICIO--------------------------------------}}

  @if(Session::has('noti') )
  <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-{{Session('color')}} alert-dismissible fade show" role="alert">
    <h5 class="alert-heading">{{Session('msg')}}</h5>
    <strong>{{Session('noti')}} </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  {{-------------------------- NOTIFICACIONES FINAL----------------------------------------}}

  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            {{-------------------------- INICIO --------------------------}}
            <div class="card-body">
              <div class="container">
                <form method="post" action="{{ route('grado.guardar') }}">
                  @csrf
                  <div class="row form-group">
                    <label for="nombre">Grado o Carrera:</label>
                    <input required type="text" class="w-50 form-control" name="nombre" id="nombre" placeholder="Escribe aqui...">
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </form>
              </div>
            </div>
            <hr>
            <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
              <thead style="background-color:#315d9a;">

                <th class="w-50 text-center" style="color: #fff;">Grado</th>
                <th class="text-center" style="color: #fff;">Agregar Seccion</th>
                <th class="text-center" style="color: #fff;">Editar</th>
                <th class="text-center" style="color: #fff;">Eliminar</th>
              </thead>
              <tbody>
                @foreach ($data as $d)
                <tr>
                  <td>{{$d->nombre}}</td>
                  <td>
                    <form action="{{route('grado.seccion')}}">
                      @csrf
                      <input type="hidden" name="id_grado" value="{{ $d->id_grado }}">

                      <button class="btn btn-primary px-1 py-1 rounded fas fa-book" type="submit">

                    </form>

                  </td>

                  <td>
                    <form method="GET" action="{{ route('grado.edit') }}">
                      @csrf
                      <input type="hidden" name="id_grado" value="{{ $d->id_grado }}">
                      <input type="hidden" name="nombre" value="{{ $d->nombre }}">
                      <button class="btn btn-primary px-1 py-1 rounded fas fa-edit" type="submit">

                    </form>

                  </td>

                  <td>
                    <form method="POST" action="{{ route('grado.eliminar') }}">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="id_grado" value="{{ $d->id_grado }}">
                      <button class="btn btn-danger px-1 py-1 rounded fas fa-trash" type="submit"></button>
                    </form>


                  </td>

                </tr>

                @endforeach
              </tbody>
            </table>

            {{-------------------------- FINAL ---------------------------}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@section('scripts')
<script>
  $(document).ready(function() {

    $('#order_table').DataTable({
      responsive: true,

      autoWidth: false,

      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "zeroRecords": "Nada encontrado - prueba de nuevo",
        "info": "Mostrando la pagina _PAGE_ de _PAGES_",
        "infoEmpty": "no hay registros disponibles",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate": {
          "next": "Siguiente",
          "previous": "Anterior"
        }
      }
    });

  });
</script>
@endsection

@endsection