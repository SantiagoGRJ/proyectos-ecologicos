<div class="mx-auto max-w-[1100px] p-3 flex flex-col gap-8">

    {{-- Barra de búsqueda --}}
    <div class="flex items-center space-x-2">
        <input type="text" wire:model.live='query'
            class="rounded px-4 py-2 border-gray-300 w-full focus:outline-none focus:ring-2 focus:ring-green-400"
            placeholder="Buscar proyectos...">
    </div>

    {{-- Contenedor de los proyectos --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        {{-- Iteración sobre los proyectos --}}
        @foreach ($projects as $project)
        <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-green-400 mb-3">{{ $project->name }}</h3>
                <p class="text-gray-300 mb-4">{{ Str::limit($project->description, 120) }}</p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('project.detail', $project->id) }}"
                        class="bg-blue-600 px-4 py-2 rounded-md font-light hover:bg-blue-500 transition-colors duration-300">
                        Ver más
                    </a>
                    <span class="text-sm text-gray-400">{{ $project->created_at->format('d M, Y') }}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    {{-- Paginación --}}
    <div class="mt-6">
        {{ $projects->links() }}
    </div>
</div>
