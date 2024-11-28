<div class="bg-gray-900 text-white min-h-screen p-6">
    <!-- Título del Panel -->
    <h1 class="text-4xl font-extrabold text-center mb-6">Panel de Emprendedor</h1>

    <!-- Mensaje de Sesión -->
    @if (session()->has('message'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
        {{ session('message') }}
    </div>
    @endif

   <!-- Botón de Crear Proyecto -->
<div class="mb-6 text-center">
    <a href="{{ route('project.create') }}" class="bg-green-600 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-500 transition-all duration-300">
        Crear Proyecto
    </a>
</div>

<!-- Tabla de Proyectos -->
<div class="overflow-x-auto bg-gray-800 shadow-lg rounded-lg">
    <table class="w-full table-auto text-center text-gray-300">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Nombre</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Descripción</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Objetivo</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Duración</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Categoría</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Estado</th>
                <th class="px-6 py-3 font-medium text-sm tracking-wider uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr class="hover:bg-gray-700 even:bg-gray-900 odd:bg-gray-800 transition-all duration-300">
                <td class="border-b border-gray-700 px-6 py-4 text-sm font-semibold text-white">{{ $project->name }}</td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm text-gray-400">{{ Str::limit($project->description, 50) }}</td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm font-semibold text-green-400">${{ number_format($project->funding_goal, 2) }}</td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm text-gray-300">{{ $project->duration }} días</td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm text-gray-400">{{ $project->category }}</td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm">
                    <span class="py-1 px-3 rounded-full text-white text-xs font-semibold bg-{{ $project->status == 'Activo' ? 'green' : 'gray' }}-500">
                        {{ $project->status }}
                    </span>
                </td>
                <td class="border-b border-gray-700 px-6 py-4 text-sm">
                    <div class="flex justify-center gap-3">
                        <a href="{{ route('project.edit', $project->id) }}" class="text-green-500 hover:text-green-300 font-medium">Editar</a>
                        <a href="{{ route('project.detail', $project->id) }}" class="text-green-500 hover:text-green-300 font-medium">Ver</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</div>

