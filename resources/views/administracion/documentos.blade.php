@extends('layouts.app')
@section('title')
Documentos
@endsection
@section('content')
<div class="container ">
    <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Documentos Entregados</h5>


    <div class="card-body d-flex text-center">
        <div class="col">
            <p class="row-3">Numero de Archivo: {{$data['numerodearchivo']}}</p>
            <p class="row-3">Numero de Gaveta: {{$data['gavetadearchivo']}}</p>
            <p class="row-3">Numero de Telefono: {{$data['numerotelefonico']}}</p>
        </div>
        <div class="col">
            <p class="row-3">Cliente: {{$data['nombre']}}</p>
            <p class="row-3">Numero De Contacto: {{$data['numerodecontacto']}}</p>
            <p class="row-3">Servicio: {{$data['tipodeservicio']}}</p>


        </div>

    </div>
    <p class="text-center">Direccion : {{$data['direccion']}}</p>


    <div class="card-body text-center">
        <form target="_blank" action="{{route('ver-expediente-pdf') }}" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{$data['id']}}">
        <button type="submit" class="btn btn-info btn-lg" >
            <i class="fa fa-book">&nbsp;</i> PDF
       </button>

       </form>
    </div>
    <div class=" row justify-content-center text-center">

        <div class="col-14">
            <div class="card m-4"></div>
            <div class="card-header">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            @if($data['tipodeservicio']=="COMERCIAL")
                            <div table-responsive>
                                <form action="{{route('ver-expediente')}}" method="POST">
                                    @csrf
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Documento</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Contrato para la prestación de servicios</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['prestacion_servicios'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox200" name="prestacion_servicios" value="$data['prestacion_servicios']">
                                                        <label class="custom-control-label" for="checkbox200">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Foto identidad de representante legal
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['foto_representante_legal'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox20" name="foto_representante_legal" value="$data['foto_representante_legal']">
                                                        <label class="custom-control-label" for="checkbox20">Completado</label>
                                                    </div>

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>RTN Comercial</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['rtn_comercial'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox3" name="rtn_comercial" value="$data['rtn_comercial']">
                                                        <label class="custom-control-label" for="checkbox3">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Copia De Permiso de Operación Alcaldía</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['permiso_operacion'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox4" name="permiso_operacion" value="$data['permiso_operacion']">
                                                        <label class="custom-control-label" for="checkbox4">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Copia de Escritura de Empresa</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['escritura_empresa'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox5" name="escritura_empresa" value="$data['escritura_empresa']">
                                                        <label class="custom-control-label" for="checkbox5">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Constancia de Gerente</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['constancia_gerente'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox6" name="constancia_gerente" value="$data['constancia_gerente']">
                                                        <label class="custom-control-label" for="checkbox6">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Averias</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['averias'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox7" name="averias" value="$data['averias']">
                                                        <label class="custom-control-label" for="checkbox7">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Traslado</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['traslado'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox8" name="traslado" value="$data['traslado']">
                                                        <label class="custom-control-label" for="checkbox8">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>BLOQUEOS</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['bloqueo'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox9" name="bloqueo" value="$data['bloqueo']">
                                                        <label class="custom-control-label" for="checkbox9">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Requerimiento De Cobro</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['requerimiento_cobro'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox10" name="requerimiento_cobro" value="$data['requerimiento_cobro']">
                                                        <label class="custom-control-label" for="checkbox10">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                    <input type="hidden" name="id" value="{{$data['id']}}">
                                    <input name="enviarDocsComercial" class="btn btn-info btn-lg" type="submit" value="guardar"/>
                                </form>
                            </div>
                            @else



                            <div table-responsive>
                                <form action="{{route('ver-expediente')}}" method="POST">
                                    @csrf
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Documento</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Contrato para la prestación de servicios</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['prestacion_servicios'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="prestacion_servicios" value="$data['prestacion_servicios']">
                                                        <label class="custom-control-label" for="checkbox1">Completado</label>

                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Foto identidad de Cliente
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['foto_representante_legal'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox2" name="foto_representante_legal" value="$data['foto_representante_legal']">
                                                        <label class="custom-control-label" for="checkbox2">Completado</label>
                                                    </div>

                                                </td>

                                            </tr>



                                            <tr>
                                                <td>Averias</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['averias'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox3" name="averias" value="$data['averias']">
                                                        <label class="custom-control-label" for="checkbox3">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Traslado</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['traslado'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox4" name="traslado" value="$data['traslado']">
                                                        <label class="custom-control-label" for="checkbox4">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>BLOQUEOS</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['bloqueo'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox5" name="bloqueo" value="$data['bloqueo']">
                                                        <label class="custom-control-label" for="checkbox5">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Requerimiento De Cobro</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['requerimiento_cobro'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox6" name="requerimiento_cobro" value="$data['requerimiento_cobro']">
                                                        <label class="custom-control-label" for="checkbox6">Completado</label>


                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>TerceraEdad</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['tercera_edad'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox7" name="tercera_edad" value="$data['tercera_edad']">
                                                        <label class="custom-control-label" for="checkbox7">Completado</label>
                                                    </div>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                    <input type="hidden" name="id" value="{{$data['id']}}">                                    
                                    <input name="enviarDocsResidencial" class="btn btn-info btn-lg" type="submit" value="Guardar" />
                                </form>
                            </div>
                            @endif

                        </div>


                    </div>
                </div>
            </div>

        </div><br><br>
    </div>
</div>
</form>
</section>
@section('scripts')
<script>
    // Obtener todos los elementos con la clase "custom-control-input"
    document.addEventListener("DOMContentLoaded",function(){

    var checkboxes = document.querySelectorAll(".my-checkbox");

        // Iterar sobre los elementos y agregar un manejador de eventos "change"
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener("change", function() {
                // Obtener el valor actual del checkbox
                var isChecked = this.checked;
                // Establecer el valor correspondiente en el atributo "value"
                this.value = isChecked ? "1" : "0";
                // alert("Se Cambio el value")
            });
        });
    });
    
</script>

<script type="text/javascript" src="JS/jquery-1.7.2.min.js"></script>
<script>
    $(document).ready(main());

    function main() {}
    // es para desabilitar al hacer submit una sola vez
    $('#form').one('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled', 'disabled');
    });
</script>
@endsection
@endsection