@extends('layouts.app')
@section('title')
Detalle de Seccion
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Detalles de Seccion</h5>
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
                            <h2>{{$grasecyear}} </h2>
                            <hr class="w-25">
                            <h3>Guia de Seccion:</h3>
                            <h3> {{$sec->name}}</h3>

                            <p class="fs-6 font-weight-bold text-primary">{{$sec->cupos}} Cupos Aperturados Para Esta Seccion</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ (100 - ($cuentaa / $sec->cupos) * 100) }}%;" aria-valuenow="{{ $cuentaa }}" aria-valuemin="0" aria-valuemax="{{ $sec->cupos }}">
                                    {{ ( $sec->cupos -$cuentaa ) }} Cupos Libres
                                </div>
                            </div>


                            <br>
                            <button onclick="history.back()" class="btn btn-outline-primary">
                                Regresar
                            </button>

                        </div>
                        <hr>
                        <table class="table table-striped table-bordered table-sm text-center" style="width:100%; border:2px;" id="order_table">
                            <thead style="background-color:#315d9a;">


                                <th class="text-center" style="color: #fff;">Alumno(a)</th>
                                <th class="text-center" style="color: #fff;">Matriculado en</th>
                                @if(auth()->id()!= $sec->id )                              
                                @can('ver-admin')
                                <th class="text-center" style="color: #fff;">Cancelar Matricula</th>
                                @endcan
                                @else
                                <th class="text-center" style="color: #fff;">Cancelar Matricula</th>

                                @endif



                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>

                                    <td>
                                        <form id="alumno_form" action="{{route('detalle.alumno')}}">
                                            @csrf
                                            <input type="hidden" name="id_alumno" value="{{$d->id_alumno}}">

                                            <button type="submit" class="btn btn-outline-primary fas fa-eye"> {{ucwords($d->alumno_nombre)}} {{ucwords($d->apellido)}}</button>
                                        </form>
                                    </td>

                                    <td>
                                        <p>
                                            {{$d->fecha_matricula??''}}
                                        </p>
                                    </td>

                                    @if(auth()->id()!= $sec->id )
                                    @can('ver-admin')
                                    <td>
                                        <form action="">
                                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
                                        </form>
                                    </td>
                                    @endcan                                    
                                    @else
                                    <td>
                                        <form action="">
                                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
                                        </form>
                                    </td>
                                    @endif

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

            autoWidth: true,

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


<script>
    const id_docente = '{{auth()->id()}}'
    const id_guia = '{{$sec->id}}'

    document.addEventListener('DOMContentLoaded', function() {

        if (id_guia != id_docente) {


        } else {



        }
    });
</Script>


@endsection

@endsection