<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $data->name }}</h2>
    <h3>{{ $data->email }}</h3>
    <h3>Asunto: {{ $data->asunto }}</h3>
    <p>{{ $data->message }}</p>
</body>
</html>