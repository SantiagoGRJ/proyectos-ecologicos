<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl font-bold mb-4">{{ $project->name }}</h2>

    <p class="text-gray-700 mb-2"><strong>Descripción:</strong> {{ $project->description }}</p>

    <p class="text-gray-700 mb-2"><strong>Objetivo de Financiamiento:</strong> ${{ number_format($project->funding_goal, 2) }}</p>

    <p class="text-gray-700 mb-2"><strong>Duración Estimada:</strong> {{ $project->duration }} días</p>

    <p class="text-gray-700 mb-2"><strong>Categoría:</strong> {{ $project->category }}</p>

    <p class="text-gray-700 mb-2"><strong>Estado:</strong> {{ $project->status }}</p>


    <div class="mt-6">
        <a href="{{ route('projects.all') }}" class="text-blue-500 hover:underline">Volver a la lista de proyectos</a>
    </div>
</div>
