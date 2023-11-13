@extends('layouts.app')
@section('title')
Empleados
@endsection
  @section('content')
    <section>
      <div class="section-header" style="max-height: 3rem;">
      </div>
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Empleados almacenados:</h5>
      <div class="section-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <strong>Revise los campos</strong>
        @foreach($errors->all() as $error)
          <span class="badge badge-danger">{{$error}}</span>
        @endforeach
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
         <h5 class="alert-heading">!Eliminado!</h5>
           <strong>{{Session('notiBorrado')}}  </strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
        </div>
        @endif

                            {{-- inicio --}}

                            <ul class="list-unstyled">
                              <li class="media">

                                <div class="media-body">
                                  <a href="{{ route('empleados.create') }}" class="btn btn-primary" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 16px" class="fa fa-user-circle" aria-hidden="true"></i> Crear empleado</a>
                                </div>
                              </li>
                          </ul>

                            <table id="permisoPersonal"  class="table table-striped table-bordered table-sm text-center" style="width:100%" >
                                <thead style="background-color:#315d9a;">
                                    <tr>

                                    <th style="color: #fff;">id</th>
                                      <th style="color: #fff;">Nombre</th>                                      
                                      <th style="color: #fff;">Telefono</th>      
                                      <th style="color: #fff;">Identidad</th>
                                      <th style="color: #fff;">Area de trabajo:</th>
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

           ajax: {
            url:'{{ route("empleados.index") }}',
            data:{from_date:from_date, to_date:to_date}
           },
           columns: [
            {
             data:'id',
             name:'id'
            },
            {
             data:'nombreEmpleado',
             name:'nombreEmpleado'
            },
            {
             data:'telefonoEmpleado',
             name:'telefonoEmpleado'
            },

            {
             data:'numIdentidadEmpleado',
             name:'numIdentidadEmpleado'
            },
            {
             data:'areaTrabajo',
             name:'areaTrabajo'
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
