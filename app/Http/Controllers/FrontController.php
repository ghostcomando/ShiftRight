<?php namespace TurnosPonal\Http\Controllers;

use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Controllers\Controller;
use TurnosPonal\Ventanilla;

use Illuminate\Http\Request;

class FrontController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only'=>['admin', 'portal']]);
		$this->middleware('admin', ['only' =>['admin']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Ventanillas = Ventanilla::lists('ventanilla','id');
		return view('index', compact('Ventanillas'));
	}

	public function admin()
	{
		return view('admin.index');
	}

	public function portal()
	{
		return view('portal');
	}

}
