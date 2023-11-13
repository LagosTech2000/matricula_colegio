@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header" style="max-height: 3rem;">
    <h5 class="page__heading">Agendar Cita {{count($citas) +1}}</h5>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            {{-- inicio --}}

            @if(\Illuminate\Support\Facades\Auth::user())

            @endif



            <form action=" {{route('agendar')}} " method="post">
              @csrf
              <input type="hidden" name="idEmpleado" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" />

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="gps">Resultado:</label>
                  <input required placeholder="" style="font-size:14px;" class="form-control" type="text" name="resultado" id="gps">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="gps">Nuevo Telefono:</label>
                  <input required placeholder="Nuevo Contacto" style="font-size:14px;" class="form-control" type="tel" name="numeroPersonal" id="gps">
                </div>
              </div>


              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="numeroArmario" required>Se Encontro</label>
                  <select required class="form-control" value="" id="numeroArmario" name="seEncontro">
                    <option value="Si">Si</option>
                    <option value="No">No</option>

                  </select>
                </div>
              </div>


              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label style="font-size:16px; font-weight:bold; color:rgb(92, 92, 92)" for="numeroArmario" required>Acepta Pagar</label>
                  <select required class="form-control" value="" id="numeroArmario" name="aceptaPagar">
                    <option value="No">No</option>
                    <option value="Si">Si</option>

                  </select>
                </div>
              </div>
              {{-- coloumna1 final --}}


              <br>
              <ul class="list-unstyled">

                <div class="media-body">
                  <center>

                    <input type="submit" class=" btn btn-primary" value="Guardar">
                    </ center>
            </form>
          </div>
        </div>
      </div>


      <div class="section-body">
        <center>

        <form target="_blank"  action="{{route('resumen.cobranzas')}}" method="post">
          @csrf
          <input type="hidden" name="idorden" value="{{$cob}}">
          <button class="btn btn-primary"><i class="fas fa-file"></i> pdf</button>
        </form>

        <table id="porid" class="table table-striped table-bordered table-sm text-center" style="width:100%">
          <thead style="background-color:#315d9a;">


              <h2>HISTORIAL DE CITAS</h2>

            </center>
            <tr>
              <!-- fecha, seencontroalcliente, Resultado, Nuevocontacto, IdEmpleado, 
                        Numeropersonal, Aceptapagar, observacion, created_at,
                         updated_at, IdCobranza -->

              <th style="color: #fff;">Codigo De Cobranza</th>
              <th style="color: #fff;">Fecha</th>
              <th style="color: #fff;">Nombre del Cliente</th>
              <th style="color: #fff;">Resultado</th>
              <th style="color: #fff;">Acepto Pagar</th>
              <th style="color: #fff;">Numero Personal</th>



            </tr>
          </thead>

          @if($citas)
          <tbody>
            @foreach($citas as $cita)

            <td>{{$cita['IdCobranza']}}</td>
            <td>{{$cita['fecha']}}</td>
            <td>{{$cita['seencontroalcliente']}}</td>
            <td>{{ $cita['Resultado']}}</td>
            <td>{{ $cita['Aceptapagar']}}</td>
            <td>{{ $cita['Numeropersonal']}}</td>





          </tbody>
          @endforeach


          @endif
        </table>


      </div>





    </div>



  </div>
  </div>
  </div>
</section>
@endsection