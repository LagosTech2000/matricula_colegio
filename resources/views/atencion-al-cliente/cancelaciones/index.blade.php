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
            <h5 class="page__heading">Cancelaciones</h5>
            
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <h3 class="page__heading">Consulta Cancelaciones:</h3><br><br>
                            <table  class="table table-striped table-bordered" style="width:100%" id="permiso1">
                              <thead style="background-color:#315d9a;">
                                  <tr>
                                      
                                <th style="color: #fff;">id</th>
                                <th style="color: #fff;">Nombre del Cliente</th>
                                <th style="color: #fff;">Contacto</th>
                                <th style="color: #fff;">Nota</th>
                                <th style="color: #fff;">Fecha de cancelacion</th>
                                
                            <th style="color: #fff;">acciones</th>
                                                          
                                
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($registros as $registro)
                                <tr>
                                 
                                    <td>{{$registro->id}}</td>
                                  <td>{{$registro->nombreCliente}}</td>
                                  <td>{{$registro->contacto}}</td>
                                  <td>{{$registro->nota}}</td>
                                  <td>{{$registro->fechaCancelacion}}</td>
                                   <td>
                                    <a type="submit" class="btn btn-primary" href="{{ url('/atencion-al-cliente/cancelaciones/'.$registro->id.'/edit') }}" >editar </a>
                                    <a type="submit" target="_blank" class="btn btn-success" href="{{ url('/atencion-al-cliente/cancelaciones/'.$registro->id.'/imprimir') }}">Imprimir</a>
                                    <form action=" {{route('cancelaciones.destroy',$registro->id)}} " method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>

                                   </td>
                                </tr>
                                @endforeach
                              </tbody>
                          </table>


                          
            @section('dataTable_js')
             
            <script src="{{ asset('assets/js/dataTable/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTable/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTable/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('assets/js/responsive.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
          
     
  
    <script>

$(document).ready(function(){

        $('#permiso1').DataTable({
          responsive: true,
          select: true,
    

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




  
{{-- //    ALERTA de mensaje --}}
 <script>

//   $('.MensajeBorrar').submit(function(e){
//       e.preventDefault();
//       swal({
// title: 'Are you sure?',
// text: "You won't be able to revert this!",
// type: 'warning',
// showCancelButton: true,
// confirmButtonColor: '#3085d6',
// cancelButtonColor: '#d33',
// confirmButtonText: 'Yes, delete it!',
// cancelButtonText: 'No, cancel!',
// confirmButtonClass: 'btn btn-success',
// cancelButtonClass: 'btn btn-danger',
// buttonsStyling: false
// }).then(function () {
// swal(
//   'Deleted!',
//   'Your file has been deleted.',
//   'success'
// )
// }, function (dismiss) {
// dismiss can be 'cancel', 'overlay',
// 'close', and 'timer'
// if (dismiss === 'cancel') {
//   swal(
//     'Cancelled',
//     'Your imaginary file is safe :)',
//     'error'
//   )
// }
// })
// });
  
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