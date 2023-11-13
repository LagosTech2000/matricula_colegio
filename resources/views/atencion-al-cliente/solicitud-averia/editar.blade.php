@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Aprobar Solicitud de Averia</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <form action=" {{ url('/atencion-al-cliente/solicitud-averia/'.$registro->id)}} " method="post">
                                @csrf
                                {{ method_field('PATCH')}}    
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Nombre del cliente:</span>
                                      </div>
                                      <input name="nombreCliente" id="nombreCliente"  value="{{$registro->nombreCliente}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Contacto:</span>
                                      </div>
                                      <input name="contacto" id="contacto"  value="{{$registro->contacto}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                     <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Fecha de solicitud:</span>
                                      </div>
                                      <input name="fechaDeSolicitud" id="fechaDeSolicitud"  value="{{$registro->fechaDeSolicitud}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Armario:</span>
                                      </div>
                                      <input name="numerodearmario" id="numerodearmario" style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>        
                                    
                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Red directa:</span>
                                      </div>
                                      <input name="reddirecta" id="reddirecta" style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>   

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Par primario:</span>
                                      </div>
                                      <input name="parprimario" id="parprimario" style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div> 

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Fecha de reporte:</span>
                                      </div>
                                      <input name="fechareporte" id="fechareporte" style="font-weight:bold;" type="date" class="form-control" aria-describedby="inputGroup-sizing-default">
                                    </div> 

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="">Falla:</span>
                                      </div>
                                      <input name="falla" id="falla" style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div> 
                            

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Numero de linea:</span>
                                        </div>
                                        <input name="numeroDeLinea" id="numeroDeLinea"  readonly value="{{$registro->numeroDeLinea}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Direccion:</span>
                                        </div>
                                        <input name="direccion" id="direccion"  readonly value="{{$registro->direccion}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Tipo de Averia:</span>
                                        </div>
                                        <input name="tipoaveria" id="tipoaveria"  readonly value="{{$registro->tipoaveria}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Par secundario:</span>
                                        </div>
                                        <input name="parsecundario" id="parsecundario"  v  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                       <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Caja terminal:</span>
                                        </div>
                                        <input name="cajaterminal" id="cajaterminal"   style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Bornes:</span>
                                        </div>
                                        <input name="bornes" id="bornes"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Usuario:</span>
                                        </div>
                                        <input name="usuario" id="usuario" style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>


                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
             
                                           <input value="etapa2" style="font-size:14px;" class="form-control" type="hidden" name="estado" id="estado">
                                         </div>
                                      </div>
                                     {{-- coloumna2 final --}}
                                    </div>
                                </div>       
                                              <br>
                                              <ul class="list-unstyled">
                                        
                                                  <div class="media-body">
                              
                                            <input  type="submit"  class="btn btn-primary" value="Aprobar">
                                         </form>
                                           
                               
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection