@extends('layouts.app')
@section('title')
Asignar Chofer
@endsection
@section('content')
<section>
  <div class="section-header" style="max-height: 3rem;">
  </div>
  <h3 class="text-center" style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Seleccione el empleado al que se asignara</h3>
  @if(isset($vehiculo))
  <h3 class="text-center" style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje"> {{$vehiculo->Marca}} {{$vehiculo->modelo}} {{$vehiculo->año}}</h3>
  <h5 class="text-center" style="background-color:white; padding:0.4rem; border-radius:1rem;">El vehiculo esta asignado actualmente a {{$vehiculo->nombreEmpleado}} </h5>
  @endif
  <div class="section-body">
    <center>

      <table class="table table-striped table-bordered table-sm  text-center" style="width:95%">
        <thead>
        <th class="bg-primary text-white">#</th>
          <th class="bg-primary text-white">Empleado</th>
          <th class="bg-primary text-white">Accion</th>
        </thead>
        <tbody>
          @if(isset($empleados))
          @if(isset($vehiculo))
          
          @foreach($empleados as $empleado)          
          @if($empleado->id != $vehiculo->idEmpleado)                    
          <tr>
            <td>{{$empleado->id}}</td>
            <td> {{$empleado->nombreEmpleado}} </td>
            <td> 
              <form action="">
                 <input type="hidden" name="idempleado" value="{{$empleado->id}}">
                <input class="btn btn-outline-primary" name="enviar" value="Asignar" type="submit"/>
              </form>
            </td>
          </tr>

          @endif
          
          @endforeach

          @else
          @foreach($empleados as $empleado)          
          
          <tr>
            <td>{{$empleado->id}}</td>
            <td> {{$empleado->nombreEmpleado}} </td>
            <td> 
              <form action="">
                 <input type="hidden" name="idempleado" value="{{$empleado->id}}">
                <input class="btn btn-outline-primary" name="enviar" value="Asignar" type="submit"/>
              </form>
            </td>
          </tr>          
          
          @endforeach

          @endif

          @endif

        </tbody>

      </table>
    </center>
  </div>
</section>
@section('scripts')



@endsection
@endsection