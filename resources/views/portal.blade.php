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
                <tr>
                    <td class="danger">1 </td>
                    <td class="danger">nombre1 </td>
                </tr>
                <tr>
                    <td>2 </td>
                    <td>nombre2 </td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>nombre3 </td>
                </tr>
                <tr>
                    <td>4 </td>
                    <td>nombre4 </td>
                </tr>
                <tr>
                    <td>5 </td>
                    <td>nombre5 </td>
                </tr>
            </table>
        </div>
    </div>
@stop