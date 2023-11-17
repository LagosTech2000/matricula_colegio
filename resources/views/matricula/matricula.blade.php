@extends('layouts.app')
@section('title')
MATRICULA
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Alumnos</h5>
    </div>
    {{-------------------------- NOTIFICACIONES INICIO--------------------------------------}}
    @if(Session::has('noti') )
    <div style="max-height: 10.5rem" class="w-50 alert alert-{{Session('color')}} alert-dismissible fade show" role="alert">
        <h5 class="alert-heading fs-3">{{Session('msg')}}</h5>
        <strong class="fs-5">{{Session('noti')}} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    {{-------------------------- NOTIFICACIONES FINAL----------------------------------------}}
    @else
    {{-------------------------- CUSTOM ALERT INICIO----------------------------------------}}
    <!-- HTML para el alert personalizado utilizando Bootstrap -->
    <div id="custom-alert" class="d-none alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" onclick="cerrarAlerta()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class=" fs-3" id="alert-message">Bienvenido a la plataforma de matricula {{$year}}!</p>

    </div>

    {{-------------------------- CUSTOM ALERT FINAL-----------------------------------------}}



    @endif


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
                                <br />
                                <br>
                                <form method="post" action="{{ route('matricula.save') }}" onsubmit="return validarFormulario();">
                                    @csrf
                                    @if(isset($nuevo))
                                    <input type="hidden" name="nuevo" value="{{$nuevo}}">
                                    <h5 for="nombre">Datos del Estudiante</h5>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nombre">Nombres</label>
                                            <input required type="text" class="form-control" name="alumno_nombre" id="nombre" placeholder="Nombres...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="apellido">Apellidos</label>
                                            <input required type="text" class="form-control" name="alumno_apellido" id="apellido" placeholder="Apellidos...">
                                        </div>
                                    </div>

                                    @else

                                    @if($cuenta_alumnos >0)
                                    <h5 for="nombre">Seleccionar Estudiante</h5>
                                    <br>
                                    <div class="form-group">
                                        <label for="alumno">Estudiantes disponibles para matricula</label>
                                        <br>
                                        <select required class="w-25 select2 form-control" name="id_alumno" id="id_alumno">
                                            <option default value="0">Seleccionar</option>
                                            @foreach($alumno as $a)
                                            <option value="{{$a->id_alumno}}">{{$a->nombre}} {{$a->apellido}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @else

                                    <h2>No Hay alumnos Disponibles para matricula!</h2>

                                    @endif

                                    @endif

                                    <hr>
                                    @if(isset($nuevo))

                                    <h5 for="nombre">Datos del Encargado</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="padre_nombre">Nombre:</label>
                                            <input type="text" name="padre_nombre" id="padre_nombre" maxlength="25" required class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_apellido">Apellido:</label>
                                            <input type="text" name="padre_apellido" id="padre_apellido" maxlength="25" required class="form-control">
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="padre_telefono">Teléfono:</label>
                                            <input type="tel" name="padre_telefono" id="padre_telefono" maxlength="8" required class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_correo">Correo:</label>
                                            <input type="email" name="padre_correo" id="padre_correo" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_identidad">Identidad:</label>
                                            <input onblur="validarDni();" type="text" name="padre_identidad" id="padre_identidad" maxlength="13" required class="form-control">
                                            <div id="error_identidad" class="text-danger d-none">
                                                Ya existe un encargado con esa identidad.
                                            </div>
                                        </div>

                                    </div>

                                    @else

                                    <h5 for="nombre">Seleccionar Encargado(a)</h5>
                                    <br>
                                    <div class="form-group">
                                        <label for="alumno">Encargados registrado en el sistema</label>
                                        <br>
                                        <select required class="w-25 select2 form-control" name="id_padre" id="id_padre">
                                            <option default value="0">Seleccionar</option>
                                            @foreach($padres as $p)
                                            <option value="{{$p->id_padre}}">{{$p->nombre}} {{$p->apellido}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    @endif

                                    <label for="rol">Rol:</label>
                                    <select required class="form-control w-50 text-center" name="padre_rol" id="rol">
                                        <option value="">Seleccionar</option>
                                        <option value="Padre">Padre</option>
                                        <option value="Madre">Madre</option>
                                        <option value="Encargado">Encargado</option>

                                    </select>

                                    <hr>
                                    <h5 for="nombre">Grados y Secciones Disponibles Para Matricula</h5>

                                    <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
                                        <thead style="background-color:#315d9a;">

                                            <th class="text-center" style="color: #fff;">Seleccionar</th>
                                            <th class="w-25 text-center" style="color: #fff;">Grado</th>
                                            <th class="text-center" style="color: #fff;">Seccion</th>
                                            <th class="text-center" style="color: #fff;">Docente</th>
                                            <th class="text-center" style="color: #fff;">Cupos disponibles</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($gradoxseccion as $d)
                                            <tr>
                                                <td>
                                                    @if(($d->cupos -$d->cuentacupos)==0)

                                                    <input disabled class="form-check-input btn-outline-primary" type="checkbox" name="id_gradoseccion" value="{{$d->id_gradoseccion}}">
                                                    @else
                                                    <input class="form-check-input btn-outline-primary" type="checkbox" name="id_gradoseccion" value="{{$d->id_gradoseccion}}">
                                                    @endif
                                                </td>
                                                <td>{{$d->nombre}}</td>
                                                <td>{{$d->seccion}}</td>
                                                <td>{{$d->name}}</td>
                                                <td>{{($d->cupos -$d->cuentacupos)}}</td>

                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>

                                    <br>
                                    @if($cuenta_alumnos >0)

                                    <div class="row form-group text-center">
                                        <button id="enviar_matricula" type="submit" class=" pt-3 pb-3 fs-5 btn btn-primary"><i class="fs-5 fas fa-save"></i> Guardar Matrícula</button>


                                    </div>
                                    @endif






                                </form>
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
        // const telefono = document.getElementById("padre_telefono").value;
        // const identidad = document.getElementById("padre_identidad").value;
        const checkboxes = document.querySelectorAll('input[name="id_gradoseccion"]:checked');
        const alumnoSelect = document.getElementById('id_alumno');
        const regex = /^\d+$/;

        if (alumnoSelect.value == "0") {
            // Evita el envío del formulario
            mostrarAlert("Por favor, seleccione un alumno(a).");
            return false;
        }
        // // Verifica si "telefono" no es un número
        // if (!regex.test(telefono) || telefono.length < 8) {
        //     mostrarAlert("El Campo de teléfono debe contener al menos 8 caracteres y ser numérico.");
        //     return false;
        // }

        // // Verifica si "identidad" no es un número
        // if (!regex.test(identidad) || identidad.length < 13) {
        //     mostrarAlert("El campo de identidad no puede superar los 13 caracteres y debe ser numérico.");
        //     return false;
        // }
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
        document.getElementById("custom-alert").classList.remove("d-none");
        document.getElementById("custom-alert").classList.add("d-block");
        document.getElementById("custom-alert").classList.add("bg-danger");
        window.scrollTo(0, 0);
    }

    function cerrarAlerta() {
        document.getElementById("custom-alert").classList.remove("d-block");
        document.getElementById("custom-alert").classList.add("d-none");

    }


    function validarDni() {
        const identidad = document.getElementById("padre_identidad").value;
        const error_identidad = document.getElementById("error_identidad");
        const apiUrl = '/matricula_colegio/matricula_colegio/public/api/papas/identidades?padre_identidad=' + identidad;
        const enviar_matricula = document.getElementById('enviar_matricula');

        if (identidad.length < 13 && identidad.length > 0) {
            error_identidad.innerText = 'La identidad no es valida!'
            error_identidad.classList.remove('d-none');
            enviar_matricula.disabled = true;
        } else {
            fetch(apiUrl)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error('No hubo respuesta del servidor');
                    }
                    return response.json();

                })
                .then((data) => {
                    if (JSON.stringify(data ) >0     ){
                        error_identidad.classList.remove('d-none');
                        error_identidad.innerText = 'El encargado ya ha sido registrado, elegir alguien a alguien mas!';
                        enviar_matricula.disabled = true;
                    } else {
                        error_identidad.classList.add('d-none');
                        enviar_matricula.disabled = false;
                        
                    }
                    
                })
                .catch((error) => {
                    mostrarAlert('Error: ' + error.message);
                });
        }
    }
</script>


@endsection

@endsection