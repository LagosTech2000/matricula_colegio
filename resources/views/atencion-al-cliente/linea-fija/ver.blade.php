@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Crear nuevo registro</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

          
                            <a href="{{url('/atencion-al-cliente/linea-fija') }}" class="btn btn-primary"> Regresar </a>
                            <a type="submit" target="_blank" class="btn btn-success" href="{{ url('/atencion-al-cliente/linea-fija/'.$registro->id.'/imprimir') }}">Imprimir</a>
                            <br><br>

                            {{-- inicio --}}

                            <div class="col-sm">
                                <div id="dia1Div" class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Nombre del Cliente:</span>
                                  </div>
                                  <input name="nombreCliente" id="nombreCliente"  value="{{$registro->nombreCliente}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                </div>

                                 {{-- inicio columna 1 --}}
                            <div class="container">
                                <div class="row">
                                  <div class="col-sm">
                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Numero de linea:</span>
                                      </div>
                                      <input name="numeroDeLinea" id="numeroDeLinea"  value="{{$registro->numeroDeLinea}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    
                                    <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de solicitud:</span>
                                        </div>
                                        <input name="fechaDeSolicitud" id="fechaDeSolicitud"  value="{{$registro->fechaDeSolicitud}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Bornes:</span>
                                        </div>
                                        <input name="bornes" id="bornes"  value="{{$registro->bornes}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">G. de casa:</span>
                                        </div>
                                        <input name="gdecasa" id="gdecasa"  value="{{$registro->gdecasa}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anclaje plastico:</span>
                                        </div>
                                        <input name="anclajeplastico" id="anclajeplastico"  value="{{$registro->anclajeplastico}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Mordazas:</span>
                                        </div>
                                        <input name="mordazas" id="mordazas"  value="{{$registro->mordazas}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Conector U Y:</span>
                                        </div>
                                        <input name="conectoruy" id="conectoruy"  value="{{$registro->conectoruy}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas:</span>
                                        </div>
                                        <input name="grapas" id="grapas"  value="{{$registro->grapas}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>


                                    {{-- inicio columna 2 --}} 
                                </div>
                                    <div class="col-sm">
                                        <div id="dia1Div" class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Contacto:</span>
                                          </div>
                                          <input name="contacto" id="contacto"  value="{{$registro->contacto}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                        </div>

                                        <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Numero de armario:</span>
                                            </div>
                                            <input name="numerodearmario" id="numerodearmario"  value="{{$registro->numerodearmario}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Abrazadera:</span>
                                            </div>
                                            <input name="abrazadera" id="abrazadera"  value="{{$registro->abrazadera}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas R.E:</span>
                                            </div>
                                            <input name="grapasre" id="grapasre"  value="{{$registro->grapasre}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anilla poste de c:</span>
                                            </div>
                                            <input name="anillopostedec" id="anillopostedec"  value="{{$registro->anillopostedec}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Gancho J:</span>
                                            </div>
                                            <input name="ganchoj" id="ganchoj"  value="{{$registro->ganchoj}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anilla poste de m:</span>
                                            </div>
                                            <input name="anillopostedem" id="anillopostedem"  value="{{$registro->anillopostedem}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Ganchos p/poste de c:</span>
                                            </div>
                                            <input name="ganchosposte" id="ganchosposte"  value="{{$registro->ganchosposte}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                        
                                        {{-- inicio columna 3 --}}
                                    </div>
                                        <div class="col-sm">
                                            <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Direccion:</span>
                                            </div>
                                            <input name="direccion" id="direccion"  value="{{$registro->direccion}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Caja terminal:</span>
                                            </div>
                                            <input name="cajaterminal" id="cajaterminal"  value="{{$registro->cajaterminal}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>          
                                          
                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Acom. ext:</span>
                                            </div>
                                            <input name="acomext" id="acomext"  value="{{$registro->acomext}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div> 

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas D:</span>
                                            </div>
                                            <input name="grapasd" id="grapasd"  value="{{$registro->grapasd}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div> 

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Acom. int:</span>
                                            </div>
                                            <input name="acomint" id="acomint"  value="{{$registro->acomint}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div> 

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">C jumper:</span>
                                            </div>
                                            <input name="cjumper" id="cjumper"  value="{{$registro->cjumper}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div> 

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">C. modular:</span>
                                            </div>
                                            <input name="cjumper" id="cmodular"  value="{{$registro->cmodular}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div id="dia1Div" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Protector:</span>
                                            </div>
                                            <input name="protector" id="protector"  value="{{$registro->protector}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>
                                
                                          
                                
                                   
                                           
                               
                             {{-- final --}}

                             

                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
@endsection