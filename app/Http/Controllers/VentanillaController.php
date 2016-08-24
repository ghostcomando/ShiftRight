<?php namespace TurnosPonal\Http\Controllers;

use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Requests\VentanillaRequest;
use TurnosPonal\Http\Controllers\Controller;
use TurnosPonal\Ventanilla;
use TurnosPonal\TipoVentanilla;
use Session;
use Redirect;
use Illuminate\Http\Request;

class VentanillaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Ventanillas = Ventanilla::paginate(15);
		return view('Ventanilla.index', compact('Ventanillas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$TipoVentanilla = TipoVentanilla::lists('tipoVentanilla','id');
		return view('ventanilla.create', compact('TipoVentanilla'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(VentanillaRequest $request)
	{
		Ventanilla::create($request->all());
		Session::flash('message', 'ventanilla creada correctamente');
		return redirect('/Ventanilla');
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
		$TipoVentanilla = TipoVentanilla::lists('tipoVentanilla','id');
		$Ventanilla = Ventanilla::find($id);
		return view('Ventanilla.edit', ['Ventanilla'=>$Ventanilla], compact('TipoVentanilla'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, VentanillaRequest $request)
	{
		$Ventanilla = Ventanilla::find($id);
		$Ventanilla->fill($request->all());
		$Ventanilla->save();
		Session::flash('message', 'Ventanilla modificada correctamente');
		return Redirect::to('/Ventanilla');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ventanilla::destroy($id);
		Session::flash('message', 'Ventanilla eliminada correctamente');
		return Redirect::to('/Ventanilla');
	}

}
