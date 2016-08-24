@extends('layouts.admin')
@section('content')
@include('alerts.AlertsRequest')
	{!!Form::model($tipoUsuario,['route'=>['TipoUsuario.update', $tipoUsuario->id], 'method'=>'PUT'])!!}
	@include('tipoUsuario.forms.tpusr')
		<div class="row">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['TipoUsuario.destroy', $tipoUsuario->id], 'method'=>'DELETE'])!!}
	<br>
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
		</div>
@stop