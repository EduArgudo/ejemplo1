<!DOCTYPE html>
<html>
<head>
    <title>Editar Materia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Materia</h1>
        <form action="{{ route('Materia.update', $Materia->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $Materia->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $Materia->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="creditos">Créditos</label>
                <input type="number" class="form-control" id="creditos" name="creditos" value="{{ $Materia->creditos }}" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Basica" {{ $materia->tipo == 'Basica' ? 'selected' : '' }}>Básica</option>
                    <option value="Formacion" {{ $materia->tipo == 'Formacion' ? 'selected' : '' }}>Formación</option>
                    <option value="Titulacion" {{ $materia->tipo == 'Titulacion' ? 'selected' : '' }}>Titulación</option>
                </select>
            </div>
            <div class="form-group">
                <label for="valor_hora">Valor Hora</label>
                <input type="number" step="0.01" class="form-control" id="valor_hora" name="valor_hora" value="{{ $materia->valor_hora }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="activo" {{ $materia->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="inactivo" {{ $materia->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn mt-3 btn-primary">Actualizar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
