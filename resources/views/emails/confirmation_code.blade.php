<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hola {{$name}}, bienvenido a "Ruleta de amigos secretos"</h2>
    <p>Por favor confirma tu correo electrónico.</p>
    <a href="{{url('register/verify/'.$confirmation_code)}}">
        Click para confirmar tu correo electronico
    </a>
</body>
</html>