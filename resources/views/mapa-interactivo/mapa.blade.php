@extends('layouts.app')
@section('content')
  <section class="section">
    <div class="section-header"  style="max-height: 3rem;">
      <h5 class="page__heading">Menu Mapa</h5>
    </div>

        <div class="section-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">

    {{-------------------------- INICIO --------------------------}}
    @foreach($registros as $registro)
    {{-- <h1>Nombre: {{$registro->nombre}}</h1>
    <h1>Latitude: {{$registro->latitude}}</h1>
    <h1>Longitude: {{$registro->longitude}}</h1> --}}
     @endforeach

    
    <div style="height: 500px; width: 1000px;" id="map" style="width: 600px; height: 400px;"></div>
    <script>
       var map = L.map('map').setView([14.6639388, -86.2177902], 18);
       L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);
    </script>


    <script>
var latitude="14.6639388";
var longitude="-86.2177902";
var nombre="Hondutel";
var num="123";



// var hola = L.marker([latitude, longitude], {
// title: nombre,
// draggable:false,
// opacity: 1
// }).bindPopup(nombre)
// .addTo(map);

        

 var registros1 = {!! json_encode($registros) !!}
 console.log(registros1);


 for (let i in registros1){
    registros1[i].nombre;
    registros1[i].longitude;
    registros1[i].latitude;



    //  console.log( registros1[i].nombre,  registros1[i].longitude, registros1[i].longitude);
var hola = L.marker([registros1[i].longitude,  registros1[i].latitude], {
title:  registros1[i].nombre,
draggable:false,
opacity: 1
}).bindPopup(registros1[i].nombre)
.addTo(map);

 }
    </script>
       
    {{-------------------------- FINAL ---------------------------}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   
    

@endsection
