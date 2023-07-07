<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
                    Estás editando una tarea
                </h1>
                <p class="col-lg-10 fs-4">
                    Esta tarea ya existe en la base de datos.
                    <br>
                    Pero veo que no estás conforme con lo que tiene, así que modifícalo a tu gusto.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="{{ url('tasks/' . $tasks->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Gran aviso" value="{{ $tasks->title }}">
                        <label for="title">Título</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" style="height: 75px" rows="3" id="description" name="description" placeholder="Describe aquí la tarea.">{{ $tasks->description }}</textarea>
                        <label for="description">Descripción de la tarea</label>
                    </div>
                    <!--<div class="mb-3">
                        <label for="state" class="form-label">Estado:</label>
                        <select name="state" id="state" class="form-select">
                            <option value="Por hacer" {{ $tasks->state == 'Por hacer' ? 'selected' : '' }}>Por hacer</option>
                            <option value="En progreso" {{ $tasks->state == 'En progreso' ? 'selected' : '' }}>En progreso</option>
                            <option value="Finalizada" {{ $tasks->state == 'Finalizada' ? 'selected' : '' }}>Finalizada</option>
                        </select>
                    </div>-->

                    <button class="w-100 btn btn-lg btn-primary" type="submit">
                        Actualizar tarea
                    </button>
                    <hr class="my-4">
                    <small class="text-body-secondary">Su tarea será actualizada en las siguientes horas.</small>
                    <a href=" {{url('tasks') }} "> Volver atrás</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>