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
            <h4 class="page__heading">Consulta Averia Final</h4>
            
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- inicio --}}
                            <h4 class="page__heading">Datos:</h4><br><br>
                            <table  class="table table-striped table-bordered" style="width:100%" id="permiso1">
                              <thead style="background-color:#315d9a;">
                                  <tr>
                                      
                                <th style="color: #fff;">Nombre del cliente</th>
                                <th style="color: #fff;">Numero de linea</th>
                                <th style="color: #fff;">Contacto</th>
                                <th style="color: #fff;">Direccion</th>
                                <th style="color: #fff;">fecha de Solicitud</th>
                                <th style="color: #fff;">Numero de Armerio</th>
                                <th style="color: #fff;">Caja Terminal</th>
                                {{-- <th style="color: #fff;">Bornes</th>                --}}
                                <th style="color: #fff">acciones</th>
                                <th style="color: #fff">Borrado</th>
                
                                
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($registros as $registro)
                                <tr>
                                 
                                 
                                  <td>{{$registro->nombreCliente}}</td>
                                  <td>{{$registro->numeroDeLinea}}</td>
                                  <td>{{$registro->contacto}}</td>
                                  <td>{{$registro->direccion}}</td>
                                   <td>{{$registro->fechaDeSolicitud}}</td>                           
                                  <td>{{$registro->numerodearmario}}</td>
                                  <td>{{$registro->cajaterminal}}</td>
                                  {{-- <td>{{$registro->bornes}}</td> --}}
                                 

                                  <td> <a title="VER" type="submit" href="{{ route('linea-fija.show', $registro->id) }}"> <i style="font-size:1.4rem;" class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a type="submit" href="{{ url('/atencion-al-cliente/linea-fija/'.$registro->id.'/edit') }}"> <i style="font-size:1.4rem;" class="fas fa-pen-square" aria-hidden="true"></i></a>

                                     {{-- <a type="submit" class="btn btn-primary btn-sm" href="{{ route('linea-fija.show', $registro->id) }}" >ver </a> --}}
                                    {{-- <a type="submit" class="btn btn-primary btn-sm" href="{{ url('/atencion-al-cliente/linea-fija/'.$registro->id.'/edit') }}" >edit </a> --}}
                                  <td> 
                                      <form action=" {{route('linea-fija.destroy',$registro->id)}} " method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-light" title="BORRAR" type="submit"><i style="font-size:1.4rem; color:rgb(235, 110, 110);" class="fa fa-trash" aria-hidden="true"></i></button>
                                    {{-- <button type="submit" class="btn btn-danger btn-sm">Borrar</button> --}}
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
          // select: true,
    

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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  
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