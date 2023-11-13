
@extends('layouts.auth_app')
@section('title')
    Matricula
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"></div>

        <div class="card-body">
            <div class="form-group">
            @if (Route::has('login'))
            <div>
                @auth
                    <a  class="btn btn-primary btn-lg btn-block" style="font-size: 15px" type="button" href="{{ url('/home') }}" >Home</a>
                @else
                    <a  class="btn btn-primary btn-lg btn-block" style="font-size: 15px" href="{{ route('login') }}" >Iniciar sesion</a>

                @endauth
            </div>
        </div>
        </div>
        @endif
                
        </div>
    </div>
@endsection

