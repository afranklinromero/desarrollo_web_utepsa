<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <ul>
        @foreach($estudiantes as $estudiante)
            <li>{{ $estudiante->name }}</li>
        @endforeach
    </ul>
</body>
</html>