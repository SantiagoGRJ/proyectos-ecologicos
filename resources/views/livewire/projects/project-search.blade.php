<div class="mx-auto max-w-[1100px] p-3 flex  gap-4 justify-center flex-col">
    {{-- Success is as dangerous as failure. --}}
    <div class="flex items-center space-x-2">

        <input type="text" wire:model.live='query'
        class="rounded px-4 py-2 border-gray-300 w-full"
        placeholder="Search..."
        >
    </div>

    <div class="max-w-full overflow-x-auto">

        <table class="w-full text-center">
            <thead class="bg-gray-600 text-white">
                <th class="px-3 py-2">Name</th>
                <th class="px-3 py-2">Number</th>
                <th class="px-3 py-2">Detalles del Proyecto</th>


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

                    <
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $projects->links() }}
        </div>

    </div>
</div>
