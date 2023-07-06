<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear anuncio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2...">
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
                    Hazlo ahora, crear un nuevo aviso
                </h1>
                <p class="col-lg-10 fs-4">
                    Los avisos nos permitirán avisar lo que queremos que los demás sepan.
                    <br>
                    Así que no te quedes con las ganas de crear un aviso en nuestra plataforma.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="{{ url('notices/store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Gran aviso">
                        <label for="title">Título</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" style="height: 75px" rows="3" id="content" name="content" placeholder="Describe aquí el contenido del aviso"></textarea>
                        <label for="content">Contenido del aviso</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Crear aviso</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">Su aviso será publicado en las siguientes horas.</small>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
