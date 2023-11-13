<div class="d-flex">
    <a href="{{ $data->gps }}" class="btn btn-primary btn-sm" type="button" target="_blink" style="margin-right: 0.3rem">Ver</a>
    <a href="{{ route('clientegps.edit',$data->id) }}" class="btn btn-success btn-sm" type="button"  style="margin-right: 0.3rem">Editar</a>
    
    
    <form id="borrarForm" action=" {{ route('clientegps.destroy',$data->id) }}"  id="MensajeBorrar" method="post">
        @method('DELETE')
        @csrf
        <button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
       
          
        </form></td>
    
    </div>