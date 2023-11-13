<div class="d-flex">
    <a href="{{ url('/atencion-al-cliente/lineas-pendientes/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm" type="button" style="margin-right: 0.3rem">agregar numero</a>
    <a target="_blank" href="{{ url('/atencion-al-cliente/lineas-pendientes/'.$data->id.'/imprimir') }}" class="btn btn-success btn-sm" type="button" style="margin-right: 0.3rem">imprimir</a>
    
    <form id="borrarForm" action="{{route('lineas-pendientes.destroy',$data->id)}}"  id="MensajeBorrar" method="post">
        @method('DELETE')
        @csrf
        <button onclick="return DeleteFunction()" type="submit" class="btn btn-danger btn-sm formulario-eliminar">Eliminar</button>
    </div>

    