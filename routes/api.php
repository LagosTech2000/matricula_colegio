<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/papas/identidades', function (Request $request) {
    
    $cuenta= DB::table('padres')->where('identidad', '=', $request->padre_identidad)->count();

    return response()->json($cuenta, 200, [], JSON_PRETTY_PRINT);
       
});


Route::get('/alumnos/papas', function (Request $request) {
    
    $pa = DB::table('padrexalumno')
    ->join('padres', 'padres.id_padre', 'padrexalumno.padre_id')
    ->where('padrexalumno.alumno_id', '=', $request->id_alumno)
    ->get();

    return response()->json($pa, 200, [], JSON_PRETTY_PRINT);
       
}); 



