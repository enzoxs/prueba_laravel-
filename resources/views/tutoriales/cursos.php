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
<?php foreach ($datos as $value): ?>
<li><?php echo $value ?></li>
<?php endforeach ?>
</ul>

</body>
</html>