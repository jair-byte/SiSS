@extends('layout/template')

@section('title', 'Proyectos Ofertados')

@section('content')

<main>
    <div class="container py-4">
        <h2 class="text-center mb-5">Proyectos Registrados</h2> <!-- Agregado mb-4 para el margen inferior -->

        <!-- Barra de búsqueda -->
        <div class="mb-3" style="width: 25%;">
            <input type="text" id="search" class="form-control" placeholder="Buscar...">
        </div>

        <table style="text-align: left; border-collapse: collapse;" class="table table-hover">
            <thead style="background-color: green; color: white;">
                <tr>
                    <th style="border: 1px solid black;">Nombre</th>
                    <th style="border: 1px solid black;">Status</th>
                    <th style="text-align: center; border: 1px solid black;">Editar</th>
                    <th style="text-align: center; border: 1px solid black;">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos_ofertados as $proyecto)
                <tr>
                    <td style="border: 1px solid black;">{{ $proyecto->denominacion }}</td>
                    <td style="border: 1px solid black;">{{ $proyecto->estatus }}</td>
                    <td style="text-align: center; border: 1px solid black;">
                        <a href="{{ url('proyectos_ofertados/'.$proyecto->idproyecto.'/edit') }}" class="btn btn-success btn-sm">Editar</a>
                    </td>
                    <td style="text-align: center; border: 1px solid black;">
                        <form action="{{ url('proyectos_ofertados/'.$proyecto->idproyecto) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<!-- Script para la barra de búsqueda -->
<script>
    const searchInput = document.getElementById("search");
    const rows = document.querySelectorAll("tbody tr");

    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.toLowerCase();

        rows.forEach(function(row) {
            const nameCell = row.querySelector("td:first-child");
            const statusCell = row.querySelector("td:nth-child(2)");

            if (nameCell.textContent.toLowerCase().includes(searchTerm) || statusCell.textContent.toLowerCase().includes(searchTerm)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
</script>
@endsection

