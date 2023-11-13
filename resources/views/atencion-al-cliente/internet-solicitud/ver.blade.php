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

          
                            <a href="{{url('/atencion-al-cliente/internet-averia') }}" class="btn btn-primary"> Regresar </a>
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
                                            <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Megas:</span>
                                          </div>
                                          <input name="Megas" id="Megas"  value="{{$registro->Megas}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
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
                                              <span  style="font-weight:bold;" class="input-group-text" id="inputGroup-sizing-default">Falla de internet:</span>
                                            </div>
                                            <input name="falla" id="falla"  value="{{$registro->falla}}"  style="font-weight:bold;" type="text" class="form-control"  aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          
                                
                                   
                                           
                               
                             {{-- final --}}

                             

                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
@endsection





