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

    @php
    if(Auth::check()){
    if(Auth::user()->hasRole('admin')){
    $bandera='admin';
    $redirect=route('dashboard.admin');

    }else if (Auth::user()->hasRole('investor')){
    $bandera='investor';
    $redirect=route('dashboard.investor');

    }else{
    $bandera='pushing';
    $redirect=route('dashboard.pushing');
    }
    }else{
    $bandera='no';
    $redirect=route('home.all');
    }
    @endphp


    <!-- Botón de Acción -->
    <div class="flex justify-between gap-1 items-center mt-8">

        <a href="{{ $redirect }}"
            class="text-blue-400 hover:text-blue-600 font-semibold py-2 px-6 border border-blue-400 rounded-lg hover:bg-blue-50 transition-all duration-300">
            Volver a la lista de proyectos
        </a>

        @switch($bandera)
        @case('investor')
        <button disabled
            class="bg-teal-600 text-white hover:bg-teal-700 font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-teal-500 transition-all duration-300">
            Invertir en este Proyecto
        </button>
        @break
        @case('admin')
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
        @break

        @default

        @endswitch


    </div>
</div>
