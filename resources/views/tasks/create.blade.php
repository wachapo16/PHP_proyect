<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea</title>
</head>

<body>
    <h1>
        Crear Tarea,
        <a href="{{ url('tasks') }}">Volver al listado</a>
    </h1>
    <form action="{{ url('tasks/store') }}" method="POST">
        @csrf
        <label for="task">Titulo</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="user_id">Asignado a</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
            @endforeach
        </select>
        <button type="submit">Crear Tarea</button>
    </form>
</body>

</html>