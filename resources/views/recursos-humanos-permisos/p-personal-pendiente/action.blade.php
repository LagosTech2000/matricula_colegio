<div class="d-flex">
    <form action=" {{url('/recursos-humanos-permisos/p-personal-pendiente/'.$data->id)}} " method="post"> 
        {{ method_field('PATCH')}} 
        @csrf  
              <input class="form-control" type="hidden" name="aprobacion" readonly id="aprobacion" value="almacenado">
         
              @can('recursos-humanos-ver') <button onclick="return confirmarFunction()" style="margin-right: 0.3rem" type="submit" class="btn btn-primary btn-sm formulario-eliminar">Almacenar</button>
              @endcan
</form>
    <form id="borrarForm" action=" {{ route('p-personal-pendiente.destroy',$data->id) }}"  id="MensajeBorrar" method="post">
        @method('DELETE')
        @csrf
        @can('recursos-humanos-editar')<button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
        @endcan
    </form></td>
    
    </div>
    