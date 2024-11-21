<div class="bg-gray-900 text-white min-h-screen p-6">
    <!-- Título del Panel -->
    <h1 class="text-4xl font-extrabold text-center mb-6">Pushing Dashboard</h1>

    <!-- Mensaje de Sesión -->
    @if (session()->has('message'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
        {{ session('message') }}
    </div>
    @endif

    <!-- Botón de Crear Proyecto -->
    <div class="mb-6 text-center">
        <a href="{{ route('project.create') }}" class="bg-teal-600 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-teal-700 transition-all duration-300">
            Crear Proyecto
        </a>
    </div>

    <!-- Tabla de Proyectos -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="w-full table-auto text-center text-gray-700">
            <thead class="bg-teal-500 text-white">
                <tr>
                    <th class="px-6 py-3">Nombre</th>
                    <th class="px-6 py-3">Descripción</th>
                    <th class="px-6 py-3">Objetivo de Financiamiento</th>
                    <th class="px-6 py-3">Duración</th>
                    <th class="px-6 py-3">Categoría</th>
                    <th class="px-6 py-3">Estado</th>
                    <th class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr class="hover:bg-gray-100">
                    <td class="border px-6 py-3">{{ $project->name }}</td>
                    <td class="border px-6 py-3">{{ $project->description }}</td>
                    <td class="border px-6 py-3 text-teal-600">${{ number_format($project->funding_goal, 2) }}</td>
                    <td class="border px-6 py-3">{{ $project->duration }} días</td>
                    <td class="border px-6 py-3">{{ $project->category }}</td>
                    <td class="border px-6 py-3">
                        <span class="text-sm font-semibold text-{{ $project->status == 'Activo' ? 'green' : 'gray' }}-600">{{ $project->status }}</span>
                    </td>
                    <td class="border px-6 py-3">
                        <div class="flex justify-center gap-3">
                            <a href="{{ route('project.edit', $project->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <a href="{{ route('project.detail', $project->id) }}" class="text-teal-500 hover:underline">Ver</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

