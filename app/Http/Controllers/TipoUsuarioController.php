<?php namespace TurnosPonal\Http\Controllers;

use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Controllers\Controller;
use TurnosPonal\TipoUsuario;
use Session;
use Redirect;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$TipoUsuarios = TipoUsuario::paginate(15);
		return view('TipoUsuario.index', compact('TipoUsuarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipoUsuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		TipoUsuario::create($request->all());
		Session::flash('message', 'tipo de usuario creado correctamente');
		return redirect('/TipoUsuario');
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
		$TipoUsuario = TipoUsuario::find($id);
		return view('TipoUsuario.edit', ['tipoUsuario'=>$TipoUsuario]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$TipoUsuario = TipoUsuario::find($id);
		$TipoUsuario->fill($request->all());
		$TipoUsuario->save();
		Session::flash('message', 'usuario modificado correctamente');
		return Redirect::to('/TipoUsuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TipoUsuario::destroy($id);
		Session::flash('message', 'usuario eliminado correctamente');
		return Redirect::to('/TipoUsuario');
	}

}
