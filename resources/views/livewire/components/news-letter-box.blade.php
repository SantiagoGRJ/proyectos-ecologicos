<div class="relative z-10 rounded-md bg-primary/[3%] p-8 dark:bg-primary/10 sm:p-11 lg:p-8 xl:p-11">
    <h3 class="mb-4 text-2xl font-bold leading-tight text-green-500 dark:text-white">
        Suscríbete para recibir futuras actualizaciones
    </h3>
    <p class="mb-11 border-b border-body-color border-opacity-25 pb-11 text-base font-medium leading-relaxed text-green-400 dark:border-white dark:border-opacity-25">
        Mantente informado sobre nuestras últimas novedades, eventos y actualizaciones importantes. Únete a nuestra comunidad y no te pierdas ninguna noticia.
    </p>

    <form action="" method="POST">
        @csrf
        <input
            type="text"
            name="name"
            placeholder="Ingresa tu nombre"
            class="mb-4 w-full rounded-md border border-body-color border-opacity-10 py-3 px-6 text-base font-medium text-body-color placeholder-body-color outline-none focus:border-primary focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
        />
        <input
            type="email"
            name="email"
            placeholder="Ingresa tu correo electrónico"
            class="mb-4 w-full rounded-md border border-body-color border-opacity-10 py-3 px-6 text-base font-medium text-body-color placeholder-body-color outline-none focus:border-primary focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
        />
        <input
            type="submit"
            value="Suscribirse"
            class="duration-80 bg-green-600 mb-4 w-full cursor-pointer rounded-md border border-transparent bg-primary py-3 px-6 text-center text-base font-medium text-white outline-none transition ease-in-out hover:bg-opacity-80 hover:shadow-signUp focus-visible:shadow-none"
        />
        <p class="text-center text-base font-medium leading-relaxed text-green-400">
            Garantizamos que no enviaremos spam. Por favor, no envíes correos no deseados.
        </p>
    </form>
    <div class="absolute top-0 left-0 z-[-1]">
        <!-- Código SVG de fondo aquí -->
    </div>
</div>

