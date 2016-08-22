@extends('layouts.admin')
@section('content')
	{!!Form::model($user,['route'=>['Usuario.update', $user->id], 'method'=>'PUT'])!!}
	@include('usuario.forms.usr')
		<div class="row">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=>['Usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
			<br>
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
		</div>
@stop