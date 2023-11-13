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
                            <form action=" {{url('/atencion-al-cliente/internet-averia/'.$registro->id)}} " method="post">
                                @csrf
                                {{ method_field('PATCH')}}
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreCliente">Nombre del cliente:</label>
                                         <input value="{{$registro->nombreCliente}}" style="font-size:14px;" class="form-control" type="text" name="nombreCliente" id="nombreCliente">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="contacto">Contacto:</label>
                                         <input value="{{$registro->contacto}}" style="font-size:14px;" class="form-control" type="text" name="contacto" id="contacto">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaDeSolicitud">Fecha de solicitud.</label>
                                      <input value="{{$registro->fechaDeSolicitud}}" style="font-size:14px;" class="form-control" type="date" name="fechaDeSolicitud" id="fechaDeSolicitud">
                                    </div>
                                    </div>

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroDeLinea">Numero de linea:</label>
                                           <input value="{{$registro->numeroDeLinea}}" style="font-size:14px;" class="form-control" type="text" name="numeroDeLinea" id="numeroDeLinea">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Direccion:</label>
                                           <input value="{{$registro->direccion}}" style="font-size:14px;" class="form-control" type="text" name="Direccion" id="Direccion">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Megas">Megas:</label>
                                          <select class="form-control" id="Megas" name="Megas">
                                           <option disabled selected > Seleccione cantidad de megas</option>
                                           <option value="2 MB">2 MB</option>
                                              <option value="3 MB">3 MB</option>   
                                              <option value="4 MB">4 MB</option>
                                              <option value="5 MB">5 MB</option> 
                                              <option value="6 MB">6 MB</option>
                                              <option value="8 MB">8 MB</option> 
                                              <option value="10 MB">10 MB</option>
                                              <option value="12 MB">12 MB</option> 
                                              <option value="15 MB">15 MB</option>
                                              <option value="20 MB">20 MB</option>                     
                                            </select>
                                         </div>
                                       </div>
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
