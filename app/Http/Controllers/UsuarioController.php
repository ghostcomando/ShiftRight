<?php namespace TurnosPonal\Http\Controllers;

use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Requests\UserCreateRequest;
use TurnosPonal\Http\Requests\UserUpdateRequest;
use TurnosPonal\Http\Controllers\Controller;
use TurnosPonal\User;
use TurnosPonal\TipoUsuario;
use Session;
use Redirect;
use DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
		//$this->beforefilter('@find',['only'=>['edit', 'update', 'destroy']]);
	}

	public function find(Route $route)
	{
		$this->user = User::find($route->getParameter('Usuario'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$users = User::paginate(15);
		return view('Usuario.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$TipoUsuario = TipoUsuario::lists('tipoUsuario','id');
		return view('Usuario.create', compact('TipoUsuario'));
	}

	/**
	 * Store a newly created resource in storage.
	 
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		User::create($request->all());
		Session::flash('message', 'usuario creado correctamente');
		return redirect('/Usuario');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$TipoUsuario = TipoUsuario::lists('tipoUsuario','id');
		$User = User::find($id);
		return view('Usuario.edit', ['user'=>$User], compact('TipoUsuario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{
		$User = User::find($id);
		$User->fill($request->all());
		$User->save();
		Session::flash('message', 'usuario modificado correctamente');
		return Redirect::to('/Usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		Session::flash('message', 'usuario eliminado correctamente');
		return Redirect::to('/Usuario');
	}

}
