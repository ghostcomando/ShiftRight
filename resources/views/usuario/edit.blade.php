@extends('layouts.admin')
@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::model($user,['route'=>['Usuario.update', $user->id], 'method'=>'PUT'])!!}
	@include('usuario.forms.usr')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
	{!!Form::open(['route'=>['Usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop