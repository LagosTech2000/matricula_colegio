@extends('layouts.app')
@section('title')
ALUMNOS
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Alumnos</h5>
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
                                <form method="post" action="{{ route('alumno.guardar') }}">
                                    @csrf
                                    <h4 for="nombre">Nuevo Estudiante</h4>
                                    <br>
                                    <div class="row">
                                      
                                        <div class="col-md-5 form-group">
                                            <label for="nombre">Nombres</label>
                                            <input required type="text" class="w-50 form-control" name="nombre" id="nombre" placeholder="Nombres...">
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="apellido">Apellidos</label>
                                            <input required type="text" class="w-50 form-control" name="apellido" id="apellido" placeholder="Apellidos...">
                                        </div>

                                        <div class="col-md-5 form-group">
                                            <label for="direccion">Direccion</label>
                                            <textarea class="w-50 form-control" required ="direccion" name="direccion" id="direccion" cols="3" rows="5"></textarea>

                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="telefono">Telefono</label>
                                            <input required type="tel" class="w-50 form-control" name="telefono" id="telefono" placeholder="Telefono">
                                        </div>
                                        
                                    </div>

                                    

                                    <div class="row form-group">
                                        <button type="submit" class="w-50 btn btn-outline-primary"><i class="fas fa-save"></i> Guardar</button>

                                    </div>

                                    
                                </form>

                              
                                    
                            </div>
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
                            <thead style="background-color:#315d9a;">

                                <th class="w-50 text-center" style="color: #fff;">Estudiante</th>
                                <th class="text-center" style="color: #fff;">Direccion</th>
                                <th class="text-center" style="color: #fff;">Telefono</th>
                                <th class="text-center" style="color: #fff;">Estado</th>
                                <th class="text-center" style="color: #fff;">Editar</th>
                                <th class="text-center" style="color: #fff;">Asignar Padre</th>
                                <th class="text-center" style="color: #fff;">Eliminar</th>

                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$d->nombre}} {{$d->apellido}} </td>
                                    <td>{{$d->direccion}} </td>
                                    <td>{{$d->telefono}} </td>

                                    @if ($d->matriculado == 1)
                                    <td>Matriculado</td>
                                    @else
                                    <td>No Matriculado</td>
                                    @endif

                                    <td>
                                        <form method="GET" action="{{ route('alumno.edit') }}">
                                            @csrf
                                            <input type="hidden" name="id_alumno" value="{{ $d->id_alumno }}">
                                            <input type="hidden" name="nombre" value="{{ $d->nombre }}">
                                            <input type="hidden" name="apellido" value="{{ $d->apellido }}">
                                            <input type="hidden" name="direccion" value="{{ $d->direccion }}">
                                            <input type="hidden" name="telefono" value="{{ $d->telefono }}">
                                            <button class="btn btn-primary px-1 py-1 rounded fas fa-edit" type="submit">

                                        </form>

                                    </td>

                                    <td>
                                        <form method="GET" action="{{ route('alumno.padre') }}">
                                            @csrf
                                            <input type="hidden" name="id_alumno" value="{{ $d->id_alumno }}">
                                            <input type="hidden" name="nombre" value="{{ $d->nombre }}">
                                            <input type="hidden" name="apellido" value="{{ $d->apellido }}">
                                            <button class="btn btn-primary px-1 py-1 rounded fas fa-user-friends" type="submit">

                                        </form>

                                    </td>

                                    <td>
                                        <form method="POST"  onsubmit="return DeleteFunction()"  action="{{ route('alumno.eliminar') }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id_alumno" value="{{ $d->id_alumno}}">
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


    function DeleteFunction() {
    if (confirm('¿seguro que deseas borrar este estudiante?'))
      return true;
    else {
      return false;
    }
  }

</script>
Í
@endsection

@endsection