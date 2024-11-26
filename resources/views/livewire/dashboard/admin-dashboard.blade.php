<div class="w-screen h-screen bg-gray-900 text-white">
    {{-- The Master doesn't talk, he acts. --}}
    <h1 class="text-4xl font-bold text-center text-green-400 my-6">Panel Administrador</h1>

    <div class="container mx-auto px-6">
        <!-- Proyectos en espera de aprobación -->
        <section class="py-8">
            <h2 class="text-3xl font-semibold text-green-400 mb-4">Aprobación de Proyectos</h2>
            <livewire:projects.project-approval />
        </section>
    </div>
</div>
