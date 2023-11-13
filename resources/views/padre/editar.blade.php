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
                                <form onsubmit="return validarFormulario();" method="post" action="{{ route('padres.editar') }}">
                                    @csrf
                                    <h4 for="nombre">Nuevo Encargado(a)</h4>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="padre_nombre">Nombre:</label>
                                            <input value="{{$data->padre_nombre}}" type="text" name="padre_nombre" id="padre_nombre" maxlength="25"  class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_apellido">Apellido:</label>
                                            <input value="{{$data->padre_apellido}}" type="text" name="padre_apellido" id="padre_apellido" maxlength="25" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="padre_telefono">Teléfono:</label>
                                            <input value="{{$data->padre_telefono}}" type="tel" name="padre_telefono" id="padre_telefono" maxlength="8"  class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_correo">Correo (Opcional):</label>
                                            <input value="{{$data->padre_correo}}" type="email" name="padre_correo" id="padre_correo" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="padre_identidad">Identidad:</label>
                                            <input value="{{$data->padre_identidad}}" type="text" name="padre_identidad" id="padre_identidad" maxlength="13"  class="form-control">
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <input type="hidden" name="id_padre" value="{{$data->id_padre}}">
                                        <button type="submit" class="w-50 btn btn-primary"><i class="fas fa-save"></i> Guardar</button>

                                    </div>
                                </form>
                                
                            </div>
                        </div>
                     
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

    function validarFormulario() {

const telefono = document.getElementById("padre_telefono").value;
const identidad = document.getElementById("padre_identidad").value;
const regex = /^\d+$/;
    // Verifica si "telefono" no es un número
if (!regex.test(telefono) || telefono.length < 8) {
    mostrarAlert("El Campo de teléfono debe contener 8 caracteres y ser numérico.");
    return false;
}
// Verifica si "identidad" no es un número
if (!regex.test(identidad) || identidad.length < 13) {
    mostrarAlert("El campo de identidad debe contener 13 caracteres y debe ser numérico.");
    return false;
}

return true

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

</script>


@endsection

@endsection