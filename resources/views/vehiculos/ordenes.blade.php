@extends('layouts.app')
@section('title')
Vehiculos
@endsection
  @section('content')
    <section>
      <div class="section-header" style="max-height: 3rem;">
      </div>
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Ordenes:</h5>
      <div class="section-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <strong>Revise los campos</strong>
        @foreach($errors->all() as $error)
          <span class="badge badge-danger">{{$error}}</span>
        @endforeach
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
    </div>
  @endif

                @if(Session::has('notiEditado') )
                <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                  <h5 class="alert-heading">!Expediente Editado!</h5>
                    <strong>{{Session('notiEditado')}}  </strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 @endif

                 @if(Session::has('notiGuardado') )
                 <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                   <h5 class="alert-heading">! Expediente Guardado!</h5>
                     <strong>{{Session('notiGuardado')}}  </strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  @endif

       @if(Session::has('notiBorrado') )
       <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
         <h5 class="alert-heading">!Eliminado!</h5>
           <strong>{{Session('notiBorrado')}}  </strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
        </div>
        @endif

                            {{-- inicio --}}                    

                            <ul class="row">
                              <li class="media">

                                <div class="media-body xs-md-3">
                                   <a class="btn btn-primary btn-lg" href="{{route('vehiculos')}}" ><i class="fas fa-home"></i></a>
                                   <a class="btn btn-primary btn-lg" href="{{route('vehiculos-ordenes')}}"><i class="fas fa-gas-pump"></i> Ordenes</a>
                                  <a href="{{ route('vehiculos-emitidas') }}" class="btn btn-primary btn-lg" id="botonCancelar"   type="button"  ><i class="fas fa-car" aria-hidden="true"></i> Emitidas</a>
                                </div>
                              </li>

                        
                            </ul>

                            <form action="{{ route('vehiculos-ordenes') }}" method="post">
                              @csrf

                                  <label>
                                  Fecha Inicial :
                                  
                                  <input name="Fechainicial"  class="form-control form-control-sm" type="date" value="Buscar">

                            </label> 
                                &nbsp;
                                
                                  <label for="">
                                      Fecha Final :

                                      
                                      <input name="Fechafinal"  class="form-control form-control-sm" type="date" value="Buscar">
                                    </label>
                                  
                                  <input name="buscarorden" class="mb-2   btn btn-primary btn-xs mt-2" type="submit" value="Buscar">

                                </form>

                            <table id="ordenes"  class="table table-striped table-bordered table-sm  text-center" style="width:95%" >
                              <thead style="background-color:#315d9a;">
                                    <tr>
                                    <th style="color: #fff;">No Orden</th>
                                      <th style="color: #fff;">Fecha</th>
                                      <th style="color: #fff;">Carga</th>
                                      <th style="color: #fff;">Conductor</th>
                                      <th style="color: #fff;">vehiculo</th>
                                      <th style="color: #fff;">Kilometraje</th>
                                      <th style="color: #fff;">Gasolinera</th>                                      
                                      <th style="color: #fff;">Accion</th>                                      
                                    
                                    </tr>
                              </thead>
                        
                              <tbody>
                                @if(isset($data))

                                @foreach($data as $d)
                                <tr>
                                  <td>{{$d['idorden']}}</td>
                                  <td>{{$d['Fecha']}}</td>
                                  <td>{{$d['carga']}} Gal</td>                                  
                                  <td>{{$d['nombreEmpleado']}}</td>      
                                  <td>{{$d['Marca']." ".$d['modelo']." ".$d['año'] }}</td>                            
                                  <td>{{$d['Kilometraje']}} Km</td>                             
                                  <td>{{$d['gasolinera']}} </td>          
                                  <td>
                    <form target="_blank" action="{{route('resumen.vehiculos')}}" method="post">
                      @csrf
                       <input type="hidden" name="idorden" value="{{$d['idorden']}}">
                      <button class="btn btn-primary"><i class="fas fa-file"></i> pdf</button>
                    </form>
                  </td>                   
                                  
                                </tr>
                                @endforeach

                                @endif
                               
                              </tbody>                              
                            </table>
                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')






@endsection
@endsection