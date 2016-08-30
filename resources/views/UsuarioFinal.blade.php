<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/EstilosPortal.css')!!}


</head>
 <div class="container-fluid col-md-offset-6 " id="tablaTurnos" setinterval="1000">
        <div class="table-responsive">
            <table class="table table-striped table-hover" >
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
            <?php
            $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
            header("refresh:2; url=$self"); //Refrescamos cada 300 segundos
            ?>
            </table>
        </div>
    </div>
</html>