<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Posts por Id</title>
</head>
<body>
    @if ($id)
        <p>Aqui se va a mostrar el post de <?= $id ?></p>
    @endif
</body>
</html>