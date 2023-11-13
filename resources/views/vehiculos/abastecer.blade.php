@extends('layouts.app')
@section('title')
Vehiculos
@endsection
@section('content')
<section>
    <div class="section-header" style="max-height: 3rem;">
    </div>
    <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Abastecer:</h5>
    <div class="section-body">
        <div class="media-body xs-md-3">
            <a class="btn btn-primary btn-lg " href="{{route('vehiculos')}}"><i style="font-size:0.6cm;" class="fas fa-arrow-circle-left"></i></a>

        </div>
<br>
         
        <form id="form" action="{{route('abastecer')}}" method="post">
              @csrf
                            <div class="container">


                                <div class="row ">
                                    

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="gasolinera" >Gasolinera:</label>
                                        <select required class="form-control" style="font-weight:bold;" id="gasolinera" name="gasolinera" >                                            
                                            <option value="Texaco">Texaco</option>
                                            <option value="Puma">Puma</option>
                                            <option value="Uno">Uno</option>
                                        </select>
                                        
                                      </div>
                                    </div>

                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                      <div class="form-group">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)"  for="carga" >Carga(Galones):</label>
                                            <select required class="form-control" style="font-weight:bold;" id="carga" name="carga" >                                            
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                        </select>

                                      </div>
                                    </div>


                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <label  style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" >Observacion</label>
                                        <input  name="observacion"  style="font-weight:bold;" type="text"  class="form-control" >
                                     </div>

                                    </div>
                                      
                                    </div>

                                    <div class="col-xs-3 col-sm-4 m-auto ">
                                      <div class="form-group">               
                                        <input type="hidden" name="id" value="{{$idVehiculo}}">                   
                                         <button name="guardarOrden" class="btn btn-outline-primary btn-lg rounded mt-4" type="submit" ><i class="fas fa-car"></i> Guardar </button>
                                      </div>
                                  </div>
                                  
                            </div><hr>
                                
                             </form>


        </div>
</section>
@section('scripts')


@endsection
@endsection
