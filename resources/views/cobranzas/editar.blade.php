@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Editar Cita</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}

                            <form action=" {{route('editar')}} " method="post">
                                @csrf
                                <input required style="font-size:14px;" value="{{$datos['id']}}" class="form-control" type="hidden" name="Id" />
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="gps">Estado:</label>
                                         <select required class="form-control"  id="numeroArmario" name="Estado">                                             
                                         <option  value="{{$datos['Estado']}}">{{$datos['Estado']}}</option>  
                                         <option  value="Inactivo">Inactivo</option>
                                           <option value="Activo">Activo</option>
                                                  
                                                  </select>
                                       </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="Mora">Mora:</label>
                                         <input required style="font-size:14px;" value="{{$datos['Mora']}}" class="form-control" type="number" name="Mora" />
                                       </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroArmario" required>Meses</label>
                                            <input type="number" required class="form-control" value="{{$datos['Meses']}}" id="numeroArmario" name="Meses" />
                                            
                                        </div>
                                      </div>


                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                          <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="numeroArmario" required>Nueva Direccion</label>
                                            <input required class="form-control" value="{{$datos['Nuevadireccion']}}" id="numeroArmario" name="Nuevadireccion">                                             
                                             
                                        </div>
                                      </div>
                           
                                      </div>




                                     {{-- coloumna1 final --}}

                                   
</div>
                                    </div>
                                </div>       
                                              <br>
                                              <ul class="list-unstyled">
                                        
                                                  <div class="media-body">
                                                    
                                            <input  type="submit"  class="btn btn-primary" value="Guardar">
                                         </form>
                                           
                               
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection