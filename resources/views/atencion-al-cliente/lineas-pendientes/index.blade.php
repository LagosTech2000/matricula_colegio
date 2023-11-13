@extends('layouts.app')
@section('title')
Lineas pendientes
@endsection
  @section('content')
    <section>
      <div class="section-header" style="max-height: 3rem;">
        {{-- <h5 class="page__heading">Recursos Humamos</h5> --}}
      </div>
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Lineas pendientes:</h5>
      <div class="section-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

       @if(Session::has('notiBorrado') )
       <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
         <h5 class="alert-heading">!Eliminado!</h5>
           <strong>{{Session('notiBorrado')}}  </strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
        </div>
        @endif

        @if(Session::has('notiEditado') )
        <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">!Editado!</h5>
            <strong>{{Session('notiEditado')}}  </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
         </div>
         @endif
                            {{-- inicio --}}
                          
                        
                            <table id="permisoPersonal"  class="table table-striped table-bordered table-sm" style="width:100%" >
                                <thead style="background-color:#315d9a;">
                                    <tr>
                                        
                                      <th style="color: #fff;">Nombre</th>
                                      <th style="color: #fff;">Identidad</th>
                                      <th style="color: #fff;">Contacto</th>
                                      <th style="color: #fff;">Correo</th>
                                      <th style="color: #fff;">Numero de linea:</th>  
                                      <th style="color: #fff;">estado</th>
                                      <th style="color: #fff;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
    

                            {{-- final --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
         $('#input-daterange').datepicker({
          todayBtn:'linked',
          format:'yyyy-mm-dd',
          language: 'es',
          autoclose:true
         });
        
         load_data();
        
         function load_data(from_date = '', to_date = '')
         {
          $('#permisoPersonal').DataTable({
            "language": {
                                 "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                                        },
           processing: true,
           serverSide: true,
           responsive: true,
           dataSrc: "tableData",
           bDestroy: true,
           autoWidth: true,
          //  dom: '<"dt-buttons"Bf><"clear">lirtp',
  
           ajax: {
            url:'{{ route("lineas-pendientes.index") }}',
            data:{from_date:from_date, to_date:to_date}
           },
           columns: [
            {
             data:'clienteNombre',
             name:'clienteNombre'
            },
            {
             data:'id',
             name:'id'
            },
            {
             data:'telefonoContacto',
             name:'telefonoContacto'
            },
           
            {
             data:'clienteCorreo',
             name:'clienteCorreo'
            },
            {
             data:'numLinea',
             name:'numLinea'
            },

            {
             data:'estado',
             name:'estado'
            },
                      
            
            {
             data:'action',
             name:'action'
            },
            
                
           ],
          
        
          });
         }
        
         $('#filter').click(function(){
          var from_date = $('#from_date').val();
          var to_date = $('#to_date').val();
          if(from_date != '' &&  to_date != '')
          {
           $('#order_table').DataTable().destroy();
           load_data(from_date, to_date);
          }
          else
          {
           alert('Both Date is required');
          }
         });
        
         $('#refresh').click(function(){
          $('#from_date').val('');
          $('#to_date').val('');
          $('#order_table').DataTable().destroy();
          load_data();
         });
        
        });
            
</script>

          
        
  @endsection
@endsection