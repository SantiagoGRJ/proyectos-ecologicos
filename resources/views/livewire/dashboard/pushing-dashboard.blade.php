<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>Pushing Dashboard</h1>
    @if (session()->has('message'))
    <div class="bg-green-500 text-white p-2 rounded mb-4">
        {{ session('message') }}
    </div>
@endif
    <a href="{{ route('project.create') }}" class="px-3 py-2 rounded-md bg-green-600">Crear Proyecto</a>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Objetivo de Financiamiento</th>
                <th class="px-4 py-2">Duración</th>
                <th class="px-4 py-2">Categoría</th>
                <th class="px-4 py-2">Estado</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->name }}</td>
                    <td class="border px-4 py-2">{{ $project->description }}</td>
                    <td class="border px-4 py-2">${{ number_format($project->funding_goal, 2) }}</td>
                    <td class="border px-4 py-2">{{ $project->duration }} días</td>
                    <td class="border px-4 py-2">{{ $project->category }}</td>
                    <td class="border px-4 py-2">{{ $project->status }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('project.edit', $project->id) }}" class="text-blue-500 hover:underline">Editar</a> |
                        <a href="{{ route('project.detail', $project->id) }}" class="text-green-500 hover:underline">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
