@extends('layouts.admin')
@section('content')
	{!!Form::model($Ventanilla,['route'=>['Ventanilla.update', $Ventanilla->id], 'method'=>'PUT'])!!}
	@include('ventanilla.forms.vtnl')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['Ventanilla.destroy', $Ventanilla->id], 'method'=>'DELETE'])!!}
		<br>
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop