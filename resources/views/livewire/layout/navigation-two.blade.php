<nav class="bg-gray-100 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ Auth::check() ?  route('projects.all') : route('home.all') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Storage::url('projects/'.'logo-reducido.png')  }}" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-bold whitespace-nowrap text-green-600 dark:text-green-400">EcoEmprende</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            {{-- <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                started</button> --}}
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-green-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-100 dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                    <a href="{{ route('home.all') }}"
                        class="block py-2 px-3 text-gray-900  rounded md:bg-transparent  md:p-0 hover:text-green-700 dark:md:text-green-400 dark:hover:text-green-300 transition"
                        aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.all') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-600 md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-green-300 transition">
                        Sobre Nosotros
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.all') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-600 md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-green-300 transition">
                        Contacto
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-600 md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-green-300 transition">
                        Iniciar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
