@extends('layouts.app')
@section('title')
ALUMNOS
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Encargados</h5>
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
        <p class="fs-3" id="alert-message">Bienvenido a la plataforma de matricula!</p>
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
                                <form onsubmit="return validarFormulario();" method="post" action="{{ route('padres.save') }}">
                                    @csrf
                                    <h4 for="nombre">Nuevo Encargado(a)</h4>
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

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="padre_telefono">Teléfono:</label>
                                            <input type="tel" name="padre_telefono" id="padre_telefono" maxlength="8" required class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_correo">Correo (Opcional):</label>
                                            <input type="email" name="padre_correo" id="padre_correo" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_identidad">Identidad:</label>
                                            <input type="text" name="padre_identidad" id="padre_identidad" maxlength="13" required class="form-control">
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <button type="submit" class="w-50 btn btn-outline-primary"><i class="fas fa-save"></i> Guardar</button>

                                    </div>
                                </form>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="order_table">
                            <thead style="background-color:#315d9a;">

                                <th class="w-50 text-center" style="color: #fff;">Encargado</th>
                                <th class="text-center" style="color: #fff;">Dni</th>
                                <th class="text-center" style="color: #fff;">Telefono</th>
                                <th class="text-center" style="color: #fff;">Correo</th>
                                <th class="text-center" style="color: #fff;">Editar</th>
                                <th class="text-center" style="color: #fff;">Eliminar</th>

                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$d->nombre}} {{$d->apellido}} </td>
                                    <td>{{$d->identidad}} </td>
                                    <td>{{$d->telefono}} </td>
                                    <td>{{$d->correo}}</td>

                                    <td>
                                        <form method="GET" action="{{ route('padres.edit') }}">
                                            @csrf
                                            <input type="hidden" name="id_padre" value="{{ $d->id_padre }}">
                                            <input type="hidden" name="padre_nombre" value="{{ $d->nombre }}">
                                            <input type="hidden" name="padre_apellido" value="{{ $d->apellido }}">
                                            <input type="hidden" name="padre_identidad" value="{{ $d->identidad }}">
                                            <input type="hidden" name="padre_telefono" value="{{ $d->telefono }}">
                                            <input type="hidden" name="padre_correo" value="{{ $d->correo }}">
                                            <button class="btn btn-primary px-1 py-1 rounded fas fa-edit" type="submit">

                                        </form>

                                    </td>


                                    <td>
                                        <form method="POST" onsubmit="return DeleteFunction()" action="{{ route('padres.eliminar') }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id_padre" value="{{ $d->id_padre}}">
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
</script>

<script>
    function validarFormulario() {
        const telefono = document.getElementById("padre_telefono").value;
        const identidad = document.getElementById("padre_identidad").value;
        const nombre = document.getElementById("padre_nombre").value;
        const apellido = document.getElementById("padre_apellido").value;

        const regex = /^\d+$/;
            // Verifica si "telefono" no es un número
        if (!regex.test(telefono) || telefono.length < 8) {
            mostrarAlert("El Campo de teléfono debe contener al menos 8 caracteres y ser numérico.");
            return false;
        }

        // Verifica si "identidad" no es un número
        if (!regex.test(identidad) || identidad.length < 13) {
            mostrarAlert("El campo de identidad no puede superar los 13 caracteres y debe ser numérico.");
            return false;
        }

        if(strlength(nombre)<5 || strlen(apellido)<5 ){
            mostrarAlert("Debe ingresar nombres y apellidos validos.");
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

    function cerrarAlerta(){
        document.getElementById("custom-alert").classList.remove("d-block");
        document.getElementById("custom-alert").classList.add("d-none");

    }


    function DeleteFunction() {
    if (confirm('¿seguro que deseas borrar este encargado?'))
      return true;
    else {
      return false;
    }
  }
</script>
Í
@endsection

@endsection