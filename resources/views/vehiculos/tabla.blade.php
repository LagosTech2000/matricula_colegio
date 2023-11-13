@extends('layouts.app')
@section('title')
Vehiculos
@endsection
  @section('content')
    <section>
      <div class="section-header" style="max-height: 3rem;">
      </div>
      <h5 style="background-color:white; padding:0.4rem; border-radius:1rem;" id="paseSalidaMensaje">Orden De Vehiculo</h5>
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
                  <h5 class="alert-heading">!Expediente Editado!</h5>
                    <strong>{{Session('notiEditado')}}  </strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 @endif

                 @if(Session::has('notiGuardado') )
                 <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                   <h5 class="alert-heading">! Expediente Guardado!</h5>
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

                            <ul class="row">
                                <li class="media">
                                     <div class="media-body xs-md-3" >
                                          <a href="{{ route('vehiculos.create') }}"    class="btn btn-primary btn-lg " id="botonGuardar" type="button p" style="font-size: 15px "><i style="font-size: 15px"  class="fa fa-user-circle" aria-hidden="true"  ></i> Generar Orden</a>
                                    </div>
                                </li>
                            </ul>
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
                            <table id="vehiculos"  class="table table-striped table-bordered table-sm text-center" style="width:100%" >
                              <thead style="background-color:#315d9a;">
                                    <tr>

                                      <th style="color: #fff;">Numero de vehiculo</th>
                                      <th style="color: #fff;">Placa</th>
                                      <th style="color: #fff;">Marca</th>
                                      <th style="color: #fff;">Kilometraje</th>
                                      <th style="color: #fff;">Cantidad de combustible Gal </th>
                                      <th style="color: #fff;">Numero personal</th>
                                      <th style="color: #fff;">Nombre de empleado</th>
                                      <th style="color: #fff;">Agencia</th>
                                      <th style="color: #fff;">Observacion</th>
                                      <th style="color: #fff;">Fecha Creacion</th>
                                      <th style="color: #fff;">Accion</th>

                                    </tr>
                              </thead>
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
          $('#vehiculos').DataTable({
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
            url:'{{ route("vehiculos.index") }}',
            data:{from_date:from_date, to_date:to_date}
           },
           columns: [
            {
             data:'numerodevehiculo',
             name:'numerodevehiculo'
            },
            {
             data:'placa',
             name:'placa'
            },

            {
             data:'marca',
             name:'marca'
            },
            {
             data:'kilometraje',
             name:'kilometraje'
            },

            {
             data:'cantidaddecombustible',
             name:'cantidaddecombustible'
            },

            {
             data:'numeropersonal',
             name:'numeropersonal'
            },

            {
             data:'nombredeempleado',
             name:'nombredeempleado'
            },

            {
             data:'agencia',
             name:'agencia'
            },

            {
             data:'observaciones',
             name:'observaciones'
            },
            {
             data:'fechadecreacion',
             name:'fechadecreacion'
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
