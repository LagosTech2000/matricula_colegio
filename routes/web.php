<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Rutas para la autorizacion de usuarios:
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('tareas', TareaController::class);
});

//MATRICULA
//________________________________________GRADO(INICIO)______________________________________________________//
Route::get('/grado/index', [App\Http\Controllers\grado\gradoController::class, 'index'])->name('grado.index');
Route::post('/grado/index', [App\Http\Controllers\grado\gradoController::class, 'guardar'])->name('grado.guardar');
Route::delete('/grado/index', [App\Http\Controllers\grado\gradoController::class, 'eliminar'])->name('grado.eliminar');
Route::get('/grado/editar', [App\Http\Controllers\grado\gradoController::class, 'edit'])->name('grado.edit');
Route::post('/grado/editar', [App\Http\Controllers\grado\gradoController::class, 'editar'])->name('grado.editar');
Route::get('/grado/seccion', [App\Http\Controllers\grado\gradoController::class, 'seccion'])->name('grado.seccion');
Route::post('/grado/seccion', [App\Http\Controllers\grado\gradoController::class, 'seccionsave'])->name('grado.seccion.save');
Route::delete('/grado/seccion', [App\Http\Controllers\grado\gradoController::class, 'secciondelete'])->name('grado.seccion.eliminar');
Route::put('/grado/seccion', [App\Http\Controllers\grado\gradoController::class, 'seccionedit'])->name('grado.seccion.editar');
//________________________________________GRADO(FINAL)______________________________________________________//

//________________________________________ALUMNOS(INICIO)______________________________________________________//
Route::get('/alumno/index', [App\Http\Controllers\alumno\alumnoController::class, 'index'])->name('alumno.index');
Route::post('/alumno/index', [App\Http\Controllers\alumno\alumnoController::class, 'guardar'])->name('alumno.guardar');
Route::delete('/alumno/index', [App\Http\Controllers\alumno\alumnoController::class, 'eliminar'])->name('alumno.eliminar');
Route::get('/alumno/editar', [App\Http\Controllers\alumno\alumnoController::class, 'edit'])->name('alumno.edit');
Route::post('/alumno/editar', [App\Http\Controllers\alumno\alumnoController::class, 'editar'])->name('alumno.editar');
Route::get('/alumno/padres', [App\Http\Controllers\alumno\alumnoController::class, 'padre'])->name('alumno.padre');
Route::post('/alumno/padres', [App\Http\Controllers\alumno\alumnoController::class, 'padresave'])->name('alumno.padre.guardar');
Route::delete('/alumno/padres', [App\Http\Controllers\alumno\alumnoController::class, 'padreeliminar'])->name('alumno.padre.eliminar');
//________________________________________ALUMNOS(FINAL)______________________________________________________//

//________________________________________MATRICULA(INICIO)______________________________________________________//

Route::get('/matricula/index', [App\Http\Controllers\matricula\matriculaController::class, 'index'])->name('matricula.index');
Route::post('/matricula/index', [App\Http\Controllers\matricula\matriculaController::class, 'save'])->name('matricula.save');

//________________________________________MATRICULA(FINAL)______________________________________________________//

//________________________________________DETALLE(INICIO)______________________________________________________//
Route::get('/detalle/alumno', [App\Http\Controllers\detalle\detalleController::class, 'detallealumno'])->name('detalle.alumno');
Route::get('/detalle/matricula', [App\Http\Controllers\detalle\detalleController::class, 'detallematricula'])->name('detalle.matricula');
Route::get('/detalle/seccion', [App\Http\Controllers\detalle\detalleController::class, 'detalleseccion'])->name('detalle.seccion');

//________________________________________DETALLE(FINAL)______________________________________________________//


//________________________________________PADRES(INICIO)______________________________________________________//

Route::get('/padres/index', [App\Http\Controllers\padre\padreController::class, 'index'])->name('padres.index');
Route::post('/padres/index', [App\Http\Controllers\padre\padreController::class, 'save'])->name('padres.save');
Route::delete('/padres/index', [App\Http\Controllers\padre\padreController::class, 'delete'])->name('padres.eliminar');
Route::get('/padres/editar', [App\Http\Controllers\padre\padreController::class, 'edit'])->name('padres.edit');
Route::post('/padres/editar', [App\Http\Controllers\padre\padreController::class, 'editar'])->name('padres.editar');
//________________________________________PADRES(FINAL)______________________________________________________//








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
