@extends('layouts.app')
@section('title')
Asignar Padres
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Asignar Padre o encargado a {{ucwords($alumno->nombre)}} {{ucwords($alumno-> apellido)}}</h5>
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

                                <form method="post" action="{{route('alumno.padre.guardar')}}">
                                    @csrf
                                    <label for="padre">Padre:</label>
                                    <br>
                                    <select required class="form-control w-50 text-center select2" name="padre" id="padre">
                                        <option value="">Seleccione una Opcion</option>
                                        @foreach($padres as $p)

                                        <option value="{{$p->id_padre}}">{{ucwords($p->nombre)}} {{ucwords($p->apellido)}}</option>

                                        @endforeach
                                    </select>
                                    <br>
                                    <label for="rol">Rol:</label>
                                    <select required class="form-control w-50 text-center" name="rol" id="rol">
                                        <option value="">Seleccione una Opcion</option>
                                        <option value="Padre">Padre</option>
                                        <option value="Madre">Madre</option>
                                        <option value="Encargado">Encargado</option>

                                    </select>

                                    <input type="hidden" name="alumno" value="{{$alumno->id_alumno}}">
                                    <br>
                                    <input class="form-control w-50 btn btn-outline-primary mb-1" type="submit" value="Guardar">
                                </form>

                                <button onclick="history.back()" class="w-50 btn btn-outline-primary">
                                    Regresar
                                </button>


                            </div>
                        </div>
                        <hr>
                        <h4>Padres o Encargados</h4>
                        <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">

                            <thead style="background-color:#315d9a;">
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">Rol</th>
                                <th style="color: #fff;">Quitar</th>
                            </thead>

                            <tbody>
                                @foreach($padrexalumno as $pxa)
                                <tr>

                                    <td>{{ucwords($pxa->nombre)}} {{ucwords($pxa->apellido)}}</td>
                                    <td>{{$pxa->rol}}</td>
                                    <td>
                                        <form onsubmit="return DeleteFunction()" method="POST" action="{{ route('alumno.padre.eliminar') }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="alumno" value="{{ $pxa->alumno_id}}">
                                            <input type="hidden" name="padre" value="{{ $pxa->padre_id}}">
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
        if (confirm('¿seguro que desea borrar este encargado?'))
            return true;
        else {
            return false;
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>


@endsection

@endsection