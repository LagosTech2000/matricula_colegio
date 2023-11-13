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
                            <form action=" {{ url('/atencion-al-cliente/internet-solicitud/'.$registro->id)}} " method="post">
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
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Fecha de Solicitud:</span>
                                        </div>
                                        <input name="fechaDeSolicitud" id="fechaDeSolicitud"  value="{{$registro->fechaDeSolicitud}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
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
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Megas:</span>
                                        </div>
                                        <input name="Megas" id="Megas"  value="{{$registro->Megas}}"  style="font-weight:bold;" type="text" class="form-control" readonly aria-describedby="inputGroup-sizing-default">
                                      </div>

                                      
                                    

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">

                                            
             
                                           <input value="etapa2" style="font-size:14px;" class="form-control" type="hidden" name="estado" id="estado">
                                         </div>
                                      </div>
                                     {{-- coloumna2 final --}}
                                    </div>
                                    <div id="dia1Div" class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span  style="font-weight:bold;" class="input-group-text" id="">Falla de internet:</span>
                                        </div>
                                        <input name="falla" id="falla"  value="{{$registro->falla}}"  style="font-weight:bold;" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
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