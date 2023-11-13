@extends('layouts.app')
@section('title')
Permisos de ventas almacenados
@endsection
  @section('content')
    <section>
      <div class="section-header" style="max-height: 3rem;">
      </div>
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Permisos de ventas almacenados:</h5>
      <div class="section-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                @if(Session::has('notiConfirmado') )
                <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                 <h5 class="alert-heading">!Almacenado!</h5>
                  <strong>{{Session('notiConfirmado')}}  </strong>
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

           @if(Session::has('notiBorrado') )
           <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
             <h5 class="alert-heading">!Eliminado!</h5>
               <strong>{{Session('notiBorrado')}}  </strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
            </div>
            @endif
                            {{-- inicio --}}
                            <center>
                            <div id="input-daterange" class="row input-daterange">
                              <div class="col-md-2">
                                  <input type="text" style="margin-top: 0.3rem" name="from_date" id="from_date" class="form-control" placeholder="Del" readonly />
                              </div>
                              <div class="col-md-2">
                                  <input type="text" style="margin-top: 0.3rem" name="to_date" id="to_date" class="form-control" placeholder="Hasta" readonly />
                              </div>
                              <div class="col-md-3">
                                <div class="d-flex">
                                  <button style="  margin-top: 0.5rem;" type="button" name="filter" id="filter" class="btn btn-outline-primary font-weight-bold"><i class="fa fa-search" aria-hidden="true"></i> Filtrar</button>
                                  <button style="margin-top: 0.5rem" type="button" name="refresh" id="refresh" class="btn btn-outline-info font-weight-bold"><i class="fa fa-spinner" aria-hidden="true"></i> Limpiar</button>
                                  </div>
                                </div>
                          </div>
                          <hr>
                        </center>
                            <table id="permisoPersonal"  class="table table-striped table-bordered table-sm" style="width:100%" >
                                <thead style="background-color:#315d9a;">
                                    <tr>
                                        
                                      <th style="color: #fff;">Nombre</th>
                                      <th style="color: #fff;">Numero personal</th>
                                      <th style="color: #fff;">Hora salida</th>
                                      <th style="color: #fff;">Hora entrada(aprox)</th>
                                      <th style="color: #fff;">Hora entrada(real)</th>
                                      <th style="color: #fff;">Vehiculo</th>
                                      <th style="color: #fff;">Internet</th>
                                      <th style="color: #fff;">Telefono</th>
                                      <th style="color: #fff;">Linea</th>
                                      <th style="color: #fff;">Fecha solicitud</th>
                                      <th style="color: #fff;">Aprobado por</th>
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
          //  select: true,
           dataSrc: "tableData",
           bDestroy: true,
           autoWidth: true,
           dom: '<"dt-buttons"Bf><"clear">lirtp',
   buttons: [{
        extend: 'excel',
        footer: true,
        title: 'Permisos de ventas - Juticalpa Olancho',
        messageTop: 'Permisos de ventas aprobados: del ' + '(' + from_date + ')' +' al '+'(' + to_date + ')',
        filename: 'PasesDeSalidaExcel',
        className: 'btn-success',
        text: 'Excel <i class="far fa-file-pdf"></i>',
        exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                        alignment: 'center',
                        
                    },
      },
      {
                    extend: 'pdf',
                    filename: 'Export_File',
                    text: 'PDF <i class="far fa-file-pdf"></i>',
                    download: 'open',
                    orientation: 'landscape',
                    className: 'btn-danger',
                    title:'Permisos de ventas - Juticalpa Olancho',
                    customize: function ( doc ) {
                      doc.styles.tableBodyEven.alignment = 'center';
                      doc.styles.tableBodyOdd.alignment = 'center'; 
                      doc.styles.table = 'borderer';
                    doc.content.splice( 1, 0, {
                      
                        margin: [ 0, 0, 0, 4 ],
                        alignment: 'left',
                        width: 190,
                        image: 'data:image/png;base64,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'
                    } ,
                    {
        margin: [4, 4],
        text: 'Permisos de ventas aprobados: del ' + '(' + from_date + ')' +' al '+'(' + to_date + ')',
        fontSize: 12,
        alignment: 'left',
      },
      
      {
        margin: [4, 4, 8, 8],
        text: 'Jefe agencia departamental: ____________________________   Jefe recursos humanos: ____________________________',
        fontSize: 12
      }
                    );
                  },
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7,8, 9, 10],
                        alignment: 'center',
                    },
                },              
    ],

           ajax: {
            url:'{{ route("ventas-rc.index") }}',
            data:{from_date:from_date, to_date:to_date}
           },
           columns: [
            {
             data:'empleados.nombreEmpleado',
             name:'empleados.nombreEmpleado'
            },
            {
             data:'empleados.id',
             name:'empleados.id'
            },
            {
             data:'horaSalida',
             name:'horaSalida'
            },
           
            {
             data:'horaEntradaAproximada',
             name:'horaEntradaAproximada'
            },
            {
             data:'horaEntradaReal',
             name:'horaEntradaReal'
            },
            
            {
             data:'vehiculoDescripcion',
             name:'vehiculoDescripcion'
            },
            {
             data:'internetVendido',
             name:'internetVendido'
            },
            {
             data:'telefonoVendido',
             name:'telefonoVendido'
            },
            {
             data:'lineaVendida',
             name:'lineaVendida'
            },
           
            {
            data:'fechaSolicitudPermiso',
             name:'fechaSolicitudPermiso'
            },
            {
             data:'nombreQuienCreo',
             name:'nombreQuienCreo'
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
