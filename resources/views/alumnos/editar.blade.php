@extends('layouts.app')
@section('title')
GRADOS
@endsection
@section('content')
<section class="section">
    <div class="section-header" style="max-height: 3rem;">
        <h5 class="page__heading">Grados</h5>
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
                                <form method="post" action="{{ route('alumno.editar') }}">
                                    @csrf
                                    <h4 for="nombre">Editar Estudiante</h4>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-5 form-group">
                                            <label for="nombre">Nombres</label>
                                            <input required type="text" class="w-50 form-control" value="{{$data->nombre}}" name="nombre" id="nombre" placeholder="Nombres...">
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="apellido">Apellidos</label>
                                            <input required type="text" class="w-50 form-control" name="apellido" value="{{$data->apellido}}" id="apellido" placeholder="Apellidos...">
                                        </div>

                                        <div class="col-md-5 form-group">
                                            <label for="direccion">Direccion</label>
                                            <textarea class="w-75 form-control" name="direccion" id="direccion" cols="30" rows="10">{{$data->direccion}}</textarea>

                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="telefono">Telefono(opcional)</label>
                                            <input type="tel" class="w-50 form-control" name="telefono" value="{{$data->telefono}}" id="telefono" placeholder="Telefono">
                                        </div>

                                    </div>

                                    <input type="hidden" name="id_alumno" value="{{$data->id_alumno}}">

                                    <div class="col-md-6 form-group">
                                        <button type="submit" class="w-50 btn btn-outline-primary"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                    
                                   

                                </form>

                                <div class="col-md-6 form-group">

                                    <button onclick="history.back()" class="w-50 btn btn-outline-primary">
                                        Regresar
                                    </button>
                                </div>

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
@endsection

@endsection