<?php

namespace App\Http\Controllers\alumno;

use App\Models\archivos\Archivos;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Psy\Command\WhereamiCommand;
use Svg\Tag\Rect;

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = DB::table("alumnos")
            ->get();

        $grado = DB::table('grado')->get();

        return view('/alumnos/alumnos')->with(['data' => $data, 'grado' => $grado]);
    }
    public function guardar(Request $request)
    {
        $nombre =  $request->nombre;
        $apellido = $request->apellido;

        if (strlen($nombre) > 6 and strlen($apellido) > 6) {

            DB::table("alumnos")->insert(
                [
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'matriculado' => 0

                ]
            );

            Session::flash('noti', 'Se guardo el alumno!');
            Session::flash('color', 'success');
            Session::flash('msg', 'Exito!');
        } else {
            Session::flash('noti', 'Ingrese datos validos!');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Error!');
        }
        return redirect(url()->current());
    }

    public function eliminar(Request $request)
    {

        DB::table("alumnos")->where('id_alumno', '=', $request->id_alumno)->delete();
        Session::flash('noti', 'Se Elimino el Alumno!');
        Session::flash('color', 'danger');
        Session::flash('msg', 'Exito!');
        return redirect(url()->current());
    }

    public function edit(Request $request)
    {
        $grado = DB::table('grado')->get();
        return View('alumnos/editar')->with(['data' => $request, 'grado' => $grado]);
    }

    public function editar(Request $request)
    {
        $nombre =  $request->nombre;
        $apellido = $request->apellido;

        if (strlen($nombre) > 6 and strlen($apellido) > 6) {

            DB::table("alumnos")->where('id_alumno', '=', $request->id_alumno)->update(
                [
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido
                ]
            );

            Session::flash('noti', 'Se guardo el alumno!');
            Session::flash('color', 'success');
            Session::flash('msg', 'Exito!');
        } else {
            Session::flash('noti', 'Ingrese datos validos!');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Error!');
        }
        return redirect()->route('alumno.index');
    }

    public function padre(Request $request)
    {
        $data = DB::table('padrexalumno')
            ->where('alumno_id', '=', $request->id_alumno)
            ->join('padres', 'padres.id_padre', '=', 'padrexalumno.padre_id')
            ->get();

        $padres = DB::table('padres')->get();

        return View('alumnos/padre')->with(['padrexalumno' => $data, 'alumno' => $request, 'padres' => $padres]);
    }

    public function padresave(Request $request)
    {

        DB::table('padrexalumno')
            ->insert([
                'alumno_id' => $request->alumno,
                'padre_id' => $request->padre,
                'rol' => $request->rol
            ]);

        Session::flash('noti', 'Se guardo el Padre!');
        Session::flash('color', 'success');
        Session::flash('msg', 'Exito!');
        return redirect()->route('alumno.index');
    }

    public function padreeliminar(Request $request)
    {

        DB::table('padrexalumno')
            ->where('padre_id', '=', $request->padre)
            ->where('alumno_id', '=', $request->alumno)
            ->delete();

        Session::flash('noti', 'Se elimino el padre!');
        Session::flash('color', 'danger');
        Session::flash('msg', 'Exito!');
        return redirect()->route('alumno.index');
    }
}
