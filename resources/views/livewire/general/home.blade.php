<div class="">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <!-- Navbar -->


<!-- Banner -->
<section
    class="bg-cover bg-center h-96 flex justify-center flex-col items-center text-center text-white relative"
    style="background-image: url({{ Storage::url('assets/'.'Proyectose.jpg') }});">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa de opacidad -->
    <h1 class="text-4xl  font-bold relative">Bienvenidos a EcoCrowd</h1>
    <p class="mt-4 text-xl relative">Apoya proyectos ecológicos y haz crecer el futuro sostenible</p>
</section>



<!-- Proyectos Destacados -->
<section id="projects" class="container mx-auto my-12">
    <h2 class="text-3xl font-semibold text-center text-green-800 mb-6">Proyectos Destacados</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($projects as $project)
        <div class="card border rounded-lg shadow-md">
            <img src="project-image.jpg" alt="Proyecto" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl text-green-800 font-semibold">{{ $project->name }}</h3>
                <p class="text-green-600 mt-2">{{ $project->description }}</p>
                <a href="/projects/1" class="text-blue-600 mt-4 inline-block">Ver más</a>
            </div>
        </div>
        @endforeach
        <!-- Repite para más proyectos -->
    </div>
</section>

<!-- Call to Action -->
<section class="bg-green-600 text-white text-center py-12">
    <h2 class="text-3xl  font-semibold">Únete a nuestra comunidad</h2>
    <p class="mt-4 text-xl">Regístrate para apoyar proyectos ecológicos.</p>
    <a href="/register" class="bg-white text-green-600 px-6 py-3 rounded-lg mt-4 inline-block">Regístrate ahora</a>
</section>

</div>
