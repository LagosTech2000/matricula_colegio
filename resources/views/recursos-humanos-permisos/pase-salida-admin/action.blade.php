<div class="d-flex">
    @can('admin-ver')<a href="{{ route('pase-salida-admin.edit',$data->id) }}" class="btn btn-primary btn-sm" type="button" style="margin-right: 0.3rem">Ver</a>
          @endcan
         <form id="borrarForm" action=" {{ route('pase-salida-admin.destroy',$data->id) }}"  id="MensajeBorrar" method="post">
        @method('DELETE')
        @csrf
        @can('admin-borrar')  <button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
        </form></td>
        @endcan
    </div>