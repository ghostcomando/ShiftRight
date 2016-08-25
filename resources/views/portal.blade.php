@extends('layouts.admin')
@section('content')
    @include('alerts.ErrorsRequest')
    <div class="container-fluid col-md-offset-6 ">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tablaTurnos">
                <tr class="active">
                    <th class="info">TURNO</th>
                    <th class="info">VENTANILLA</th>
                </tr>
                @foreach($turnos as $turno)
                <?php
                    $IDVentanilla = $turno->ventanilla_id;
                ?>
            <tbody>
                <td>{{$turno->turno}}</td>
                <td>{{DB::table('ventanillas')->where('id', $IDVentanilla)->pluck('ventanilla')}}</td>
            </tbody>
            @endforeach
            </table>
            {!!Form::open(['route'=>'Turno.store', 'method'=>'POST'])!!}                
                {!!Form::hidden('turno', '2')!!}
                {!!Form::hidden('tipoVentanilla_id', '1')!!}
                {!!Form::hidden('ventanilla_id', '2')!!}
                {!!Form::hidden('usuario_id', '1')!!}
            {!!Form::submit('Siguiente',['class'=>'btn btn-lg btn-success'])!!}
            {!!Form::close()!!}
        </div>
    </div>
    {!!$turnos->render()!!}
@stop