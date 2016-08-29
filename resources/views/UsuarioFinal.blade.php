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
<body>

	<div class="container-fluid col-md-offset-6 ">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tablaTurnos">
                <tr class="active">
                    <th class="info">TURNO</th>
                    <th class="info">VENTANILLA</th>
                </tr>                
                <tbody id="datos">
                </tbody>
            </table>
        </div>
    </div>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/script2.js')!!}
</body>
</html>