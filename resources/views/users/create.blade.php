<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>

<body>

    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name" value="Walter">
        <br>
        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" id="last_name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Contraseña</label>
        <input type="text" name="password" id="password">
        <br>
        <label for="username">Username</label>
        <input type="text" name="user_name" id="user_name">
        <br>

        <button type="submit">Crear Usuario</button>
    </form>
</body>

</html>