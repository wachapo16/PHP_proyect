<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuenta</title>
</head>
<body>
    <form action="{{ url('register') }}" method="POST">
        @csrf

        <h3>Crear Cuenta</h3>

        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name" placeholder="Walter" value="Walter">
        <br><br>

        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" id="last_name" placeholder="White" value="White">
        <br><br>

        <label for="email">Correo Electrónico</label>
        <input type="text" name="email" id="email" placeholder="Walter@progrmamos.co" value="Walter@progrmamos.co">
        <br><br>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="12345" value="12345">
        <br><br>

        <label for="user_name">Nombre de Usuario</label>
        <input type="text" name="user_name" id="user_name" placeholder="walterwhite" value="walterwhite">
        <br><br>

        <button type="submit">Crear Cuenta</button>
    </form>
</body>
</html>
