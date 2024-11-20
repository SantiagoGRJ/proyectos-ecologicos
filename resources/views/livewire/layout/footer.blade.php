<footer class="bg-primary bg-opacity-10 py-16 md:py-20 lg:py-24 w-full">
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center items-center space-x-16 space-y-8 md:space-y-0">
        <!-- Logo y Descripción -->
        <div class="flex flex-col items-center text-center md:w-1/4">
          <a href="/" class="mb-6">
            <img src="{{ asset('images/logo/logo-2.svg') }}" alt="logo" class="w-36 dark:hidden" />
            <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" class="hidden w-36 dark:block" />
          </a>
          <p class="text-green-400 mb-6 text-base font-medium">Transformamos ideas en proyectos con impacto ecológico. Únete al cambio.</p>
          <div class="flex space-x-6">
            <a href="/" aria-label="social-link" class="text-gray-600 hover:text-primary">
              <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                <path d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z" />
              </svg>
            </a>
            <a href="/" aria-label="social-link" class="text-gray-600 hover:text-primary">
              <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                <path d="M17.5058 2.07119C17.3068 1.2488 16.7099 0.609173 15.9423 0.395963C14.5778 7.26191e-08 9.0627 0 9.0627 0C9.0627 0 3.54766 7.26191e-08 2.18311 0.395963C1.41555 0.609173 0.818561 1.2488 0.619565 2.07119C0.25 3.56366 0.25 6.60953 0.25 6.60953C0.25 6.60953 0.25 9.68585 0.619565 11.1479C0.818561 11.9703 1.41555 12.6099 2.18311 12.8231C3.54766 13.2191 9.0627 13.2191 9.0627 13.2191C9.0627 13.2191 14.5778 13.2191 15.9423 12.8231C16.7099 12.6099 17.3068 11.9703 17.5058 11.1479C17.8754 9.68585 17.8754 6.60953 17.8754 6.60953C17.8754 6.60953 17.8754 3.56366 17.5058 2.07119ZM7.30016 9.44218V3.77687L11.8771 6.60953L7.30016 9.44218Z" />
              </svg>
            </a>
            <a href="/" aria-label="social-link" class="text-gray-600 hover:text-primary">
              <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                <path d="M16.3024 2.26027L17.375 1.0274C17.6855 0.693493 17.7702 0.436644 17.7984 0.308219C16.9516 0.770548 16.1613 0.924658 15.6532 0.924658H15.4556L15.3427 0.821918C14.6653 0.282534 13.8185 0 12.9153 0C10.9395 0 9.3871 1.48973 9.3871 3.21062C9.3871 3.31336 9.3871 3.46747 9.41532 3.57021L9.5 4.0839L8.90726 4.05822C5.29435 3.95548 2.33065 1.13014 1.85081 0.642123C1.06048 1.92637 1.5121 3.15925 1.99194 3.92979L2.95161 5.36815L1.42742 4.5976C1.45565 5.67637 1.90726 6.52397 2.78226 7.14041L3.54435 7.65411L2.78226 7.93665C3.2621 9.24658 4.33468 9.78596 5.125 9.99144L6.16935 10.2483L5.18145 10.8647C3.60081 11.8921 1.625 11.8151 0.75 11.738C2.52823 12.8682 4.64516 13.125 6.1129 13.125C7.21371 13.125 8.03226 13.0223 8.22984 12.9452C16.1331 11.25 16.5 4.82877 16.5 3.54452V3.36473L16.6694 3.26199C17.629 2.44007 18.0242 2.00342 18.25 1.74658C18.1653 1.77226 18.0524 1.82363 17.9395 1.84932L16.3024 2.26027Z" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Enlaces útiles -->
        <div class="w-full sm:w-1/3 md:w-1/4 text-center">
          <h2 class="text-lg font-semibold text-green-500 mb-6">Enlaces útiles</h2>
          <ul>
            <li><a href="/" class="text-base text-green-400 hover:text-primary mb-4">Blog</a></li>
            <li><a href="/" class="text-base text-green-400 hover:text-primary mb-4">Precios</a></li>
            <li><a href="/" class="text-base text-green-400 hover:text-primary mb-4">Seguridad</a></li>
            <li><a href="/" class="text-base text-green-400 hover:text-primary mb-4">Términos y Condiciones</a></li>
            <li><a href="/" class="text-base text-green-400 hover:text-primary">Política de Privacidad</a></li>
          </ul>
        </div>

        <!-- Suscripción -->
        <div class="w-full sm:w-1/3 md:w-1/4 text-center">
          <h2 class="text-lg font-semibold text-green-500 mb-6">Suscríbete</h2>
          <p class="text-base text-green-400 mb-6">Recibe novedades y actualizaciones sobre proyectos ecológicos y más.</p>
          <form action="" method="POST" class="flex flex-col items-center">
            <input type="email" class="border-2 border-gray-300 rounded-lg px-4 py-2 w-full mb-4" placeholder="Introduce tu correo" />
            <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-lg">Suscribirse</button>
          </form>
        </div>
      </div>
    </div>
  </footer>
