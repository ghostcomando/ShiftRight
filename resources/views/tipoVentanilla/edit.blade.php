@extends('layouts.admin')
@section('content')
@include('alerts.AlertsRequest')
	{!!Form::model($tipoVentanilla,['route'=>['TipoVentanilla.update', $tipoVentanilla->id], 'method'=>'PUT'])!!}
	@include('tipoVentanilla.forms.tpvntnl')
		<div class="row">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
			{!!Form::open(['route'=>['TipoVentanilla.destroy', $tipoVentanilla->id], 'method'=>'DELETE'])!!}
			<br>
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
		</div>
@stop