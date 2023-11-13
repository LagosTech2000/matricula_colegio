<!DOCTYPE html>
<html>

<head>
  <title>-- Imprimir Resumen --</title>

</head>
<style>
  body {
    transform: translateX(-1cm);
    width: 100%;    
    text-align: center;
    
  }
  h2{
    margin: auto;
    transform: translateX(1.25cm);
    
    
  }

  th {
    width: 3.34cm;
    background-color: #102542;
    color: #fff;

  }

  td {
    text-align: center;
    font-size: 15px;
    font-weight: bold;
  }

  img{
        width: 70;
        height: 70;
        margin-left: 50;
        

    }
    
</style>

<body>
<img   src="{{ ('img/hondu.jpg') }}" >       

  <hr width="115%">
  <h2>HISTORIAL DE CITAS</h2>
  <hr width="115%">
  

      <table id="porid" class="table table-striped table-bordered table-sm text-center" style="width:100%">
        <thead style="background-color:#315d9a;">



          <tr>           

            <th>Codigo</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Resultado</th>
            <th>Acepto Pagar</th>
            <th>Numero Personal</th>



          </tr>
        </thead>

        @if(isset($citas))
        <tbody>
          @foreach($citas as $cita)
       <tr>

         <td>{{$cita['IdCobranza']}}</td>
         <td>{{$cita['fecha']}}</td>
         <td>{{$cita['seencontroalcliente']}}</td>
         <td>{{ $cita['Resultado']}}</td>
         <td>{{ $cita['Aceptapagar']}}</td>
         <td>{{ $cita['Numeropersonal']}}</td>
         
        </tr>




        </tbody>
        @endforeach


        @endif
      </table>

    </center>
</body>

</html>