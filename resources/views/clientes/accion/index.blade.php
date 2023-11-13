@extends('layouts.app')
@section('title')
Clientes
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">
  </div>
  <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Clientes</h5>
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
              <h5 class="alert-heading">!Cliente Editado!</h5>
              <strong>{{Session('notiEditado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(Session::has('notiGuardado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">! Cliente Guardado!</h5>
              <strong>{{Session('notiGuardado')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            {{-- inicio --}}

            <ul class="row">
              <li class="media">
                <div class="media-body xs-md-4">
                  <a href="{{ route('accion.create') }}" class="btn btn-primary btn-lg" id="botonGuardar" type="button" style="font-size: 15px "><i style="font-size: 15px" class="fa fa-user-circle" aria-hidden="true"></i> Crear Cliente</a>
                </div>
              </li>
            </ul>


            <table id="clientes" class="table text-center table-striped table-bordered table-sm" style="width:100%">
              <thead style="background-color:#315d9a;">
                <tr>
                  <th style="color: #fff;">Numero Telefonico</th>
                  <th style="color: #fff;">Nombre Del Cliente</th>
                  <th style="color: #fff;">Numero De Contacto</th>
                  <th style="color: #fff;">Numero de Identidad</th>
                  <th style="color: #fff;">Email</th>
                  <th style="color: #fff;">Direccion</th>
                  <th style="color: #fff;">Gps</th>
                  <th style="color: #fff;">Accion</th>
                </tr>
              </thead>
            </table>
            {{-- final --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@section('scripts')
<script>
  $(document).ready(function() {
    $('#input-daterange').datepicker({
      todayBtn: 'linked',
      format: 'yyyy-mm-dd',
      language: 'es',
      autoclose: true
    });

    load_data();
      
    function load_data(from_date = '', to_date = '') {
      $('#clientes').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        processing: true,
        serverSide: true,
        responsive: true,
        select: true,
        dataSrc: "tableData",
        bDestroy: true,
        autoWidth: true,

        ajax: {
          url: '{{ route("accion.index") }}',
          data: {
            from_date: from_date,
            to_date: to_date
          }
        },
        columns: [{
            data: 'numerotelefonico',
            name: 'numerotelefonico'
          },
          {
            data: 'nombre',
            name: 'nombre'
          },
          {
            data: 'numerodecontacto',
            name: 'numerodecontacto'
          },

          {
            data: 'numerodeidentidad',
            name: 'numerodeidentidad'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'direccion',
            name: 'direccion'
          },
          {
            data: 'gps',
            name: 'gps'
          },
          {
            data: 'action',
            name: 'action'
          },
        ],
      });
    }

    $('#filter').click(function() {
      var from_date = $('#from_date').val();
      var to_date = $('#to_date').val();
      if (from_date != '' && to_date != '') {
        $('#order_table').DataTable().destroy();
        load_data(from_date, to_date);
      } else {
        alert('Both Date is required');
      }
    });

    $('#refresh').click(function() {
      $('#from_date').val('');
      $('#to_date').val('');
      $('#order_table').DataTable().destroy();
      load_data();
    });

  });
</script>
@endsection
@endsection