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
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteNombre"><h6>Nombre del cliente:</h6></label>
                                <label id="clienteNombre"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->clienteNombre}} </h6></label>
                               </div>
                                </div>
                            </div> <hr>

                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="id"><h6>Identidad:</h6></label>
                                      <label id="id"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->id}} </h6></label>
                                     </div>
                                      </div>
                                  </div>   
                                  
                                  
                            
                      

                            <div class="col-xs-12 col--12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteCorreo"><h6>Correo:</h6></label>
                                <label id="clienteCorreo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->clienteCorreo}} </h6></label>
                               </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-inline">
                               <div class="form-group">
                                <label id="clienteProfesion"><h6>Profesion:</h6></label>
                                <label id="clienteProfesion"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->clienteProfesion}} </h6></label>
                               </div>
                                </div>
                            </div>
                      
                                </div>
                           

                                <div class="col-sm">
                                  <div class="col-xs-12 col--12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="telefonoContacto"><h6>Contacto:</h6></label>
                                      <label id="telefonoContacto"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->telefonoContacto}} </h6></label>
                                     </div>
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col--12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="clienteDireccionTrabajo"><h6>Direccion del Trabajo:</h6></label>
                                      <label id="clienteDireccionTrabajo"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->clienteDireccionTrabajo}} </h6></label>
                                     </div>
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col--12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="clienteEstadoCivil"><h6>Estado Civil:</h6></label>
                                      <label id="clienteEstadoCivil"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->clienteEstadoCivil}} </h6></label>
                                     </div>
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col--12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="beneficiarioParentesco"><h6>Parentesco:</h6></label>
                                      <label id="beneficiarioParentesco"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->beneficiarioParentesco}} </h6></label>
                                     </div>
                                      </div>
                                  </div>
                                </div>

                                


                                <div class="col-sm">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="cuotas"><h6>Cuotas:</h6></label>
                                      <label id="cuotas"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->cuotas}} </h6></label>
                                     </div>
                                      </div>
                                  </div>  
                                  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="numeroCuotas"><h6>numeroCuotas:</h6></label>
                                      <label id="numeroCuotas"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->numeroCuotas}} </h6></label>
                                     </div>
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-inline">
                                     <div class="form-group">
                                      <label id="nombreBeneficiario"><h6>Beneficiario:</h6></label>
                                      <label id="nombreBeneficiario"><h6 style="color: blue; margin-left:0.2rem;">  {{$registrowifi->nombreBeneficiario}} </h6></label>
                                     </div>
                                      </div>
                                  </div>

                              
                                </div>
                              </div>
                            </div>


                            <form action=" {{url('/atencion-al-cliente/ventas-wifi')}} " method="post"><br><br>
                                @csrf
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fk_id_linea">Identidad:</label>
                                         <input readonly value="{{$registrowifi->id}}" style="font-size:14px;" class="form-control" type="text" name="fk_id_linea" id="fk_id_linea">
                                       </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="rtn">R.T.N.:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="rtn" id="rtn">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="wifiTelefonoAsociado">Telefono Asociado:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="wifiTelefonoAsociado" id="wifiTelefonoAsociado">
                                       </div>
                                    </div>

         
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteTelefonoOficina">Telefono de Oficina:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="clienteTelefonoOficina" id="clienteTelefonoOficina">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="propietarioLinea">Linea del propietario:</label>
                                         <input readonly value="{{ $registrowifi->numLinea }}"  required style="font-size:14px;" class="form-control" type="text" name="propietarioLinea" id="propietarioLinea">
                                       </div>
                                    </div>

                                    
                                   
                                    

                                    

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="categorias">Categorias:</label>
                                       <select required class="form-control" id="categorias" name="categorias">
                                         <option value="" disabled selected>Seleccionar categorias</option>
                                           <option value="Residencial">Residencial</option>
                                           <option value="Comercial">Comercial</option>
                                           <option value="Gobierno">Gobierno</option>
                                           <option value="Otros">Otros</option>
                                         </select>
                                      </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitud">Fecha de Solicitud:</label>
                                         <input required style="font-size:14px;" class="form-control" type="date" name="fechaSolicitud" id="fechaSolicitud">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombrePropietario">Nombre del propietario:</label>
                                         <input readonly required style="font-size:14px;" value="{{ $registrowifi->clienteNombre }}" class="form-control" type="text" name="nombrePropietario" id="nombrePropietario">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="equipoInstalacion">Equipo de instalacion:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="equipoInstalacion" id="equipoInstalacion">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Megas">Megas:</label>
                                        <select class="form-control" id="megas" name="megas">
                                         <option disabled selected >seleccione una opcion</option>
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