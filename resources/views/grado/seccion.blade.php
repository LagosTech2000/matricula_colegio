@extends('layouts.app')
@section('title')
GRADOS
@endsection
@section('content')
<section class="section">
  <div class="section-header" style="max-height: 3rem;">
    <h5 class="page__heading">Asignar Seccion a grado</h5>
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


            <form method="POST" action="{{ route('grado.seccion.save') }}">
              @csrf
             <div class="form-group">

               <input  type="hidden" name="id_grado" value="{{$id_grado}}">
               
               <label for="seccion">Sección:</label>
               <select class="form-control w-25" required name="seccion" id="seccion">
                 
                 <option value="A">A</option>
                 <option value="B">B</option>
                 <option value="C">C</option>
                </select>
                <br>
                <label for="cupos">Cupos</label>
                <input required id="cupos" class="w-25 form-control" type="number" name="cupos">
                <br>
               
                <label >Docente</label>
                <br>
                <select required name="docente" class="form-control w-25 select2" name="docente" >
                  <option value="">Elija una opcion</option>
                @foreach($docentes as $d)
                @if($d->email!="admin@admin.com")
                <option value="{{$d->id}}">{{$d->name}}</option>
                @endif
                @endforeach
              </select>
                
               <br>
              <br>
              <button class="ms-3 btn w-25 form-control btn-primary rounded px-3 py-1" type="submit">Asignar</button>
            </div>
            </form>
            <hr>




            <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
              <thead style="background-color:#315d9a;">

                <th class="w-50 text-center" style="color: #fff;">Grado</th>
                <th class="text-center" style="color: #fff;">Seccion</th>
                <th class="text-center" style="color: #fff;">Docente</th>
                <th class="text-center" style="color: #fff;">Cupos</th>
                <th class="text-center" style="color: #fff;">Quitar</th>
              </thead>
              <tbody>
                @foreach ($data as $d)
                <tr>

                  <td>{{$d->nombre}}</td>
                  <td>{{$d->seccion}}</td>
                  <td>{{$d->name}}</td>
                  <td>{{$d->cupos}}</td>
                  <td>
                    <form method="POST" action="{{ route('grado.seccion.eliminar') }}">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="id_grado" value="{{ $d->grado_id_grado }}">
                      <input type="hidden" name="seccion" value="{{ $d->seccion }}">
                      <button class="btn btn-primary px-1 py-1 rounded fas fa-trash" type="submit"></button>
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

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@endsection

@endsection