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
                            <form action=" {{url('/atencion-al-cliente/ventas-linea')}} " method="post">
                                @csrf
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteIdentidad">Identidad:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="clienteIdentidad" id="clienteIdentidad">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteNombre">Nombre del cliente:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="clienteNombre" id="clienteNombre">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroCuotas">Numero de cuotas:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="numeroCuotas" id="numeroCuotas">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="beneficiarioParentesco">Parentesco:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="beneficiarioParentesco" id="beneficiarioParentesco">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteEstadoCivil">Estado Civil:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="clienteEstadoCivil" id="clienteEstadoCivil">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteDireccionTrabajo">Direccion del Trabajo:</label>
                                         <input style="font-size:14px;" class="form-control" type="text" name="clienteDireccionTrabajo" id="clienteDireccionTrabajo">
                                       </div>
                                    </div>

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteTelefono">Telefono:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="clienteTelefono" id="clienteTelefono">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="cuotas">Cuotas:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="cuotas" id="cuotas">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreBeneficiario">Beneficiario:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="nombreBeneficiario" id="nombreBeneficiario">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteProfesion">Profesion:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="clienteProfesion" id="clienteProfesion">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="telefonoContacto">Contacto:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="telefonoContacto" id="telefonoContacto">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteCorreo">Corre:</label>
                                           <input style="font-size:14px;" class="form-control" type="text" name="clienteCorreo" id="clienteCorreo">
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