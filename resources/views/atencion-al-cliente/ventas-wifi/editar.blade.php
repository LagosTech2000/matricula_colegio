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
            

                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="rtn">R.T.N.:</label>
                                         <input value="{{$registro->rtn}}" class="form-control" type="text" name="rtn" id="rtn">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="wifiTelefonoAsociado">Telefono Asociado:</label>
                                         <input value="{{$registro->wifiTelefonoAsociado}}" class="form-control" type="text" name="wifiTelefonoAsociado" id="wifiTelefonoAsociado">
                                       </div>
                                    </div>

         
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteTelefonoOficina">Telefono de Oficina:</label>
                                         <input value="{{$registro->clienteTelefonoOficina}}" class="form-control" type="text" name="clienteTelefonoOficina" id="clienteTelefonoOficina">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="propietarioLinea">Linea del propietario:</label>
                                         <input value="{{$registro->propietarioLinea}}" class="form-control" type="text" name="propietarioLinea" id="propietarioLinea">
                                       </div>
                                    </div>

                                    
                                   
                                    

                                    

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="categorias">Categorias:</label>
                                         <input value="{{$registro->categorias}}" class="form-control" type="text" name="categorias" id="categorias">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="fechaSolicitud">Fecha de Solicitud:</label>
                                         <input value="{{$registro->fechaSolicitud}}" class="form-control" type="date" name="fechaSolicitud" id="fechaSolicitud">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombrePropietario">Nombre del propietario:</label>
                                         <input value="{{$registro->nombrePropietario}}" class="form-control" type="text" name="nombrePropietario" id="nombrePropietario">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="equipoInstalacion">Equipo de instalacion:</label>
                                         <input value="{{$registro->equipoInstalacion}}" class="form-control" type="text" name="equipoInstalacion" id="equipoInstalacion">
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