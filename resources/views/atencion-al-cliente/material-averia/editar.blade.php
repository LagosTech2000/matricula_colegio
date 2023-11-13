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
                            <form action=" {{url('/atencion-al-cliente/material-averia/'.$registro->id)}} " method="post">
                                @csrf
                                {{ method_field('PATCH')}}
                                
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Nombre del cliente:</span>
                                      </div>
                                      <input id="nombreCliente"  value="{{$registro->nombreCliente}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Contacto:</span>
                                      </div>
                                      <input id="contacto"  value="{{$registro->contacto}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                     <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de solicitud:</span>
                                      </div>
                                      <input id="fechaDeSolicitud"  value="{{$registro->fechaDeSolicitud}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Armario:</span>
                                      </div>
                                      <input id="numerodearmario" readonly value="{{$registro->numerodearmario}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>        
                                    
                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Red directa:</span>
                                      </div>
                                      <input id="reddirecta"  readonly value="{{$registro->reddirecta}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div>   

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Par primario:</span>
                                      </div>
                                      <input id="parprimario"  readonly value="{{$registro->parprimario}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div> 

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Fecha de reporte:</span>
                                      </div>
                                      <input id="fechareporte" readonly value="{{$registro->fechareporte}}"  style="font-weight:bold;" type="date" class="form-control" aria-describedby="inputGroup-sizing-default">
                                    </div> 

                                    <div id="dia1Div" class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Falla:</span>
                                      </div>
                                      <input id="falla" readonly value="{{$registro->falla}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                    </div> 
                            

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Numero de linea:</span>
                                        </div>
                                        <input id="numeroDeLinea"  readonly value="{{$registro->numeroDeLinea}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Direccion:</span>
                                        </div>
                                        <input id="direccion"  readonly value="{{$registro->direccion}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Tipo de Averia:</span>
                                        </div>
                                        <input id="tipoaveria"  readonly value="{{$registro->tipoaveria}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Par secundario:</span>
                                        </div>
                                        <input id="parsecundario" readonly value="{{$registro->parsecundario}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                       <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Caja terminal:</span>
                                        </div>
                                        <input id="cajaterminal" readonly value="{{$registro->cajaterminal}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div> 

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Bornes:</span>
                                        </div>
                                        <input id="bornes" readonly value="{{$registro->bornes}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Usuario:</span>
                                        </div>
                                        <input id="usuario" readonly value="{{$registro->usuario}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>


                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
             
                                           <input value ="pendiente" style="font-size:14px;" class="form-control" type="hidden" name="estadoAveria" id="estadoAveria">
                                         </div>
                                      </div>
                                     {{-- coloumna2 final --}}
                                    </div>
                                </div> 

                                  {{-- coloumna1 Inicio --}}
                                <h3>Materia Invertido</h3>      
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Abrazadera:</span>
                                        </div>
                                        <input name="abrazadera" id="abrazadera"  value="{{$registro->abrazadera}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Acom. ext:</span>
                                        </div>
                                        <input name="acomext" id="acomext"  value="{{$registro->acomext}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default"> G. de casa:</span>
                                        </div>
                                        <input name="gdecasa" id="gdecasa"  value="{{$registro->gdecasa}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>
                                     
                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas R.E:</span>
                                        </div>
                                        <input name="grapasre" id="grapasre"  value="{{$registro->grapasre}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas D:</span>
                                        </div>
                                        <input name="grapasd" id="grapasd"  value="{{$registro->grapasd}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anclaje plastico:</span>
                                        </div>
                                        <input name="anclajeplastico" id="anclajeplastico"  value="{{$registro->anclajeplastico}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>



         
                                        {{-- coloumna2 --}}
                                    </div>
                                    <div class="col-sm">
                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anilla poste de c:</span>
                                        </div>
                                        <input name="anillopostedec" id="anillopostedec"  value="{{$registro->anillopostedec}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Acom. int:</span>
                                        </div>
                                        <input name="acomint" id="acomint"  value="{{$registro->acomint}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Mordazas:</span>
                                        </div>
                                        <input name="mordazas" id="mordazas"  value="{{$registro->mordazas}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">  Gancho J:</span>
                                        </div>
                                        <input name="ganchoj" id="ganchoj"  value="{{$registro->ganchoj}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>
                                      
                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">C jumper:</span>
                                        </div>
                                        <input name="cjumper" id="cjumper"  value="{{$registro->cjumper}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Conector U Y:</span>
                                        </div>
                                        <input name="conectoruy" id="conectoruy"  value="{{$registro->conectoruy}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                    </div>

                                  
                                    
                                    
                                    
                                      {{-- coloumna3 final --}}
                                    <div class="col-sm">
                                        <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Anilla poste de m:</span>
                                        </div>
                                        <input name="anillopostedem" id="anillopostedem"  value="{{$registro->anillopostedem}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default"> C. modular:</span>
                                        </div>
                                        <input name="cmodular" id="cmodular"  value="{{$registro->cmodular}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Grapas:</span>
                                        </div>
                                        <input name="grapas" id="grapas"  value="{{$registro->grapas}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Ganchos p/poste de c:</span>
                                        </div>
                                        <input name="ganchosposte" id="ganchosposte"  value="{{$registro->ganchosposte}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Protector:</span>
                                        </div>
                                        <input name="protector" id="protector"  value="{{$registro->protector}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                      </div>

                                     

                                    </div>
                                    </div>
                                  </div>
                                  <br>
                                  <ul class="list-unstyled">
                            
                                      <div class="media-body"><br>
                  
                                <input  type="submit"  class="btn btn-primary" value="Aprobar">
                             </form>
                                </div>
                                        
     

                                                          <input value="etapa3" style="font-size:14px;" class="form-control" type="hidden" name="estado" id="estado">
                                    </div>
                                    
                                  </div>                                
                                           
                                           
                               
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection