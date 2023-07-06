<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Mis tareas</h1>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ url('tasks/create') }}" class="btn btn-primary btn-lg px-4 gap-3">
                Crear una tarea
            </a>
        </div>
        <div class="col-lg-6 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Estado</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($tasks); $i++) <tr>
                        <td>{{ $tasks[$i]->id }}</td>
                        <td>{{ $tasks[$i]->state }}</td>
                        <td>{{ $tasks[$i]->title }}</td>
                        <td>{{ $tasks[$i]->description }}</td>
                        <td style="white-space: nowrap;">
                            <a href="{{ url('tasks/' . $tasks[$i]->id . '/edit') }}" class="btn btn-sm btn-success">Actualizar</a>
                            <!--<form style="display: inline-block" method="POST" action="{{ url('tasks/' . $tasks[$i]->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form> -->
                        </td>
                        </tr>
                        @endfor
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>