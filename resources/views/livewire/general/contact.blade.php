<div class="flex flex-col items-center  bg-gray-900 ">
    {{-- Nothing in the world is as soft and yielding as water. --}}


    {{-- resources/views/components/contact.blade.php --}}
<section id="contact" class="overflow-hidden py-16 md:py-20 lg:py-28">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="mb-12 rounded-md bg-primary/[3%] py-11 px-8 dark:bg-dark sm:p-[55px] lg:mb-5 lg:px-8 xl:p-[55px]">
              <h2 class="mb-3 text-2xl font-bold text-green-500 dark:text-white sm:text-3xl lg:text-2xl xl:text-3xl">
                ¿Necesitas ayuda? Abre un ticket
              </h2>
              <p class="mb-12 text-base font-medium text-green-400">
                Nuestro equipo de soporte se pondrá en contacto contigo lo antes posible por correo electrónico.
              </p>
              <form>
                <div class="-mx-4 flex flex-wrap">
                  <!-- Nombre -->
                  <div class="w-full px-4 md:w-1/2">
                    <div class="mb-8">
                      <label for="name" class="mb-3 block text-sm font-medium text-green-400 dark:text-white">
                        Tu nombre
                      </label>
                      <input
                        type="text"
                        id="name"
                        placeholder="Ingresa tu nombre"
                        class="w-full rounded-md border border-green-400 bg-green-50 py-3 px-6 text-base font-medium text-green-600 placeholder-green-400 shadow-sm outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 dark:border-green-600 dark:bg-[#242B51] dark:text-green-300 dark:placeholder-green-500 dark:focus:border-green-400 dark:focus:ring-green-400"
                      />
                    </div>
                  </div>
                  <!-- Correo -->
                  <div class="w-full px-4 md:w-1/2">
                    <div class="mb-8">
                      <label for="email" class="mb-3 block text-sm font-medium text-green-400 dark:text-white">
                        Tu correo electrónico
                      </label>
                      <input
                        type="email"
                        id="email"
                        placeholder="Ingresa tu correo electrónico"
                        class="w-full rounded-md border border-green-400 bg-green-50 py-3 px-6 text-base font-medium text-green-600 placeholder-green-400 shadow-sm outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 dark:border-green-600 dark:bg-[#242B51] dark:text-green-300 dark:placeholder-green-500 dark:focus:border-green-400 dark:focus:ring-green-400"
                      />
                    </div>
                  </div>
                  <!-- Mensaje -->
                  <div class="w-full px-4">
                    <div class="mb-8">
                      <label for="message" class="mb-3 block text-sm font-medium text-green-400 dark:text-white">
                        Tu mensaje
                      </label>
                      <textarea
                        id="message"
                        rows="5"
                        placeholder="Ingresa tu mensaje"
                        class="w-full resize-none rounded-md border border-green-400 bg-green-50 py-3 px-6 text-base font-medium text-green-600 placeholder-green-400 shadow-sm outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 dark:border-green-600 dark:bg-[#242B51] dark:text-green-300 dark:placeholder-green-500 dark:focus:border-green-400 dark:focus:ring-green-400"
                      ></textarea>
                    </div>
                  </div>
                  <!-- Botón -->
                  <div class="w-full px-4">
                    <button
                      type="submit"
                      class="w-full rounded-md bg-green-600 py-4 px-9 text-base font-medium text-white shadow-lg transition duration-300 ease-in-out hover:bg-green-500 hover:shadow-xl dark:bg-green-700 dark:hover:bg-green-600"
                    >
                      Enviar ticket
                    </button>
                  </div>
                </div>
              </form>

            </div>
          </div>

        <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
          <livewire:components.news-letter-box >
        </div>
      </div>
    </div>
  </section>

  <livewire:layout.footer />
</div>
