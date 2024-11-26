<div>
    {{-- The Master doesn't talk, he acts. --}}



    <div class="max-w-full overflow-x-auto bg-gray-900 p-4 rounded-lg shadow-md">
    <table class="w-full text-center text-sm">
        <thead class="bg-green-700 text-white">
            <tr>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Descripción</th>
                <th class="px-4 py-3">Detalles del Proyecto</th>
                <th class="px-4 py-3">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr class="bg-gray-800 hover:bg-gray-700 border-b transition-all duration-200" wire:key='{{ $project->id }}'>
                <td class="px-4 py-3 text-white">{{ $project->name }}</td>
                <td class="px-4 py-3 text-gray-400">{{ $project->description }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('project.detail', $project->id) }}"
                       class="bg-indigo-600 text-white px-4 py-2 rounded-md font-medium hover:bg-indigo-500 transition-all duration-300">
                        Ver Detalles
                    </a>
                </td>
                <td class="px-4 py-3 flex justify-center gap-4">
                    <button wire:click='aprobar({{ $project->id }})'
                            class="bg-green-600 text-white rounded-md px-4 py-2 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors duration-300"
                            wire:confirm="¿Estás seguro de que quieres aprobar este proyecto?">
                        Aprobar
                    </button>
                    <button wire:click='rechazar({{ $project->id }})'
                            class="bg-red-600 text-white rounded-md px-4 py-2 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors duration-300"
                            wire:confirm="¿Estás seguro de que no quieres aprobar este proyecto?">
                        No Aprobar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $projects->links() }}
    </div>
</div>


</div>
