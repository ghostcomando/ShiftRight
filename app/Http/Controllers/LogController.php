<?php

namespace TurnosPonal\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use DB;
use TurnosPonal\Http\Requests;
use TurnosPonal\Http\Requests\LogRequest;
use TurnosPonal\Http\Controllers\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogRequest $request)
    {        
        $TU = DB::table('users')->where('email', $request['email'])->pluck('tipoUser_id');
        if(Auth::attempt(['email'=> $request['email'], 'password'=>$request['password']]))
        {
            if ($TU == 1)
            {
                return Redirect::to('Admin');
            }
            else
            {
                return Redirect::to('Portal');
            }
            
        }
        else
        {
            Session::flash('message-error', 'Sus datos son incorrectos');
            return Redirect::to('/');
        }
        
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
    }
}
