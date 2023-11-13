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
                            <form action=" {{url('/atencion-al-cliente/ventas-linea')}} " method="post">
                                @csrf
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm">
                                     {{-- columna1 inicio --}}
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="id">Identidad:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="id" id="id">
                                       </div>
                                    </div>
                                    

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteNombre">Nombre del cliente:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="clienteNombre" id="clienteNombre">
                                       </div>
                                    </div>

         
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteCorreo">Correo:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="clienteCorreo" id="clienteCorreo">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteProfesion">Profesion:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="clienteProfesion" id="clienteProfesion">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="telefonoContacto">Contacto:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="telefonoContacto" id="telefonoContacto">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteDireccionTrabajo">Direccion del Trabajo:</label>
                                         <input required style="font-size:14px;" class="form-control" type="text" name="clienteDireccionTrabajo" id="clienteDireccionTrabajo">
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                       <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="clienteEstadoCivil">Estado Civil:</label>
                                       <select required class="form-control" id="clienteEstadoCivil" name="clienteEstadoCivil">
                                         <option disabled selected value="">Seleccione estado civil</option>
                                           <option value="Soltero">Soltero</option>
                                           <option value="Casado">Casado</option>
                                           <option value="Divorciado">Divorciado</option>
                                         </select>
                                      </div>
                                    </div>


                                    

                                    

                                     {{-- coloumna1 final --}}
                                    </div>

                                    <div class="col-sm">
                                      {{-- columna2 inicio --}}
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="cuotas">Cuotas:</label>
                                         <select required class="form-control" id="cuotas" name="cuotas">
                                          <option disabled selected value="">seleccione un valor</option> 
                                          <option value="no">no</option>
                                             <option value="si">si</option>
                                             
                                           </select>
                                        </div>
                                      </div>


                                      <div id="numerocuotas" class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroCuotas">Numero de cuotas:</label>
                                           {{-- <input style="font-size:14px;" class="form-control" type="text" name="numeroCuotas" id="numeroCuotas"> --}}
                                           <select required class="form-control" id="numeroCuotas" name="numeroCuotas">
                                           
                                            <option disabled selected value="">seleccione un valor</option> 
                                          
                                               <option style="display:none" id="cuota1" value="1">1 cuota</option>
                                               <option style="display:none" id="cuota2" value="2">2 cuota</option>
                                               <option style="display:none" id="cuota3" value="3">3 cuota</option>
                                              
                                             </select>
                                         </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="nombreBeneficiario">Beneficiario:</label>
                                           <input required style="font-size:14px;" class="form-control" type="text" name="nombreBeneficiario" id="nombreBeneficiario">
                                         </div>
                                      </div>

                                      

          

    

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                           <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="beneficiarioParentesco">Parentesco:</label>
                                           <input required style="font-size:14px;" class="form-control" type="text" name="beneficiarioParentesco" id="beneficiarioParentesco">
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
    @section('scripts')
    <script>

     //ocultar mediante el select
     $('#cuotas').on('change',function(){
        var selectValor = $(this).val();
        if (selectValor == "no" || selectValor == null ) {
          
           
          // $('#numerocuotas');
          document.getElementById('numerocuotas').selectedIndex = 0;
         

          $('#cuota1').show();
          $('#cuota2').hide();
          $('#cuota3').hide();
        }
        else if(selectValor == "si" || selectValor == null ) {
         
            
          $('#cuota1').show();
          $('#cuota2').show();
          $('#cuota3').show();
          $('#no').hide();
        }
    });
    
    </script>
    @endsection
@endsection