<div>
    {{-- The Master doesn't talk, he acts. --}}



    <div class="max-w-full overflow-x-auto">

        <table class="w-full text-center">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-3 py-2">Name</th>
                    <th class="px-3 py-2">Descripcion</th>
                    <th class="px-3 py-2">Detalles del Proyecto</th>
                    <th class="px-3 py-2">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr class="bg-gray-700 hover:bg-gray-600 border-b" wire:key='{{ $project->id }}'>
                    <td class="px-2 py-2 text-white">{{ $project->name }}</td>
                    <td class="px-2 py-2 text-gray-300">{{ $project->description }}</td>
                    <td class="px-2 py-2">
                        <a href="{{ route('project.detail',$project->id) }}"
                            class="bg-indigo-600 text-white px-3 py-2 rounded-md font-medium hover:bg-indigo-500 transition-all duration-300">
                            Show
                        </a>
                    </td>
                    <td class="px-3 py-2 flex justify-center gap-2">
                        <button
                            wire:click='aprobar({{ $project->id }})'
                            class="bg-green-600 text-white rounded-md px-4 py-2 hover:bg-green-500 focus:outline-none transition-colors duration-300"
                            wire:confirm="¿Estás seguro de que quieres aprobar este proyecto?">
                            Aprobar
                        </button>
                        <button
                            wire:click='rechazar({{ $project->id }})'
                            class="bg-red-600 text-white rounded-md px-4 py-2 hover:bg-red-500 focus:outline-none transition-colors duration-300"
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
