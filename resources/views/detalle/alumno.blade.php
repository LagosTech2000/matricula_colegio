@extends('layouts.app')
@section('title')
ALUMNOS
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Detalles de Alumnos</h5>
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
                            <div class="container row">
                                <div class="form-group md-col-6">
                                    <label for="alumno">Alumno(a)</label>
                                    <form id="myForm" action="{{route('detalle.alumno')}}">
                                        @csrf
                                        <select required class="select2 form-control" name="id_alumno" id="id_alumno">
                                            <option default value="0">Elija una opción</option>
                                            @foreach($alumno as $a)
                                            <option value="{{$a->id_alumno}}">{{$a->nombre}} {{$a->apellido}}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input class="form-control btn btn-outline-primary" type="submit" value="Buscar"> -->
                                    </form>
                                    <br>
                                    <button onclick="history.back()" class="btn btn-outline-primary">
                                        Regresar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @if(isset($alm))
                        <div class="container d-flex justify-content-center align-items-center">
                            <div class="w-75 pl-5 card text-center text-white bg-primary mb-3">
                                <div class="card-header fs-4 w-75 text-center">Detalles del Alumno</div>
                                <div class="card-body w-75 text-center">
                                    <h5 class="text-center card-title">Nombre: {{ $alm->nombre }} {{ $alm->apellido }}

                                    @if($alm->matriculado==1)
                                    <span class="badge badge-primary border rounded-5">Matriculado(a)</span>

                                    @else
                                    <span class="badge badge-primary border rounded-5">No matriculado(a)</span>

                                    @endif
                                    </h5>
                                    <h6 class="card-text">ID de Alumno: {{ $alm->id_alumno }}</h6>
                                   
                                    <div class="border border pt-2 rounded">
                                        @if(count($dm)>0)
                                        <h5 class="text-center">Registros de Matrículas</h5>
                                        @foreach($dm as $d)
                                        <hr>
                                        
                                           
                                        </h5>

                                        <form action="{{route('detalle.seccion')}}">                                                    
                                                    <input type="hidden" name="id_detallematriculas" value="{{$d->id_detallematriculas}}">
                                                    <button name="grasecyear" value="{{ucfirst($d->grado_nombre)}} {{$d->seccion}} {{$d->year}}" type="submit" class="btn btn-outline-primary fs-5 fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="Ver alumnos matriculados en esta seccion.">

                                                    <h5 class="text-white text-center card-title">{{$d->grado_nombre}} {{$d->seccion}} {{$d->year}}

                                                    </button>
                                                    @if($d->activa==1)
                                            <span class="badge badge-primary border rounded-5">Activa</span>
                                            @endif
                                                </form>
                                        <br>
                                        @endforeach
                                        @else
                                        <h5 class="text-center card-title">No tiene registros de matrículas</h5>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="border border pt-2 rounded">
                                        @if(count($pa)>0)
                                        <h5 class="text-center">Personas a Cargo</h5>
                                        @foreach($pa as $p)
                                        <hr>
                                        <h5 class="text-center card-title">{{$p->nombre}} {{$p->apellido}}
                                            <span class="badge badge-primary border rounded-5">{{$p->rol}}</span>
                                        </h5>
                                        @endforeach
                                        @else
                                        <h5 class="text-center">No hay Personas a Cargo</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

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

<script>
    function validarFormulario() {
        const telefono = document.getElementById("padre_telefono").value;
        const identidad = document.getElementById("padre_identidad").value;
        const checkboxes = document.querySelectorAll('input[name="id_gradoseccion"]:checked');
        const alumnoSelect = document.getElementById('alumno');

        if (alumnoSelect.value == "0") {
            event.preventDefault(); // Evita el envío del formulario
            mostrarAlert("Por favor, seleccione un alumno(a).");
        }
        // Verifica si "telefono" no es un número
        if (isNaN(telefono) && telefono.length == 8) {
            mostrarAlert("El Campo de teléfono debe contener al menos 8 caracteres y ser numérico.");
            return false;
        }

        // Verifica si "identidad" no es un número
        if (isNaN(identidad) && identidad.length == 13) {
            mostrarAlert("El campo de identidad no puede superar los 13 caracteres y debe ser numérico.");
            return false;
        }
        // Verifica si el checkbox está marcado
        if (checkboxes.length === 0) {
            mostrarAlert("Debe Elegir un Grado y Seccion.");
            return false;
        }



        return true;
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const select = $('#id_alumno'); // Use jQuery to select the element with Select2

        select.on('change', function() {
            // Get the selected value using Select2's .val() method
            const selectedValue = select.val();

            // If you want to submit the form using jQuery, you can do it like this
            $('#myForm').submit();

            // Alternatively, if you prefer to use plain JavaScript to submit the form
            // document.getElementById('myForm').submit();
        });
    });
</script>


@endsection

@endsection