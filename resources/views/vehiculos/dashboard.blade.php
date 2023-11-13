@extends('layouts.app')

@section('content')
<style>  



  </style>
  <h2>Dashboard Combustible</h2>
<div class="section-body p-5">
<center>

<div class="row">
<div class="me-5 col-5 card fs-3 text-dark bg-primary mb-3" >
  <div class="card-header "><i class="fs-2 text-warning fas fa-truck-monster"></i>&nbsp;Total Vehiculos: {{$cuentavehiculos}} </div>  

    </div>    

    



<div class="ms-5 col-5 fs-3 card text-dark bg-primary mb-3" >
  <div class="card-header"><i class="fs-2 text-warning fas fa-book"></i>&nbsp; Total Ordenes: {{$cuentaordenes}}</div>  

</div>


<br>    

  <div class="row">

    <!-- 1 canvas -->

    <div class="me-3 col-5" style="width:50%; " >
      <canvas id="chart"></canvas>
    </div>

    <br>

    <!-- 2 canvas -->

    <div class="ms-3 col-6" style="width:50%;" >
                             <br> 

      <canvas id="chart2"></canvas>
    </div>
    
  </div>

  
  <div class="row">


  </div>
  <br><br><br>

  <div class="row"> 
  <div class="ms-2 col-9" style="width:100%;" >
     <!-- cuarto -->     
    <form action="{{ route('vehiculos-dashboard') }}" method="post">
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
                                  
                                  <input name="filtroDashboard" class="mb-2   btn btn-outline-info btn-xs mt-2" type="submit" value="Buscar">

                                </form>
                            @if(isset($sumCargas))
                            <br>
       <h4>Total De Galones entre Fechas: {{$sumCargas}}</h4>                                
       @endif
       @if(isset($cuentaordenesporfecha))
                            <br>
       <h4>Total De Ordenes entre Fechas: {{$cuentaordenesporfecha}}</h4>                                
       @endif
       <br>
 
         <canvas id="chart3"></canvas>
       
      <br><br>  
      <canvas id="chart4"></canvas>
      
      <br>
    
       <canvas  id="chart5"></canvas>
    
      
    </div>
  </div>

  
  
<br>

  <br>
  <br>
  



  </div>

    
  </div>


@endsection

@section('scripts')
  
<script>
    
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'pie',  
      data: {
        labels: {!! json_encode($data1->keys()) !!},
        datasets: [{
          label: 'Ordenes Por vehiculo',
          data: {!! json_encode( $data1->values()) !!},
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    </script>       
    
    
<script>
    
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'doughnut',  
      data: {
        labels: {!! json_encode($data2->keys()) !!},
        datasets: [{
          label: 'Ordenes por Conductor',
          data: {!! json_encode( $data2->values()) !!},
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    </script>   
@if(isset($cargasPorEmp))

<script>
    // Obtiene el canvas y crea el contexto de gráficos
    if({!! json_encode($fechas) !!}){
    var ctx = document.getElementById('chart3').getContext('2d');
    
    // Crea el gráfico de línea
    var chart = new Chart(ctx, {
      type: 'line',
      
      // Configura los datos del gráfico
  data: {
    labels: {!! json_encode($fechas) !!},
    datasets: [{
      label: 'Carga',
      data: {!! json_encode($cargas) !!} ,
      borderColor: 'darkcyan',
      fill: false
    }]
  },
  
  // Configura las opciones del gráfico
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
}
</script>

<script>
  
 var ctx = document.getElementById('chart4').getContext('2d');
var chart = new Chart(ctx, {
  type: 'polarArea', // Cambiar el tipo de gráfico de barras a torta
  data: {
    labels: {!! json_encode($cargasPorEmp->keys()) !!},
    datasets: [{
      label: 'Cantidad de Galones por conductor entre fechas',
      data: {!! json_encode($cargasPorEmp->values()) !!},
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 2
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
   
      </script>       



<script>
    
    var ctx = document.getElementById('chart5').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'doughnut',  
      data: {
        labels: {!! json_encode($data4->keys()) !!},
        datasets: [{
          label: 'Ordenes Por Conductor entre fechas',
          data: {!! json_encode( $data4->values()) !!},
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    </script>       
    

      @endif
@endsection 