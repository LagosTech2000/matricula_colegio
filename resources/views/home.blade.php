@extends('layouts.app')
@section('title')
Inicio
@endsection
@section('content')
<section class="section">
  <div class="section-header" style="max-height: 3rem;">
    <h5 class="page__heading">Inicio</h5>
  </div>
  {{-------------------------- NOTIFICACIONES INICIO--------------------------------------}}

  @if(Session::has('noti') )
  <div style="max-height: 4.5rem; max-width: 20rem;" class="alert alert-{{Session('color')}} alert-dismissible fade show" role="alert">
    <h5 class="alert-heading">{{Session('msg')}}</h5>
    <strong>{{Session('noti')}} </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  {{-------------------------- NOTIFICACIONES FINAL----------------------------------------}}



  <div id="custom-alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" onclick="cerrarAlerta()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="fs-3" id="alert-message">Bienvenido a la plataforma de matricula {{$year}}!</p>

    </div>

  {{-------------------------- INICIO --------------------------}}
  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            <div class="row">
              <div class="col-12 col-md-6">
                <form action="{{route('matricula.index')}}">
                  @csrf
                  <button name="nuevo" value="nuevo" type="submit" class="btn btn-outline-primary form-control mb-3 fs-6">
                    <i class="fas fa-user-plus"></i> <!-- Icono representativo para alumnos ya ingresados -->
                    Matricular Alumno Nuevo
                  </button>
                </form>
              </div>

              <div class="col-12 col-md-6">
                <form action="{{route('matricula.index')}}">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary form-control fs-6">
                    <i class="fas fa-graduation-cap"></i> <!-- Icono representativo para alumnos ya ingresados -->
                    Matricular Alumno Existente
                  </button>
                </form>
              </div>

            </div>

            <div class="row">

              <div class="col-12 col-md-6">
                <form action="{{route('detalle.alumno')}}">

                  <button type="submit" class="btn btn-outline-primary form-control mb-3 fs-6">
                    <i class="fas fa-user-friends"></i> <!-- Icono representativo para alumnos ya ingresados -->
                    Detalles de Alumnos
                  </button>
                </form>
              </div>

              <div class="col-12 col-md-6">
                <form action="{{route('detalle.matricula')}}">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary form-control fs-6">
                    <i class="fas fa-book-open"></i> <!-- Icono representativo para alumnos ya ingresados -->
                    Detalles de Matriculas
                  </button>
                </form>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-------------------------- FINAL ---------------------------}}

@section('scripts')
<script>
  // INICIO mostrar la notificacion de recursos humanos
  var notificacionRecursosHumanos = document.getElementsByName("NotificacionRecursosH")[0].value;;
  console.log(notificacionRecursosHumanos);
  $(function() {
    if (notificacionRecursosHumanos > 0) {
      $('#notificaciones').show();
    }
  });
  // FINAL mostrar la notificacion de recursos humanos 

  // INICIO recargar automaticamente el inico
  $(document).ready(function() {
    setTimeout(refrescar, 20000);
  });

  function refrescar() {
    location.reload();
  }

  function cerrarAlerta() {
        document.getElementById("custom-alert").classList.remove("d-block");
        document.getElementById("custom-alert").classList.add("d-none");
    }

</script>
@endsection

@endsection