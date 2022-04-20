<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>


    <p>Recibiste un mensaje de: {{ $Msg['name'] }} - {{ $Msg['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $Msg['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $Msg['content'] }}</p>

</body>
</html>
