<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agregare para el control de usuarios con Spatie:
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RolController extends Controller
{
    function __construct()
    {    
        $this->middleware('permission:admin-ver|admin-crear|admin-editar|admin-borrar',['only'=>['index']]);
        $this->middleware('permission:admin-crear',['only'=>['create','store']]);
        $this->middleware('permission:admin-editar',['only'=>['edit','update']]);
        $this->middleware('permission:admin-borrar',['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lo hice en forma de paginado:
            $roles = Role::paginate(5);
            return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permission = Permission::get();
        //le puse .crear para no confundierme con la funcion create
        return view('roles.crear', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //le puse name porque asi genera las tablas spatie permission
        $this->validate($request,['name'=>'required','permission'=>'required']);
        $role = Role::create(['name'=> $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        Session::flash('notiRol', 'El rol ha sido creado');
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions= DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
             ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
             ->all();
             return view('roles.editar', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,['name'=>'required','permission'=>'required']);
          $role = Role::find($id);
          $role->name = $request->input('name');
          $role->save();
          $role->syncPermissions($request->input('permission'));
          Session::flash('notiEditado', 'El rol ha sido editado');
          return redirect()->route('roles.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('roles')->where('id', $id)->delete();
        Session::flash('notiBorrado', 'El rol ha sido borrado');
        return redirect()->route('roles.index');

    }
}
