@extends('layouts.app')
@section('title')
Matriculas
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Matriculas</h5>
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
                                <button onclick="history.back()" class="btn btn-outline-primary">
                                    Regresar
                                </button>
                                <br>
                                <br>
                                <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
                                    <thead style="background-color:#315d9a;">

                                        <th class="text-center" style="color: #fff;">Codigo de Matricula</th>
                                        <th class="text-center" style="color: #fff;">Alumno(a)</th>
                                        <th class="text-center" style="color: #fff;">Grado, Seccion y Año</th>
                                        <th class="text-center" style="color: #fff;">Matriculado Por</th>
                                        <th class="text-center" style="color: #fff;">Estado</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($detallematriculas as $d)
                                        <tr>
                                            <td>{{$d->id_detallematriculas.$d->year }}</td>

                                            <td>
                                                <form id="alumno_form" action="{{route('detalle.alumno')}}">
                                                    @csrf
                                                    <input type="hidden" name="id_alumno" value="{{$d->id_alumno}}">


                                                    <button type="submit" class="btn btn-outline-primary fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="Ver Detalle de alumno."> {{ucwords($d->alumno_nombre)}} {{ucwords($d->apellido)}}</button>
                                                </form>
                                            </td>

                                            <td>

                                                <form action="{{route('detalle.seccion')}}">
                                                    <input type="hidden" name="id_alumno" value="{{$d->id_alumno}}">
                                                    <input type="hidden" name="id_detallematriculas" value="{{$d->id_detallematriculas}}">
                                                    <button name="grasecyear" value="{{ucfirst($d->grado_nombre)}} {{$d->seccion}} {{$d->year}}" type="submit" class="btn btn-outline-primary fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="Ver alumnos matriculados en esta seccion.">

                                                        {{ucfirst($d->grado_nombre)}} {{$d->seccion}} {{$d->year}}

                                                    </button>

                                                </form>
                                            </td>
                                            <td>{{$d->name}}</td>
                                            @if($d->activa==1)
                                            <td>Activa</td>
                                            @else
                                            <td>Inactiva</td>
                                            @endif

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <hr>

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
    $(document).ready(function() {
        $('input[type="checkbox"]').click(function() {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').not(this).prop('checked', false);
            }
        });
    });

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


    // Función para mostrar el alert personalizado
    function mostrarAlert(message) {
        document.getElementById("alert-message").innerText = message;
        document.getElementById("custom-alert").classList.add("d-block");
        document.getElementById("custom-alert").classList.add("bg-danger");
        window.scrollTo(0, 0);
    }


    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>




@endsection

@endsection