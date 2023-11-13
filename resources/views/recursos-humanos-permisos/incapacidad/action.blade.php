<div class="d-flex">
    @can('recursos-humanos-editar') <a href="{{ route('incapacidad.edit',$data->id) }}" class="btn btn-primary btn-sm" type="button" style="margin-right: 0.3rem">Editar</a>
    @endcan
    
    
    <form id="borrarForm" action=" {{ route('incapacidad.destroy',$data->id) }}"  id="MensajeBorrar" method="post">
     @method('DELETE')
        @csrf
        @csrf
        @can('recursos-humanos-borrar') <button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
        @endcan
          
        </form></td>
    
    </div>
    
    
    