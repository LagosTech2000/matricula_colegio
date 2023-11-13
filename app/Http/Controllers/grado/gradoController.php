<?php

namespace App\Http\Controllers\grado;

use App\Models\archivos\Archivos;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Svg\Tag\Rect;

class gradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {    
         $this->middleware('permission:admin-ver|admin-crear|admin-editar|admin-borrar',['only'=>['index']]);
         $this->middleware('permission:admin-crear',['only'=>['create','store']]);
         $this->middleware('permission:admin-editar',['only'=>['edit','update']]);
         $this->middleware('permission:admin-borrar',['only'=>['destroy']]);
     }

    public function index()
    {
        $data = DB::table("grado")->get();
        return View('/grado/grado')->with(['data'  => $data]);
    }

    public function nuevo()
    {

        return View('grado/nuevo');
    }


    public function guardar(Request $request)
    {
        $nombre = $request->nombre;
        if (strlen($nombre) >= 6) {

            DB::table("grado")->insert(['nombre' => $request->nombre]);
            Session::flash('noti', 'Se Guardo el grado o carrera!');
            Session::flash('color', 'success');
            Session::flash('msg', 'Exito!');
        } else {
            Session::flash('noti', 'Ingrese un grado o carrera correcto');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Error');
        }
        return redirect(url()->current());
    }

    public function eliminar(Request $request)
    {

        DB::table("grado")->where('id_grado', '=', $request->id_grado)->delete();
        Session::flash('noti', 'Se elimino el grado o carrera');
        Session::flash('color', 'danger');
        Session::flash('msg', 'Exito!');
        return redirect(url()->current());
    }

    public function edit(Request $request)
    {

        return View('grado/editar')->with(['data' => $request]);
    }

    public function editar(Request $request)
    {
        $nombre = $request->nombre;
        if (strlen($nombre) >= 6) {

            DB::table("grado")->where('id_grado', '=', $request->id_grado)->update(['nombre' => $request->nombre]);
            Session::flash('noti', 'Se Guardo el grado o carrera!');
            Session::flash('color', 'success');
            Session::flash('msg', 'Exito!');
        } else {
            Session::flash('noti', 'Ingrese un grado o carrera correcto');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Error');
        }
        return redirect()->route('grado.index');
    }

    public function seccion(Request $request)
    {
        session_start();
        if (isset($request->id_grado)) {
            $_SESSION['grado'] = $request->id_grado;
        }

        $data = DB::table('gradoxseccion')
            ->select('gradoxseccion.id_grado AS gradoxseccion_id_grado', 'grado.id_grado AS grado_id_grado', 'nombre', 'seccion', 'cupos','gradoxseccion.docente','name')
            ->where('gradoxseccion.id_grado', '=', $_SESSION['grado'])
            ->join('grado', 'grado.id_grado', '=', 'gradoxseccion.id_grado')
            ->leftJoin('users','id','=','gradoxseccion.docente')
            ->get();

        $docentes = DB::table('users')->get();

        return View('grado/seccion')->with(['id_grado' => $_SESSION['grado'], 'data' => $data, 'docentes' => $docentes]);
    }


    public function seccionsave(Request $request)
    {
        DB::table('gradoxseccion')            
            ->updateOrInsert([
                'seccion' => $request->seccion,
                'id_grado' => $request->id_grado,
            ], [
                'id_grado' => $request->id_grado,
                'seccion' => $request->seccion,
                'cupos' => $request->cupos,
                'docente'=> $request->docente
            ]);
            Session::flash('noti', 'Se Guardo o Actualizo la Seccion!');
            Session::flash('color', 'success');
            Session::flash('msg', 'Exito!');



        return redirect()->route('grado.seccion');
    }

    public function secciondelete(Request $request)
    {

        DB::table('gradoxseccion')
            ->where('id_grado', $request->id_grado)
            ->where('seccion', $request->seccion)
            ->delete();

            Session::flash('noti', 'Se elimino la seccion!');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Exito!');

        return redirect()->route('grado.seccion');
    }
}
