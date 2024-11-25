<div class="max-w-4xl mx-auto mt-16 p-6 bg-gray-800 shadow-lg rounded-lg">
    <!-- Título del Proyecto -->
    <h2 class="text-4xl font-extrabold text-white mb-4">{{ $project->name }}</h2>

    <!-- Imagen del Proyecto (si se tiene) -->
    <div class="mb-6">
        <img src="{{ Storage::url('projects/' . $project->path_img) }}" alt="Proyecto Imagen"
            class="w-full h-72 object-cover rounded-lg shadow-md">
    </div>

    <!-- Descripción del Proyecto -->
    <p class="text-lg text-gray-300 mb-4">
        <span class="font-semibold text-white">Descripción: </span>
        {{ $project->description }}
    </p>

    <!-- Detalles del Proyecto -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
        <!-- Objetivo de Financiamiento -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
            <p class="font-semibold text-gray-300">Objetivo de Financiamiento</p>
            <p class="text-xl text-yellow-400">${{ number_format($project->funding_goal, 2) }}</p>
        </div>

        <!-- Duración Estimada -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
            <p class="font-semibold text-gray-300">Duración Estimada</p>
            <p class="text-xl text-white">{{ $project->duration }} días</p>
        </div>

        <!-- Categoría del Proyecto -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
            <p class="font-semibold text-gray-300">Categoría</p>
            <p class="text-xl text-white">{{ $project->category }}</p>
        </div>

        <!-- Estado del Proyecto -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
            <p class="font-semibold text-gray-300">Estado</p>
            <p class="text-xl text-blue-400">{{ $project->status }}</p>
        </div>
    </div>

    <!-- Botón de Acción -->
    <div class="flex justify-between items-center mt-8">
        @if (Auth::check())
            <a href="{{ route('projects.all') }}"
                class="text-blue-400 hover:text-blue-600 font-semibold py-2 px-6 border border-blue-400 rounded-lg hover:bg-blue-50 transition-all duration-300">
                Volver a la lista de proyectos
            </a>
        @else
        <a href="{{ route('home.all') }}"
                class="text-blue-400 hover:text-blue-600 font-semibold py-2 px-6 border border-blue-400 rounded-lg hover:bg-blue-50 transition-all duration-300">
                Volver a la lista de proyectos
            </a>
        @endif




        <button
            class="bg-teal-600 text-white hover:bg-teal-700 font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all duration-300">
            Invertir en este Proyecto
        </button>
    </div>
</div>
