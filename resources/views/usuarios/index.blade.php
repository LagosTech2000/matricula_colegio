@extends('layouts.app')
@section('title')
Maestros
@endsection
@section('content')
<section class="section">
  <div class="section-header" style="max-height: 3rem;">
    <h5 class="page__heading">Maestros:</h5>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            @if(Session::has('notiUsuario') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Guardado!</h5>
              <strong>{{Session('notiUsuario')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            @if(Session::has('notiEditado') )
            <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">!Editado!</h5>
              <strong>{{Session('notiEditado')}} </strong>
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
            {{-- aqui ira todo el contenido --}}
            {{-- <h3 class="text-center">Dashboard Content</h3> --}}

            <ul class="list-unstyled">
              <li class="media">

                <div class="media-body">
                  {{-- <a class="btn btn-primary" href="{{ route('usuarios.create') }}">nuevo</a> --}}
                  <a href="{{ route('usuarios.create') }}" class="btn btn-primary" id="botonCancelar" type="button" style="font-size: 12px"><i style="font-size: 15px" class="fa fa-user-circle" aria-hidden="true"></i> Crear Maestro</a>
                  {{-- <p>creacion de nuevos usuarios</p> --}}
                </div>
              </li>
            </ul>

            {{-- Tabla de usuarios --}}
            <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
              <thead style="background-color:#315d9a;">

                <th class="text-center" style="color: #fff;">Nombre</th>
              <th class="text-center" style="color: #fff ">Correo</th>                
                <th class="text-center" style="color: #fff;">Accion</th>

              </thead>
              <tbody>
                @foreach ($usuarios as $usuario)
                @if($usuario->email!='admin@admin.com')
                <tr>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->email}}</td>
                  {{-- codigo de la documentacion de spatie --}}
                
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit', $usuario->id)}}"><i class="fas fa-edit"></i></a>
                   
                    {{-- laravel Collective  --}}
                    {!! Form::open(['method'=>'DELETE','route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                    {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => 'return DeleteFunction()']) !!}

                    {!! Form::close() !!}

                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
            {{-- esto es para la paginacion --}}
            <div class="pagination justify-content-end">
              {!! $usuarios->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@section('scripts')

<script>
  function DeleteFunction() {
    if (confirm('¿seguro que deseas borrar este usuario?'))
      return true;
    else {
      return false;
    }
  }
</script>




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