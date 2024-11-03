<div>
    {{-- The Master doesn't talk, he acts. --}}



    <div class="max-w-full overflow-x-auto">

        <table class="w-full text-center">
            <thead class="bg-gray-600 text-white">
                <th class="px-3 py-2">Name</th>
                <th class="px-3 py-2">Number</th>
                <th class="px-3 py-2">Detalles del Proyecto</th>
                <th class="px-3 py-2">Accion</th>


            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr class="bg-white hover:bg-gray-300 border-b" wire:key='{{ $project->id }}'>
                    <td class="px-2 py-2">{{ $project->name }}</td>
                    <td class="px-2 py-2">{{ $project->description }}</td>
                    <td class="px-2 py-2">
                        <a href="{{ route('project.detail',$project->id) }}"
                            class="bg-blue-600 px-3 py-[10px] rounded-md    font-light
                            hover:bg-blue-400
                            "
                            >
                            Show
                        </a>
                    </td>
                    <td class="px-3 py-2">
                        <button
                        wire:click='aprobar({{ $project->id }})'
                        class="bg-yellow-400 rounded-md px-4 py-2"
                         wire:confirm="Estas seguro, quieres Aprobar este Proyecto?"
                        >
                            Aprobar
                        </button>
                        |
                        <button
                        wire:click='rechazar({{ $project->id }})'
                        class="bg-red-400 rounded-md px-4 py-2"
                         wire:confirm="Estas seguro, No quieres Aprobar este Proyecto?"
                        >
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
