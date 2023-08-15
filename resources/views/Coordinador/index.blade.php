@extends('layout/template')

@section('title', 'Coordinadores')

@section('content')
<main>
    <div class="container py-4">
        <h2 class="text-center mb-5">Coordinadores</h2> <!-- Aumentado mb-5 para un margen inferior más grande -->

        <!-- Barra de búsqueda -->
        <div class="mb-3" style="width: 25%;">
            <input type="text" id="search" class="form-control" placeholder="Buscar...">
        </div>

        <table style="text-align: left; border-collapse: collapse;" class="table table-hover">
            <thead style="background-color: green; color: white;">
                <tr>
                    <th style="border: 1px solid black;">Nombre</th>
                    <th style="border: 1px solid black;">Editar</th>
                    <th style="border: 1px solid black;">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coordinador as $coord)
                <tr>
                    <td style="border: 1px solid black;">
                        {{$coord->persona->nombre}}
                        {{$coord->persona->ape_pat}}
                        {{$coord->persona->ape_mat}}
                    </td>
                    <td style="border: 1px solid black; text-align: center;">
                        <a href="{{url('coordinador/'.$coord->idcoordinador.'/edit')}}" class="btn btn-success btn-sm">Editar</a>
                    </td>
                    <td style="border: 1px solid black; text-align: center;">
                        <form action="{{url('coordinador/'.$coord->idcoordinador)}}" method="post">
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

            if (nameCell.textContent.toLowerCase().includes(searchTerm)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
</script>
@endsection
