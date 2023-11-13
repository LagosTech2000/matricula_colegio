<!DOCTYPE html>

<html>

<head>
    <title>Resumen Expedientes</title>
</head>
<style>
    body {
        font-weight: bolder;
        text-align: center;
        align-content: center;
    }

    table {
        text-align: center;
        margin: auto;
        margin-bottom: 1cm;
        border-collapse: collapse;
        font-size:12px;

    }

    input {
        background-color: #102542;
        color:white;
        font-weight: bolder;
        border-radius: 0%;
        margin-right: 2px;
        width: 25px;

    }

    th{
        background-color: #102542;
        font-weight: bolder;
        font-size: 15px;
        color: white;
        width: 2.5cm;


    }

    .doc{
        width: 15cm;
    }

    .doc th,td{
        border: 1px solid black;

    }

    th,
    td {
        margin: auto;
        height: 1cm;
        padding-right: 5px;
        padding-left: 5px;

    }

    img{
        width: 70;
        height: 70;
        float: center;

    }

    #img1{
        

    }

    #img2{
        padding-left: 1.1cm;
        border-left:2px solid #102542;
        float: right;

    }

    #horaimpresa{
        position: fixed;
        bottom: 0;
        
    }
   
</style>

<header style="width: 40%;margin-left:30%;">
    

        <img id="img1" src="{{ ('img/hondu.jpg') }}" >
        
        
        <img id="img2" src="{{ ('img/gob.jpg') }}" >
    
       
</header>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center">
      <br>    
      <br>
      
     
      <table class="nob table table-striped table-hover">
            <thead>
                <tr>
                    <th style="border:0px solid black;">Numero de Archivo</th>
                    <th style="border:0px solid black;">Numero de Gaveta</th>
                    <th style="border:0px solid black;">Numero Asignado</th>
                    <th style="border:0px solid black;">Cliente</th>
                    <th style="border:0px solid black;">Numero De Contacto</th>
                    <th style="border:0px solid black;">Servicio</th>
                    <th style="border:0px solid black;">Direccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:0px solid black;">{{$data['numerodearchivo']}}</td>
                    <td style="border:0px solid black;">{{$data['gavetadearchivo']}}</td>
                    <td style="border:0px solid black;">{{$data['numerotelefonico']}}</td>
                    <td style="border:0px solid black;">{{$data['nombre']}}</td>
                    <td style="border:0px solid black;">{{$data['numerodecontacto']}}</td>
                    <td style="border:0px solid black;">{{$data['tipodeservicio']}}</td>
                    <td style="border:0px solid black;">{{$data['direccion']}}</td>
                </tr>
            </tbody>
        </table>

    <h2>Documentos Entregados</h2>
        <div class="row justify-content-center text-center">

            <div class="col-14">
                <div class="card m-4"></div>
                <div class="card-header">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                @if($data['tipodeservicio']=="RESIDENCIAL")
                                <div table-responsive>
                                    @csrf

                                    <table class="doc table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Contrato para la prestación de servicios</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['prestacion_servicios'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="prestacion_servicios" value="0">

                                                    </div>


                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Foto identidad de representante de Cliente
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['foto_representante_legal'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="foto_representante_legal" value="0">
                                                    </div>

                                                </td>

                                            </tr>







                                            <tr>
                                                <td>Averias</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['averias'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="averias" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Traslado</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['traslado'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="traslado" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>BLOQUEOS</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['bloqueo'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="bloqueo" value="0">

                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Requerimiento De Cobro</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['requerimiento_cobro'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="requerimiento_cobro" value="0">
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

                                                    </div>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>



                                </div>
                                @else
                                <div table-responsive>
                                    <table  class="doc table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Contrato para la prestación de servicios</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['prestacion_servicios'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox1" name="prestacion_servicios" value="0">
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
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox2" name="foto_representante_legal" value="0">
                                                    </div>

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>RTN Comercial</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['rtn_comercial'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox3" name="rtn_comercial" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Copia De Permiso de Operación Alcaldía</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['permiso_operacion'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox4" name="permiso_operacion" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Copia de Escritura de Empresa</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['escritura_empresa'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox5" name="escritura_empresa" value="0">
                                                    </div>

                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Constancia de Gerente</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['constancia_gerente'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox6" name="constancia_gerente" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Averias</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['averias'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox7" name="averias" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Traslado</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['traslado'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox8" name="traslado" value="0">
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>BLOQUEOS</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['bloqueo'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox9" name="bloqueo" value="0">
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Requerimiento De Cobro</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">

                                                        <input <?php if ($data['requerimiento_cobro'] == 1) {
                                                                    echo "checked";
                                                                } ?> type="checkbox" class="custom-control-input my-checkbox" id="checkbox10" name="requerimiento_cobro" value="0">
                                                    </div>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                               <p id="horaimpresa"> Impreso {{now()}}</p>
                                    </center>

                                </div>
                                @endif
                                
                                <br>  
                              
                                                    
<p   style="color:#cab15e;">
    NUESTRA EMPRESA DE TELECOMUNICACIONES
</p>
<p style="color:#cab15e;">
   www.hondutel.hn
</p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

