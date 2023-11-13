@extends('layouts.app')

@section('content')
<style>  



  </style>
<h2>Dashboard Cobranzas</h2>
<div class="section-body p-5">
<center>

  <div class="row">

    <!-- tercer canvas -->

    <div class="col-5" style="width:50%; " >
      <canvas id="chart"></canvas>
    </div>

    <!-- tercer canvas -->

    <div class="col-7" style="width:40%;" >
    <h>Total De Mora : {{$totalMora}}</h4>                             

      <canvas id="chart2"></canvas>
    </div>
    
  </div>

<br>
<div class="row">

    <!-- tercero -->

    <div class="col-5" style="width:50%; " >
      <canvas id="chart3"></canvas>
    </div>   

    <div class="col-7" style="width:50%;" >
     <!-- cuarto -->
    <form action="{{ route('dashboardCobranza') }}" method="post">
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
                                  
                                  <input name="filtroDashboard" class="mb-2   btn btn-primary btn-xs mt-2" type="submit" value="Buscar">

                                </form>
                            @if(isset($sumMoras))
       <h>Total De Mora entre Fechas: {{$sumMoras}}</h4>                                
       @endif
      <canvas id="chart4"></canvas>

    </div>

    
    
    
      
  
</div>


@endsection

@section('scripts')
  
  <script>
 var ctx = document.getElementById('chart').getContext('2d');
var chart = new Chart(ctx, {
  type: 'doughnut', // Cambiar el tipo de gráfico de barras a torta
  data: {
    labels: {!! json_encode($data1->keys()) !!},
    datasets: [{
      label: 'Cantidad de Clientes por dirección',
      data: {!! json_encode($data1->values()) !!},
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
  type: 'bar', // Cambiar el tipo de gráfico de barras a torta
  data: {
    labels: {!! json_encode($data2->keys()) !!},
    datasets: [{
      label: '% de Clientes',
      data: {!! json_encode($data2->values()) !!},
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
      borderWidth: 2,
     
    }]
  },
  options: {
    tooltips: {
    callbacks: {
      label: function(tooltipItem, data) {
        var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
        return value + '%';
      }
    }
  },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,          
        }
      }]
    }
    
  }
  
});

      </script>  


<script>
    
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'pie',  
      data: {
        labels: {!! json_encode($data3->keys()) !!},
        datasets: [{
          label: '% de Clientes',
          data: {!! json_encode( $data3->values()) !!},
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
    // Obtiene el canvas y crea el contexto de gráficos
    if({!! json_encode($fechas) !!}){
    var ctx = document.getElementById('chart4').getContext('2d');
    
    // Crea el gráfico de línea
    var chart = new Chart(ctx, {
      type: 'line',
      
      // Configura los datos del gráfico
  data: {
    labels: {!! json_encode($fechas) !!},
    datasets: [{
      label: 'Mora',
      data: {!! json_encode($moras) !!} ,
      borderColor: 'blue',
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

@endsection 

