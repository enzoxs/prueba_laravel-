<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cursos</h1>

    
<ul>
 @foreach ($datos as $value)
<li> {{$value}} </li>
 @endforeach
</ul>

@if($datos['curso3'] == 'JavaScript')

Mi Curso favorito es JavaScript

@elseif($datos['curso3']=='Java')
Mi curso favorito es Java
@else
    No Encuetro mi curso favorito

@endif


</body>
</html>