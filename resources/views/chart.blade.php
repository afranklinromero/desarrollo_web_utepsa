<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Usuarios</title>
</head>
<body>
    <div>
        {!! $chart->html() !!}
    </div>

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
</body>
</html>