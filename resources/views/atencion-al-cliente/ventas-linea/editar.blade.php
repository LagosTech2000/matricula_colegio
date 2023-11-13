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
                            <form action=" {{url('/atencion-al-cliente/ventas-linea/'.$registro->id)}} " method="post">
                                @csrf
                                {{ method_field('PATCH')}}
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Identidad">Nombre:</label>
                                         <input value="{{$registro->clienteNombre}}" style="font-size:14px;" class="form-control" type="text" name="clienteNombre" id="clienteNombre">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Nombre">Identidad:</label>
                                         <input value="{{$registro->id}}" style="font-size:14px;" class="form-control" type="text" name="id" id="id">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Numero de linea:</label>
                                         <input value="{{$registro->numLinea}}" style="font-size:14px;" class="form-control" type="text" name="numLinea" id="numLinea">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Beneficiario:</label>
                                         <input value="{{$registro->nombreBeneficiario}}" style="font-size:14px;" class="form-control" type="text" name="nombreBeneficiario" id="nombreBeneficiario">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Direccion del trabajo:</label>
                                         <input value="{{$registro->clienteDireccionTrabajo}}" style="font-size:14px;" class="form-control" type="text" name="clienteDireccionTrabajo" id="clienteDireccionTrabajo">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Cuotas:</label>
                                         <input value="{{$registro->cuotas}}" style="font-size:14px;" class="form-control" type="text" name="cuotas" id="cuotas">
                                       </div>
                                    </div>

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Contacto:</label>
                                           <input value="{{$registro->telefonoContacto}}" style="font-size:14px;" class="form-control" type="text" name="telefonoContacto" id="telefonoContacto">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Correo:</label>
                                           <input value="{{$registro->clienteCorreo}}" style="font-size:14px;" class="form-control" type="text" name="clienteCorreo" id="clienteCorreo">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Profesion:</label>
                                           <input value="{{$registro->clienteProfesion}}" style="font-size:14px;" class="form-control" type="text" name="clienteProfesion" id="clienteProfesion">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Parentesto:</label>
                                           <input value="{{$registro->beneficiarioParentesco}}" style="font-size:14px;" class="form-control" type="text" name="beneficiarioParentesco" id="beneficiarioParentesco">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Estado Civil:</label>
                                           <input value="{{$registro->clienteEstadoCivil}}" style="font-size:14px;" class="form-control" type="text" name="clienteEstadoCivil" id="clienteEstadoCivil">
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Direccion">Numero de cuotas:</label>
                                           <input value="{{$registro->numeroCuotas}}" style="font-size:14px;" class="form-control" type="text" name="numeroCuotas" id="numeroCuotas">
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