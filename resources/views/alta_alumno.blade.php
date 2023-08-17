<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container">
        <h1 class="mt-4" style="text-align: center;">Alta de Alumno</h1>
        <form action="{{ route('alumno.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="curp">CURP:</label>
                <input type="text" class="form-control" name="curp" id="curp" maxlength="18" required>
                @error('curp')
                    <div class="alert alert-danger">{{ __('validation.size.string', ['attribute' => __('curp'), 'size' => 18]) }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" class="form-control" name="pass" id="pass" maxlength="20" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" name="correo" id="correo" maxlength="100" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script>
        // Obtener referencias a los campos CURP y contraseña
        const curpInput = document.getElementById('curp');
        const passInput = document.getElementById('pass');

        // Escuchar el evento de entrada en el campo CURP
        curpInput.addEventListener('input', () => {
            // Asignar el valor del campo CURP al campo contraseña
            passInput.value = curpInput.value;
        });
    </script>
</body>
</html>