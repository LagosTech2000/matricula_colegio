@extends('layouts.app')
  @section('content')
    <section class="section">
      <div class="section-header" style="max-height: 3rem;">
        
        <h5 class="page__heading">Clientes Almacenados:</h5>
      </div>
      
      <div class="section-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                @if(Session::has('notiGuardado') )
                <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                 <h5 class="alert-heading">!Guardado!</h5>
                  <strong>{{Session('notiGuardado')}}  </strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
           </div>
          @endif

          @if(Session::has('notiBorrado') )
          <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
           <h5 class="alert-heading">!Borrado!</h5>
            <strong>{{Session('notiBorrado')}}  </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
     </div>
    @endif
                            {{-- inicio --}}
                            
                   <table  class="table table-striped table-bordered table-sm" style="width:100%; border:2px;" id="order_table">
                     <thead style="background-color:#315d9a;">
                       <tr>          
                         <th style="color: #fff;">Nombre del cliente</th>
                         <th style="color: #fff;">Direccion</th>
                         <th style="color: #fff;">Telefono</th>  
                         <th style="color: #fff;">Contacto</th>
                         <th style="color: #fff;">Gps</th>     
                         <th style="color: #fff;">Acciones</th>                   
                        
                        </tr>
                      </thead>
                        <tbody>
                                
                         </tbody>
                    </table>
                            {{-- final --}}
                            
                     @section('scripts') 

                     
     
     <script>
            function DeleteFunction() {
                if (confirm('seguro que deseas borrar este registro?'))
                    return true;
                else {
                    return false;
                }
            }
        </script> 
                  
                            
                           

                            <script>

$(document).ready(function(){

 load_data();

 function load_data(from_date = '', to_date = '')
 {
  $('#order_table').DataTable({
    "language": {
                         "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                                },
   processing: true,
   serverSide: true,
   responsive: true,
  //  select: true,
   dataSrc: "tableData",
   bDestroy: true,
   autoWidth: true,
   ajax: {
    url:'{{ route("clientegps.index") }}',
    data:{from_date:from_date, to_date:to_date}
   },
   columns: [
    {
     data:'cliente',
     name:'cliente'
    },
    {
     data:'direccion',
     name:'direccion'
    },
    {
     data:'telefono',
     name:'telefono'
    },
    {
     data:'contacto',
     name:'contacto'
    },
    {
     data:'gps',
     name:'gps'
    },
    {
     data:'action',
     name:'action'
    },
   
    
    

   ],
  

  });
 }



});
    
                            </script>

                                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@endsection

