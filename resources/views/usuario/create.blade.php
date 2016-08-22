@extends('layouts.admin')
@section('content')
	@include('alerts.AlertsRequest')
	{!!Form::open(['route'=>'Usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</div>
@stop