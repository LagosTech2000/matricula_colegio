<!DOCTYPE html>
<html>

<head>
  <title>-- Imprimir Resumen --</title>

</head>

<body style="height:50%;">

  <style>
      #impresoen{
        position: fixed;        
        float: left;
        
      }

    .float-left {
      float: left;
    }

    .float-right {
      float: right;
    }

    p {
      font-size: 13px;
      font-weight: bold;
    }

    h2 {
      font-size: 18px;

    }

    img{
        width: 65;
        height: 65;
        

    }

    #img1{
        

    }

   
  </style>

  <div>

    <hr>
    <!-- //izquierda -->
    
    
    <div style="width:50%;" class="float-left">
    

      <div class="float-left">
        
        <img id="img1" src="{{ ('img/hondu.jpg') }}" >       
        
        
      </div>

      
      <h1 style="text-align:right;font-size:20px; ">ORDEN DE COMBUSTIBLE </h1>
      
    
      <h3 style="text-align:center; font-size:22px; ">Nº {{ $orden['idorden']}}</h3>
      <hr>
      <h1 style="font-size:20px; ">DATOS DEL CONDUCTOR</h1>
      <hr>
      <p>Empleado: {{$orden['idEmpleado']}} {{ $orden['nombreEmpleado']}}</p>
      <p>Asignado a: {{ $orden['areaTrabajo']}}</p>

      <hr>
      <h1 style="font-size:20px; ">DATOS DE LA ORDEN </h1>
      <hr>
      <div class="float-left">

        <p>Gasolinera: {{ $orden['gasolinera']}}</p>

        <p style="width:5cm;margin-bottom:0.8cm;">Nº de factura</p>
        <hr>
        <p>Maximo Litros suministrar: {{round($orden['carga'] * 3.78541,3) }}</p>
        <p style="width:5cm;margin-bottom:0.8cm;">Maximo Litros suministrados:</p>
        <hr>

      </div>

    </div>


    <!-- //derecha -->
    <div style="width:48%" class="float-right">
      
    <h2 style="font-size:22px; ">DATOS DEL VEHICULO </h2>    
    <h3 style="margin-top:22px;">{{$orden['Marca']." ".$orden['modelo']." ".$orden['año'] }}</h3>
    <hr>
    <p>Registrado en {{$orden['orden_created_at']}}</p>
        <div class="float-left">
          <p>No Registro: {{$orden['Numerodevehiculo']}}</p>
          <p>Placa: {{$orden['Placa']}}</p>
          <p>Asignacion: {{$orden['area']}}</p>
          <p>Observacion: {{$orden['Observaciones']}}</p>


        </div>

        <div class="float-right">

          <p>Combustible: {{$orden['combustible']}}</p>
          <p>kilometraje: {{$orden['Kilometraje']}}Km</p>



        </div>





    </div>

    <footer>
      <style>
        .fila{
          width: 50%;
          margin-bottom:1cm;
        }

        #botm{
          
          text-align: center;
          width: 50%;          
          position: fixed;
          bottom:1;
          left: 40%;
          
        }
      </style>
  
  <div id="botm">   
    
    <div class="fila">
      <p>Emisor</p>      
      <br>
      <hr>
      
    </div>
    <div class="fila">
      <p>Conductor</p>
      <p>{{$orden['nombreEmpleado']}}</p>
      <br>

      <hr>
      
    </div>

    <div class="fila">
      <p>Supervisor</p>      
      <br>

      <hr>
      
    </div>
   
    <div class="fila">
      @if($orden['observacion']!=null)
      <p >Observacion: {{$orden['observacion']}}</p>
      @else
      <p >Observacion: Ninguna</p>

      @endif
    </div>     

    
    <p id="impresoen">Impreso el {{now()}}</p>
      
    
          
      </div>

    
    
      
    </footer>

  </div>

  <div>


</body>

</html>