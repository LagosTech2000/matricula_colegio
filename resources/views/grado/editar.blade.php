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


  {{-------------------------- NOTIFICACIONES FINAL----------------------------------------}}

  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            {{-------------------------- INICIO --------------------------}}

            <form method="post" action="{{ route('grado.editar') }}">
              @csrf
              <div class="row form-group">
                <label for="nombre">Grado o Carrera:</label>
                <input type="hidden" name="id_grado" value="{{$data->id_grado}}">
                <input type="text" class="w-50 form-control" value="{{$data->nombre}}" name="nombre" id="nombre" placeholder="Escribe aqui...">
              </div>
              <button type="submit" class="w-25 btn btn-outline-primary"><i class="fas fa-save"></i> Guardar</button>
            </form>

            <div class="col-md-6 form-group">


            </div>
            <button onclick="history.back()" class="w-25 btn btn-outline-primary">
              Regresar
            </button>
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