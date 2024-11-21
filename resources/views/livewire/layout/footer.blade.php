<footer class="bg-primary bg-opacity-10 py-16 md:py-20 lg:py-24 w-full">
    <div class="container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row justify-between items-center w-full space-y-8 md:space-y-0 md:space-x-16">
            <!-- Logo y Descripción -->
            <div class="flex flex-col items-center text-center flex-1">
                <a href="/" class="mb-6">
                    <img src="{{ asset('images/logo/logo-2.svg') }}" alt="logo" class="w-36 dark:hidden" />
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" class="hidden w-36 dark:block" />
                </a>
                <p class="text-green-400 mb-6 text-base font-medium">Transformamos ideas en proyectos con impacto
                    ecológico. Únete al cambio.</p>
                <div class="flex space-x-6">
                    <a href="/" aria-label="social-link" class="text-gray-600 hover:text-primary">
                        <!-- Ícono de Facebook -->
                        <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                            <path
                                d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z" />
                        </svg>
                    </a>
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
