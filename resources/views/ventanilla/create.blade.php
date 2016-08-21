@extends('layouts.admin')

@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::open(['route'=>'Ventanilla.store', 'method'=>'POST'])!!}
		@include('ventanilla.forms.vtnl')
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop