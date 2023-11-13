<?php

namespace App\Http\Controllers\detalle;

use App\Models\archivos\Archivos;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Svg\Tag\Rect;

class detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detallealumno(Request $request)
    {

        $cuentadmxalumno = DB::table('detallematriculas')
            ->where('id_alumno', '=', $request->id_alumno)
            ->count();

        if ($cuentadmxalumno < 1) {

            DB::table('alumnos')
                ->where('id_alumno', '=', $request->id_alumno)
                ->update([
                    'matriculado' => 0
                ]);
        }

        $alumno = DB::table('alumnos')->get();

        if (isset($request->id_alumno)) {

            $alm = DB::table('alumnos')
                ->where('id_alumno', '=', $request->id_alumno)
                ->first();

            $dm = DB::table('detallematriculas as dm')
                ->select('year', 'g.nombre as grado_nombre', 'seccion', 'activa','dm.id_detallematriculas')
                ->join('grado as g', 'g.id_grado', '=', 'dm.id_grado')
                ->join('users as u', 'u.id', '=', 'id_maestro')
                ->where('dm.id_alumno', '=', $request->id_alumno)
                ->orderBy('fecha_matricula', 'desc')
                ->get();

            $pa = DB::table('padrexalumno')
                ->join('padres', 'padres.id_padre', 'padrexalumno.padre_id')
                ->where('padrexalumno.alumno_id', '=', $request->id_alumno)
                ->get();;


            return View('detalle/alumno')->with(['alm' => $alm, 'dm' => $dm, 'alumno' => $alumno, 'pa' => $pa]);
        }

        return View('detalle/alumno')->with(['alumno' => $alumno]);
    }

    public function detallematricula()
    {
        $detallesMatriculas = DB::table('detallematriculas as dm')
            ->join('alumnos as a', 'a.id_alumno', '=', 'dm.id_alumno')
            ->join('users as u', 'u.id', '=', 'dm.id_maestro')
            ->join('grado as g', 'g.id_grado', '=', 'dm.id_grado')
            ->select(
                'dm.*',
                'a.nombre as alumno_nombre',
                'u.*',
                'g.nombre as grado_nombre',
                'g.*',
                'a.*'
            )
            ->get();


        return View('detalle/matricula')->with(['detallematriculas' => $detallesMatriculas]);
    }

    function detalleseccion(Request $request)
    {
        $dm = DB::table('detallematriculas')
            ->where('id_detallematriculas', '=', $request->id_detallematriculas)
            ->first();

        $sec = DB::table('gradoxseccion as gs')
            ->where('id_grado', '=', $dm->id_grado)
            ->where('seccion', '=', $dm->seccion)
            ->leftJoin('users', 'gs.docente', 'users.id')
            ->first();

        $data = DB::table('detallematriculas as dm')
            ->where('g.id_grado', '=', $dm->id_grado)
            ->where('seccion', '=', $dm->seccion)
            ->where('year', '=', $dm->year)
            ->join('alumnos as a', 'a.id_alumno', '=', 'dm.id_alumno')
            ->join('users as u', 'u.id', '=', 'dm.id_maestro')
            ->join('grado as g', 'g.id_grado', '=', 'dm.id_grado')
            ->select(
                'dm.fecha_matricula',
                'a.*',
                'a.nombre as alumno_nombre',
                'g.nombre as grado_nombre'

            )
            ->orderBy('fecha_matricula', 'asc')
            ->get();

        $cuentaA = $data->count();

        return View('detalle/seccion')->with(['data' => $data, 'grasecyear' => $request->grasecyear, 'sec' => $sec, 'cuentaa' => $cuentaA]);
    }
}
