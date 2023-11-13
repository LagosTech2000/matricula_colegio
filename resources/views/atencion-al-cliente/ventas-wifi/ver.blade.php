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
                            {{-- inicio --}}

                    
                            <form action=" {{url('/atencion-al-cliente/ventas-wifi/'.$registro->id)}} " method="post"><br><br>
                                @csrf
                                {{ method_field('PATCH')}}
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}

                                      

                                     <div class="container">
                                      <div class="row">
                                        <div class="col-sm">
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-inline">
                                             <div class="form-group">
                                              <label id="id"><h6>Identidad:</h6></label>
                                              <label id="id"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->id}} </h6></label>
                                             </div>
                                              </div>
                                          </div>  
                                          
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="rtn"><h6>R.T.N.:</h6></label>
                                          <label id="rtn"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->rtn}} </h6></label>
                                          </div>
                                          </div>
                                      </div>  
                                          
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="clienteNombre"><h6>Nombre del cliente:</h6></label>
                                          <label id="clienteNombre"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteNombre}} </h6></label>
                                          </div>
                                          </div>
                                      </div> 
                                          

                                          
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="wifiTelefonoAsociado"><h6>Telefono Asociado:</h6></label>
                                          <label id="wifiTelefonoAsociado"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->wifiTelefonoAsociado}} </h6></label>
                                          </div>
                                          </div>
                                      </div>   

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="clienteTelefonoOficina"><h6>Telefono de Oficina:</h6></label>
                                          <label id="clienteTelefonoOficina"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->clienteTelefonoOficina}} </h6></label>
                                          </div>
                                          </div>
                                      </div> 

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="propietarioLinea"><h6>Linea del propietario:</h6></label>
                                          <label id="propietarioLinea"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->propietarioLinea}} </h6></label>
                                          </div>
                                          </div>
                                      </div> 

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="categorias"><h6>Categorias:</h6></label>
                                          <label id="categorias"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->categorias}} </h6></label>
                                          </div>
                                          </div>
                                      </div> 

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="fechaSolicitud"><h6>Fecha de Solicitud:</h6></label>
                                          <label id="fechaSolicitud"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->fechaSolicitud}} </h6></label>
                                          </div>
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="nombrePropietario"><h6>Nombre del propietario:</h6></label>
                                          <label id="nombrePropietario"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->nombrePropietario}} </h6></label>
                                          </div>
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-inline">
                                          <div class="form-group">
                                          <label id="equipoInstalacion"><h6>Equipo de instalacion:</h6></label>
                                          <label id="equipoInstalacion"><h6 style="color: blue; margin-left:0.2rem;">  {{$registro->equipoInstalacion}} </h6></label>
                                          </div>
                                          </div>
                                      </div>
                                    

                                    

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      
                                      

                                     {{-- coloumna2 final --}}
                                    </div>
                                </div>       
                                              <br>
                                              <ul class="list-unstyled">
                                        
                                                  <div class="media-body">
                                                    {{-- <a class="btn btn-warning" href="{{ route('pase-salida.index') }}">cancelar</a> --}}
                                            <input  type="submit"  class="btn btn-primary" value="Guardar">
                                         </form>
                                           
                               
                             {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection