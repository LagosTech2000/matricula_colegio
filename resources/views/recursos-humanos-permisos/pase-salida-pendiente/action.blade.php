<div class="d-flex">
    @can('recursos-humanos-ver')<a href="{{ route('pase-salida-pendiente.edit',$data->id) }}" class="btn btn-primary btn-sm" type="button" style="margin-right: 0.3rem">Confirmar</a>
    @endcan
    
    <form id="borrarForm" action=" {{ route('pase-salida-pendiente.destroy',$data->id) }}"  id="MensajeBorrar" method="post">
        @method('DELETE')
        @csrf
        @can('recursos-humanos-borrar') <button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
        @endcan
          
        </form>
    
    </div>