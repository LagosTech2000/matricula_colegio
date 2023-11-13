<?php

namespace App\Http\Controllers\padre;

use App\Models\archivos\Archivos;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Dflydev\DotAccessData\Data;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Psy\Command\WhereamiCommand;
use Svg\Tag\Rect;

class padreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $data = DB::table("padres as p")
            ->select('p.nombre', 'p.id_padre', 'p.apellido', 'p.telefono', 'p.identidad', 'p.correo')
            ->groupBy('p.nombre', 'p.id_padre', 'p.apellido', 'p.telefono', 'p.identidad', 'p.correo')
            ->get();

        return view('/padre/padre')->with(['data' => $data]);
    }


    public function save(Request $request)
    {

        $cuentaPadresconMismaIdentidad = DB::table('padres')->where('identidad', '=', $request->padre_identidad)->count();

        if ($cuentaPadresconMismaIdentidad > 0) {

            Session::flash('noti', 'Ya existe un encargado con la misma Identidad');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Aviso!');

            return redirect(url()->current());
        }

        DB::table("padres")->insert(
            [
                'nombre' => $request->padre_nombre,
                'apellido' => $request->padre_apellido,
                'identidad' => $request->padre_identidad,
                'telefono' => $request->padre_telefono,
                'correo' => $request->padre_correo


            ]
        );

        Session::flash('noti', 'Se guardo el Encargado!');
        Session::flash('color', 'success');
        Session::flash('msg', 'Exito!');

        return redirect(url()->current());
    }

    public function edit(Request $request)
    {

        return View('padre/editar')->with(['data' => $request]);
    }

    public function editar(Request $request)
    {
        $cuentaPadresconMismaIdentidad = DB::table('padres')
            ->where('identidad', '=', $request->padre_identidad)
            ->where('id_padre', '!=', $request->id_padre)
            ->count();

        if ($cuentaPadresconMismaIdentidad > 0) {

            Session::flash('noti', 'Ya Existe un Encargado con la Misma Identidad');
            Session::flash('color', 'danger');
            Session::flash('msg', 'Aviso!');

            return View('padre.editar')->with(['data'=>$request]);
        }

        DB::table("padres")
        ->where('id_padre', '=', $request->id_padre)
        ->update(
            [
                'nombre' => $request->padre_nombre,
                'apellido' => $request->padre_apellido,
                'identidad' => $request->padre_identidad,
                'telefono' => $request->padre_telefono,
                'correo' => $request->padre_correo
            ]
        );

        Session::flash('noti', 'Se guardo el Encargado!');
        Session::flash('color', 'success');
        Session::flash('msg', 'Exito!');

        return redirect()->route('padres.index');
    }


    public function delete(Request $request)
    {

        DB::table('padres')
            ->where('id_padre', '=', $request->id_padre)
            ->delete();

        Session::flash('noti', 'Se elimino el Encargado!');
        Session::flash('color', 'danger');
        Session::flash('msg', 'Exito!');
        return redirect(url()->current());
    }
}
