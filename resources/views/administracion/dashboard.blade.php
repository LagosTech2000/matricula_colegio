@extends('layouts.app')

@section('content')
<style>  



  </style>
  <h2>Dashboard Archivos</h2>
<div class="section-body p-5">
<center>

<div class="row">
<div class="me-5 col-5 card fs-3 text-dark bg-primary mb-3" >
  <div class="card-header "><i class="fs-2 text-warning fas fa-users"></i>&nbsp;Total de Clientes: {{$totalclientes}} </div>  

    </div>    

    



<div class="ms-5 col-5 fs-3 card text-dark bg-primary mb-3" >
  <div class="card-header"><i class="fs-2 text-warning fas fa-file"></i>&nbsp; Total Expedientes:  {{$totalexpedientes}}</div>  

</div>


<br>    

  <div class="row">

    <!-- tercer canvas -->

    <div class="me-3 col-5" style="width:50%; " >
      <canvas id="chart"></canvas>
    </div>

    <br>

    <!-- tercer canvas -->

    <div class="ms-5 col-6" style="width:50%;" >
                             <br> 

      <canvas id="chart2"></canvas>
    </div>
    
  </div>
  <br>
  <br>

  <div class="row">

    <!-- tercer canvas -->
    <div class="col-6" style="width:50%; " >
      <br>
      <br>
      <canvas id="chart3"></canvas>
    </div>

    <!-- tercer canvas -->

    <div class="ms-5 col-4" style="width:50%;" >                              

      <canvas id="chart4"></canvas>
    </div>
    
  </div>

  <div class="row">
    
<center>

  
  <div class="col-7" style="width:100%; " >
    <br>
    <br>
    <canvas id="chart5"></canvas>
  </div>
  
</center>
  

    
  </div>

<br>

@endsection

@section('scripts')
  
  <script>
 var ctx = document.getElementById('chart').getContext('2d');
var chart = new Chart(ctx, {
  type: 'polarArea', // Cambiar el tipo de gráfico de barras a torta
  data: {
    labels: {!! json_encode($data1->keys()) !!},
    datasets: [{
      label: 'Cantidad de expedientes por municipio',
      data: {!! json_encode($data1->values()) !!},
      backgroundColor: [
        'rgba(255, 69, 0, 0.5)',
'rgba(255, 0, 255, 0.5)', 
'rgba(0, 191, 255, 0.5)', 
'rgba(255, 0, 0, 0.5)', 
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
      ],
      borderColor: [
        'rgba(255, 69, 0, 0.5)',
'rgba(255, 0, 255, 0.5)', 
'rgba(0, 191, 255, 0.5)', 
'rgba(255, 0, 0, 0.5)', 
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
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
      label: 'Cantidad de expedientes por estado',
      data: {!! json_encode($data2->values()) !!},
      backgroundColor: [
        'rgba(255, 69, 0, 0.5)',
'rgba(255, 0, 255, 0.5)', 
'rgba(0, 191, 255, 0.5)', 
'rgba(255, 0, 0, 0.5)', 
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
      ],
      borderColor: [
        'rgba(255, 69, 0, 0.5)',
'rgba(255, 0, 255, 0.5)', 
'rgba(0, 191, 255, 0.5)', 
'rgba(255, 0, 0, 0.5)', 
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
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
 var ctx = document.getElementById('chart3').getContext('2d');
var chart = new Chart(ctx, {
  type: 'bar', // Cambiar el tipo de gráfico de barras a torta
  data: {
    labels: {!! json_encode($data3->keys()) !!},
    datasets: [{
      label: 'Cantidad de expedientes por Tipo de Servicio',
      data: {!! json_encode($data3->values()) !!},
      backgroundColor: [
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
      ],
      borderColor: [        
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
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
 var ctx = document.getElementById('chart4').getContext('2d');
var chart = new Chart(ctx, {
  type: 'pie', 
  data: {
    labels: {!! json_encode($data4->keys()) !!},
    datasets: [{
      label: 'Expedientes por cantidad de servicios',
      data: {!! json_encode($data4->values()) !!},
      backgroundColor: [      
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
      ],
      borderColor: [        
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
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
  type: 'polarArea', 
  data: {
    labels: {!! json_encode($data5->keys()) !!},
    datasets: [{
      label: 'Cantidad de expedientes por servicio adquirido',
      data: {!! json_encode($data5->values()) !!},
      backgroundColor: [      
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
      ],
      borderColor: [        
'rgba(0, 255, 0, 0.5)', 
'rgba(255, 165, 0, 0.5)', 
'rgba(30, 144, 255, 0.5)' 
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
      
      
@endsection 