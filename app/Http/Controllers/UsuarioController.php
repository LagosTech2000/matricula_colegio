<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//de la autenticacion de usuarios:
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class UsuarioController extends Controller
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
        //para que se realize la paginacion debo poner un fragmento de codigo en la otra parte
        $usuarios = User::paginate(5);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //sera de esta forma ya que aqui se asociar a a un rol cada usuario
        $roles = Role::pluck('name', 'name')->all();        
        return view('usuarios.crear', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password'

        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
      
        Session::flash('notiUsuario', 'El Maestro ha sido creado');
        return redirect()->route('usuarios.index');
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
        $user = User::find($id);
      
        return view('usuarios.editar', compact('user'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password'

        ]);
      $input = $request->all();
      if(!empty($input['password'])){
           $input['password'] = Hash::make($input['password']);
      }
      else{
           $input = Arr::except($input, array('password'));
      }

      $user = User::find($id);
      $user->update($input);      
      Session::flash('notiEditado', 'El Maestro ha sido editado');
      return redirect()->route('usuarios.index');

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
        User::find($id)->delete();
        Session::flash('notiBorrado', 'El Maestro ha sido borrado');
        return redirect()->route('usuarios.index');
    }
}
