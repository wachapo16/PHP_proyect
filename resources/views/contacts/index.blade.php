<!-- https://getbootstrap.com/docs/5.3/getting-started/introduction -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis Contactos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Mis Contactos</h1>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ url('contacts/create') }}" class="btn btn-primary btn-lg px-4 gap-3">
                Crear un Contacto
            </a>
        </div>
        <div class="col-lg-6 mx-auto">
            <table class="table">
                <thead>
                    <th>
                        Id
                    </th>
                    <th>
                       Nombre
                    </th>
                    <th>
                        Celular
                    </th>
                    <th>
                        Acciones
                    </th>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($contacts); $i++) <tr>
                        <td>
                            {{ $contacts[$i]->id }}
                        </td>
                        <td>
                            {{ $contacts[$i]->name }}
                        </td>
                        <td>
                            {{ $contacts[$i]->cellphone }}
                        </td>
                        <td style="white-space: nowrap;">
                            <a href="{{ url('contacts/' . $contacts[$i]->id . '/edit') }}" Web crUD 5 class="btn btn-sm btn-success">Actualizar</a>
                            <form style="display: inline-block" method="POST" action="{{ url('contacts/' . $contacts[$i]->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>