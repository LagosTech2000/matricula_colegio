<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $year = date('Y');
        $month = date('m');


        $cuenta_jobs = DB::table('jobs')
            ->where('year', '=', $year)
            ->count();

        if ($cuenta_jobs == 0) {


            if ($month >= 11) { 

                DB::table('alumnos')
                    ->update([
                        'matriculado' => 0
                    ]);

                DB::table('detallematriculas')
                    ->update(['activa' => 0]);

                DB::table('jobs')
                    ->insert([
                        'year' => $year,
                        'docente_id' => auth()->id()

                    ]);
            }
        }
        
        if ($month >= 11) {
            $year = $year + 1;
        }

        return view('home')->with(['year'=>$year]);
    }
}
