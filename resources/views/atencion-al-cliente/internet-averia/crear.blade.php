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

                          @if ($errors->any())
                          <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>Complete los campos</strong>
                              @foreach($errors->all() as $error)
                                <span class="badge badge-danger">{{$error}}</span>
                              @endforeach
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                          </div>
                        @endif
                        
                            {{-- inicio --}}
                            <form action=" {{url('/atencion-al-cliente/registro-averia')}} " method="post">
                                @csrf
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreCliente">Nombre del cliente:</label>
                                         <input required style="font-size:14px;" value="{{$registro->nombrePropietario}}" class="form-control" type="text" name="nombreCliente" id="nombreCliente">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="contacto">Contacto:</label>
                                         <input required style="font-size:14px;" value="{{$registro->wifiTelefonoAsociado}}" class="form-control" type="text" name="contacto" id="contacto">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group"> 
                                      <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaDeSolicitud">Fecha de solicitud.</label>
                                      <input required style="font-size:14px;" class="form-control" type="date" name="fechaDeSolicitud" id="fechaDeSolicitud">
                                    </div>
                                    </div>

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroDeLinea">Numero de linea:</label>
                                           <input required style="font-size:14px;" value="{{$registro->propietarioLinea}}" class="form-control" type="text" name="numeroDeLinea" id="numeroDeLinea">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Direccion:</label>
                                           <input required style="font-size:14px;" value="{{$registro->direccion}}" class="form-control" type="text" name="Direccion" id="Direccion">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Megas">Megas:</label>
                                          <select  class="form-control" id="megas" name="megas">
                                           <option value="{{$registro->megas}}">{{$registro->megas}}</option>
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

                                      <input value="solicitado" type="hidden" id="estado" name="estado">


                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
             
                                           <input value ="etapa1" style="font-size:14px;" class="form-control" type="hidden" name="estado" id="estado">
                                         </div>
                                      </div>
                                     {{-- coloumna2 final --}}
                                    </div>
                                </div>       
                                              <br>
                                              <ul class="list-unstyled">
                                        
                                                  <div class="media-body">
                              
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

