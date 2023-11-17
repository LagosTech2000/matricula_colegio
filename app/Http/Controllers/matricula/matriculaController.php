<?php

namespace App\Http\Controllers\matricula;

use App\Models\archivos\Archivos;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Svg\Tag\Rect;

class matriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $year = date('Y');
        $month = date('m');

        $alumno = DB::table('alumnos')
            ->where('matriculado', '=', 0)
            ->get();

        $cuenta_alumnos = $alumno->count();

        if ($month >= 11) {
            $year = $year + 1;
        }

        $gradoxseccion = DB::table('gradoxseccion')
            ->where('year', '=', $year)
            ->select(
                'id_gradoseccion',
                'grado.id_grado AS grado_id_grado',
                'nombre',
                'seccion',
                'cupos',
                'gradoxseccion.docente',
                'name',
                DB::raw('(SELECT COUNT(*) FROM detallematriculas WHERE detallematriculas.id_grado =gradoxseccion.id_grado and gradoxseccion.seccion= detallematriculas.seccion and detallematriculas.year =' . $year . ' and detallematriculas.cancelada=0 ) as cuentacupos')
            )
            ->join('grado', 'grado.id_grado', '=', 'gradoxseccion.id_grado')
            ->leftJoin('users', 'id', '=', 'gradoxseccion.docente')
            ->orderBy('grado.nombre')
            ->orderBy('seccion')
            ->get();

        $padres = DB::table('padres')->get();

        return View('matricula/matricula')->with([
            'alumno' => $alumno,
            'nuevo' => $request->nuevo,
            'gradoxseccion' => $gradoxseccion,
            'cuenta_alumnos' => $cuenta_alumnos,
            'padres' => $padres,
            'year' => $year

        ]);
    }

    public function save(Request $request)
    {

        if (isset($request->id_padre)) $idpadre = $request->id_padre;

        if (isset($request->nuevo)) {


            $cuentaPadresconMismaIdentidad = DB::table('padres')->where('identidad', '=', $request->padre_identidad)->count();

            if ($cuentaPadresconMismaIdentidad > 0) {

                Session::flash('noti', 'Ya existe un encargado con la misma Identidad');
                Session::flash('color', 'danger');
                Session::flash('msg', 'Aviso!');

                return redirect(url()->current());
            }


            $id_alumno =  DB::table('alumnos')
                ->insertGetId([
                    'nombre' => $request->alumno_nombre,
                    'apellido' => $request->alumno_apellido,
                    'matriculado'   => 1

                ]);

            $idpadre = DB::table('padres')
                ->insertGetId([
                    'nombre'  => $request->padre_nombre,
                    'apellido' => $request->padre_apellido,
                    'identidad' => $request->padre_identidad,
                    'correo' => $request->padre_correo,
                    'telefono' => $request->padre_telefono
                ]);
        } else {

            $id_alumno = $request->id_alumno;

            DB::table('alumnos')
                ->where('id_alumno', '=', $id_alumno)
                ->update(['matriculado' => 1]);
        }


        DB::table('padrexalumno')->updateOrInsert(
            [
                'padre_id' => $idpadre,
                'alumno_id' => $id_alumno
            ],

            [
                'alumno_id' => $id_alumno,
                'padre_id' => $idpadre,
                'rol' => $request->padre_rol
            ]
        );


        $gradoxseccion = DB::table('gradoxseccion')
            ->where('id_gradoseccion', '=', $request->id_gradoseccion)
            ->get();


        DB::table('detallematriculas')
            ->where('id_alumno', '=', $id_alumno)
            ->update(['activa' => 0]);

        $year = date('Y');
        $month = date('m');

        if ($month >= 11) {
            $year = $year + 1;
        }

        DB::table('detallematriculas')
            ->insert([
                'id_alumno' => $id_alumno,
                'id_grado' => $gradoxseccion->pluck('id_grado')[0],
                'seccion' => $gradoxseccion->pluck('seccion')[0],
                'year' => $year,
                'id_maestro' => auth()->id()

            ]);


        Session::flash('noti', 'Se guardo la matricula!');
        Session::flash('color', 'success');
        Session::flash('msg', 'Exito!');

        return redirect()->route('home');
    }
}
