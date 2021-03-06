@extends('layouts.admin')
@section('content')
    @include('alerts.ErrorsRequest')  
    <div class="container-fluid col-md-offset-6 " id="tablaTurnos" setinterval="1000">
        <div class="table-responsive">
            <table class="table table-striped table-hover" >
                <tr class="active">
                    <th class="info">TURNO</th>
                    <th class="info">VENTANILLA</th>
                </tr>
                <?php
                    $Ventanilla_id = DB::table('registro_logins')->where('user_id', Auth::user()->id)->orderBy('id','desc')->pluck('ventanilla_id');
                    $TipoVentanilla_id = DB::table('ventanillas')->where('id', $Ventanilla_id)->pluck('TipoVentanillas_id');
                    $TurnoActual = DB::table('turnos')->orderBy('turno', 'desc')->where('tipoVentanilla_id', $TipoVentanilla_id)->value('turno');
                    $TurnoSiguiente = $TurnoActual + 1;
                    $Usuario_id = Auth::user()->id;
                ?>
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
                {!!Form::hidden('turno', $TurnoSiguiente)!!}
                {!!Form::hidden('tipoVentanilla_id', $TipoVentanilla_id)!!}
                {!!Form::hidden('ventanilla_id', $Ventanilla_id)!!}
                {!!Form::hidden('usuario_id', $Usuario_id)!!}
            {!!Form::submit('Siguiente',['class'=>'btn btn-lg btn-success', 'onClick'=>'this.disabled=true'])!!}
            {!!Form::close()!!}
        </div>
    </div>
    {!!$turnos->render()!!}
@stop