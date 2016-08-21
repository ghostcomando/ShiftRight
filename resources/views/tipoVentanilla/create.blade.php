@extends('layouts.admin')

@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::open(['route'=>'TipoVentanilla.store', 'method'=>'POST'])!!}
		@include('TipoVentanilla.forms.tpvntnl')
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop