@extends('layouts.admin')

@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::open(['route'=>'TipoUsuario.store', 'method'=>'POST'])!!}
		@include('TipoUsuario.forms.tpusr')
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop