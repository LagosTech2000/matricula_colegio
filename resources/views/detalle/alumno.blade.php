@extends('layouts.app')
@section('title')
ALUMNOS
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Detalles de Estudiantes</h5>
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
                                <div class="d-flex justify-content-center form-group md-col-6">
                                    <label class="fs-6" for="alumno">Estudiantes</label>
                                </div>

                                <div class="md-col-6 mb-3">

                                    <form class="d-flex justify-content-center" id="myForm" action="{{route('detalle.alumno')}}">
                                        @csrf
                                        <select required class="w-50 select2 form-control" name="id_alumno" id="id_alumno">
                                            <option default value="0">Elija una opción</option>
                                            @foreach($alumno as $a)
                                            <option value="{{$a->id_alumno}}"> {{ucwords($a->nombre)}} {{ucwords($a->apellido)}}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input class="form-control btn btn-outline-primary" type="submit" value="Buscar"> -->
                                    </form>
                                </div>
                                <br>
                                <br>
                                <div class="d-flex justify-content-center">

                                    <button onclick="history.back()" class="w-50 btn btn-outline-primary">
                                        Regresar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @if(isset($alm))
                        <div class="container w-100 d-flex justify-content-center align-items-center">
                            <div class="d-flex w-75 justify-content-center align-items-center card text-center text-white bg-primary mb-3">
                                <p class="fs-6 card-header text-center fonnt-weight-bold">Detalles del Alumno
                                <p>
                                <div class="card-body w- text-center">
                                    <p class="fs-6 text-center font-weight-bold card-title">{{ ucwords($alm->nombre) }} {{ ucwords($alm->apellido) }}

                                        @if($alm->matriculado==1)
                                        <span class="badge badge-primary border rounded-5">Matriculado(a)</span>

                                        @else
                                        <span class="badge badge-primary border rounded-5">No matriculado(a)</span>

                                        @endif
                                    </p>

                                    <p class="fs-6 text-center card-title"> <i class="fas fa-map-marker-alt"></i> {{ ucwords($alm->direccion) }}</p>
                                    <p class="fs-6 text-center card-title"> <i class="fas fa-phone-alt"></i> {{ ucwords($alm->telefono) }}</p>


                                    <p class="card-text">ID de Alumno: {{ $alm->id_alumno }}</p>

                                    <div class="border border pt-2 rounded">
                                        @if(count($dm)>0)
                                        <p class="text-center fs-6 font-weight-bold">Registros de Matrículas</p>
                                        @foreach($dm as $d)
                                        <hr>

                                        <form action="{{route('detalle.seccion')}}">
                                            <input type="hidden" name="id_detallematriculas" value="{{$d->id_detallematriculas}}">
                                            <button name="grasecyear" value="{{ucfirst($d->grado_nombre)}} {{$d->seccion}} {{$d->year}}" type="submit" class="btn btn-outline-primary fs-5 fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="Ver alumnos matriculados en esta seccion.">

                                                <p class="fs-6 font-weight-bold text-white text-center card-title">{{ucfirst($d->grado_nombre)}} {{$d->seccion}} {{$d->year}}
                                                    @if($d->activa==1)
                                                    <span class="badge font-weight-bold badge-primary border rounded-5">Activa</span>
                                                    @endif
                                                </p>
                                            </button>
                                        </form>

                                        @endforeach
                                        @else
                                        <p class="text-center card-title fs-6">No tiene registros de matrículas</p>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="border border pt-2 rounded">
                                        @if(count($pa)>0)
                                        <p class="text-center fs-6">Personas a Cargo</p>
                                        @foreach($pa as $p)
                                        <hr>
                                        <p class="fs-6 text-center card-title">{{ucwords($p->nombre)}} {{ucwords($p->apellido)}}
                                            <span class="badge badge-primary border rounded-5">{{$p->rol}}</span>
                                        </p>
                                        @endforeach
                                        @else
                                        <p class="fs-6 text-center">No hay Personas a Cargo</p>
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