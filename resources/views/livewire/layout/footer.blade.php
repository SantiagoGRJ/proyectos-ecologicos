<footer class="bg-primary  bg-opacity-10 py-16 md:py-20 lg:py-24 w-full">
    <div class="container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row justify-between items-center w-full space-y-8 md:space-y-0 md:space-x-16">
            <!-- Logo y Descripción -->
            <div class="flex flex-col items-center text-center flex-1">

                <p class="text-green-400 mb-6 text-base font-medium">Transformamos ideas en proyectos con impacto
                    ecológico. Únete al cambio.</p>
                <div class="flex space-x-6">

                    <!-- Repite para otros íconos -->
                </div>
            </div>

            <!-- Enlaces útiles -->
            <div class="flex flex-col items-center text-center flex-1">
                <h2 class="text-lg font-semibold text-green-500 mb-6">Enlaces útiles</h2>
                <ul class="flex flex-col items-center">
                    <li><a href="{{ route('home.all') }}" class="text-base text-green-400 hover:text-primary mb-4">Home</a></li>
                    <li><a href="{{ route('about.all') }}" class="text-base text-green-400 hover:text-primary mb-4">Sobre Nosotros</a>
                    </li>
                    <li><a href="{{ route('contact.all') }}" class="text-base text-green-400 hover:text-primary mb-4">Contacto</a></li>
                    {{-- <li><a href="/" class="text-base text-green-400 hover:text-primary mb-4">Términos y Condiciones</a></li>
                    <li><a href="/" class="text-base text-green-400 hover:text-primary">Política de Privacidad</a></li> --}}
                </ul>
            </div>

            @if (!(Route::currentRouteName() === 'contact.all'))
                <!-- Suscripción -->
                <div class="flex flex-col items-center text-center flex-1">
                    <h2 class="text-lg font-semibold text-green-500 mb-6">Suscríbete</h2>
                    <p class="text-base text-green-400 mb-6">Recibe novedades y actualizaciones sobre proyectos
                        ecológicos y
                        más.</p>
                    <form action="" method="POST" class="flex flex-col items-center w-full">
                        <input type="email"
                            class="w-full rounded-md border border-green-400 bg-green-50 py-3 px-6 text-base font-medium text-green-600 placeholder-green-400 shadow-sm outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 dark:border-green-600 dark:bg-[#242B51] dark:text-green-300 dark:placeholder-green-500 dark:focus:border-green-400 dark:focus:ring-green-400 mb-4"
                            placeholder="Introduce tu correo" />
                        <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-lg">Suscribirse</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</footer>
