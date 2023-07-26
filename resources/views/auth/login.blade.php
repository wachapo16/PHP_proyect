<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
</head>
<body>
    <form action="{{ url('login') }}" method="POST">
        @csrf

    <h3>Iniciar sesión</h3>

    <label for="user_name">Nombre de Usuario</label>
    <input type="user_name" name="user_name" id="user_name" placeholder="wachapo" value="wachapo">
    <br><br>

    <label for="email">Correo electronico</label>
    <input type="text" name="email" id="email" placeholder="wachapo@programamos.co" value="wachapo@programamos.co">
    <br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="123456">
    <br><br>

    @if (session()->has('message'))
    <strong>
        {{ session()->get('message') }}
    </strong>
    <br><br>
    @endif

    <button type="submit">Iniciar Sesión</button>

</body>
</html>
