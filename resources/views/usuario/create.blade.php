@extends('layouts.admin')

@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop