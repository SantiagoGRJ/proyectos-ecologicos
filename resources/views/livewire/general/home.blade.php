<div class="bg-gray-900">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <!-- Navbar -->


<!-- Banner -->
<section
    class="bg-cover bg-center h-96 flex justify-center flex-col items-center text-center text-white relative"
    style="background-image: url({{ Storage::url('assets/'.'Proyectose.jpg') }});">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa de opacidad -->
    <h1 class="text-4xl  font-bold relative">Bienvenidos a <span class="text-4xl font-bold  text-green-400 " >EcoEmprende</span></h1>
    <p class="mt-4 text-xl relative">Apoya proyectos ecológicos y haz crecer el futuro sostenible</p>
</section>



 <!-- Proyectos Destacados -->
    <section id="projects" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Proyectos Destacados</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="renewable-energy" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Energía Renovable</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects_energy as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Proyectos de Reciclaje -->
    <section id="recycling" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Reciclaje</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects_recycle as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Proyectos de Agricultura Sostenible -->
    <section id="sustainable-agriculture" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Agricultura Sostenible</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects_agriculture as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Proyectos de Energía Solar -->
    <section id="solar-energy" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Energía Solar</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects_sun as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Proyectos de Reforestación -->
    <section id="reforestation" class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-green-400 mb-12">Reforestación</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($projects_refores as $project)
            <div
                class="card bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ Storage::url('projects/'.$project->path_img) }}" alt="Proyecto"
                    class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-green-400 mb-2">{{ $project->name }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ $project->description }}</p>
                    <a href="{{ route('project.detail',$project->id) }}"
                        class="text-green-400 hover:text-green-500 font-medium inline-block">
                        Ver más →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>



<!-- Call to Action -->
<livewire:layout.footer />

</div>
