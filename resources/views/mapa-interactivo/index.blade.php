@extends('layouts.app')

@section('dataBaseCss')
{{-- ESTA SECTION SOLO ES PARA LAS TABLAS RESPONSIVAS --}}
<link rel="stylesheet" href="{{ asset('assets/css/dataTable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/dataTable/responsive.bootstrap4.min.css')}}"> 
<link rel="stylesheet" href="{{ asset('assets/css/dataTable/select.bootstrap4.css')}}"> 
@endsection


@section('content')
    <section class="section">
        <div class="section-header" style="max-height: 3rem;">
            <h5 class="page__heading">Armarios:</h5>
 
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <h3 class="page__heading">registro de Armarios:</h3><br>
                            <table  class="table table-striped table-bordered" style="width:100%" id="hola">
                                <thead style="background-color:#315d9a;">
                                    <tr>
                                        
                                  <th style="color: #fff;">NOMBRE</th>
                                  <th style="color: #fff;">TELEFONO</th>
                                  <th style="color: #fff;">CONTACTO</th>
                                  <th style="color: #fff;">DIRECCION</th>
                                  <th style="color: #fff;">MAPA</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($clientes as $cliente)
                                  <tr>
                                   
                                    <td>{{$cliente->cliente}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->contacto}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                  
                                
                                    <td> <a href="{{$cliente->gps}}" class="btn btn-primary" target="_black">Ver mapa</a> </td>| 
                                 
                  
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                          
            @section('dataTable_js')
             
            <script src="{{ asset('assets/js/dataTable/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTable/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTable/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('assets/js/responsive.bootstrap4.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script> --}}
          
     
  
    <script>

$(document).ready(function(){

        $('#hola').DataTable({
          responsive: true,

    

            autoWidth: false,
        
           

    
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - prueba de nuevo",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "no hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search" : "Buscar:",
            "paginate":{
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        });

      });

  
    </script>

  @endsection
    

                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    

@endsection
