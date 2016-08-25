<?php namespace TurnosPonal\Http\Controllers;

use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Requests\TipoVentanillaRequest;
use TurnosPonal\Http\Controllers\Controller;
use TurnosPonal\TipoVentanilla;
use Session;
use Redirect;
use Illuminate\Http\Request;

class TipoVentanillaController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
		$this->beforefilter('@find',['only'=>['edit', 'update', 'destroy']]);
	}

	public function find(Route $route)
	{
		$this->tipoventanilla = TipoVentanilla::find($route->getParameter('tipoventanilla'));
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$TipoVentanillas = TipoVentanilla::paginate(15);
		return view('TipoVentanilla.index', compact('TipoVentanillas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipoVentanilla.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TipoVentanillaRequest $request)
	{
		TipoVentanilla::create($request->all());
		Session::flash('message', 'tipo de usuario creado correctamente');
		return redirect('/TipoVentanilla');
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
		$TipoVentanilla = TipoVentanilla::find($id);
		return view('TipoVentanilla.edit', ['tipoVentanilla'=>$TipoVentanilla]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, TipoVentanillaRequest $request)
	{
		$TipoVentanilla = TipoVentanilla::find($id);
		$TipoVentanilla->fill($request->all());
		$TipoVentanilla->save();
		Session::flash('message', 'Tipo de Ventanilla modificada correctamente');
		return Redirect::to('/TipoVentanilla');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TipoVentanilla::destroy($id);
		Session::flash('message', 'Tipo de Ventanilla eliminada correctamente');
		return Redirect::to('/TipoVentanilla');
	}

}
