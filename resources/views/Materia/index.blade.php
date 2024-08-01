<!DOCTYPE html>
<html>
<head>
    <title>Lista de Materias</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Materias</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Tipo</th>
                    <th>Valor Hora</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Materia as $Materias)
                    <tr>
                        <td>{{ $Materias->nombre }}</td>
                        <td>{{ $Materias->descripcion }}</td>
                        <td>{{ $Materias->creditos }}</td>
                        <td>{{ $Materias->tipo }}</td>
                        <td>{{ $Materias->valor_hora }}</td>
                        <td>{{ $Materias->estado }}</td>
                        <td>
                            <a href="{{ route('Materia.edit', $Materias->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('Materia.destroy', $Materias->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

