@extends('layouts.app')
@section('title')
  Roles
@endsection
@section('content')
    <section class="section">
        <div class="section-header"  style="max-height: 3rem;">
            <h5 class="page__heading">Roles</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('notiRol') )
                            <div  style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-success alert-dismissible fade show" role="alert">
                              <h5 class="alert-heading">!Guardado!</h5>
                                <strong>{{Session('notiRol')}}  </strong>
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

                             
                            
                             <ul class="list-unstyled">
                                <li class="media">
                                  
                                  <div class="media-body">
                                    {{-- <a class="btn btn-primary" href="{{ route('usuarios.create') }}">nuevo</a> --}}
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary" id="botonCancelar"  type="button"  style="font-size: 12px"><i style="font-size: 15px" class="fa fa-user-lock" aria-hidden="true"></i> Crear rol</a>
                                   {{-- <p>creacion de nuevos usuarios</p> --}}
                                  </div>
                                </li>
                            </ul>
                             
                                 {{-- tabla de roles --}}
                                 <table  class="table table-striped table-bordered  table-sm text-center" style="width:100%; border:2px;" id="roles_tabla">
                                       <thead style="background-color:#315d9a;">
                                           <th class="text-center" style="color: #fff;">Rol</th>
                                          
                                           <th class="text-center" style="color: #fff;">Acciones</th>
                                          
                                       </thead>
                                       <tbody>
                                           @foreach($roles as $role)
                                           <tr>
                                               <td>{{ $role->name }}</td>
                                               <td>
                                                   
                                                     <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Editar</a>
                                                    

                                                   
                                                     {!! Form::open(['method' => 'DELETE', 'route' =>['roles.destroy', $role->id], 'style'=>'display:inline']) !!}
                                                       {!! Form::submit('Borrar',['class' => 'btn btn-danger btn-sm', 'onclick="return DeleteFunction()"']) !!} 
                                                     {!! Form::close() !!}
                                                        
                                               </td>
                                           </tr>
                                           @endforeach
                                       </tbody>
                                   
                                   </table>
                                   {{-- la paginacion --}}
                                   <div class="pagination justify-content-end">
                                       {!! $roles->links() !!}
                                   </div>   

                             {{-- fin --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')

    <script>
      function DeleteFunction() {
          if (confirm('¿seguro que deseas borrar este rol?'))
              return true;
          else {
              return false;
          }
      }

  </script> 


  
   
    <script>

$(document).ready(function(){

$('#roles_tabla').DataTable({
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
@endsection
