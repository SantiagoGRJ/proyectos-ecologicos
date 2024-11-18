<section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 md:w-8/12 lg:w-7/12">
          <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
            <h1 class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl">
              {{ $pageName }}
            </h1>
            <p class="text-base font-medium leading-relaxed text-body-color">
              {{ $description }}
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-4/12 lg:w-5/12">
          <div class="text-end">
            <ul class="flex items-center md:justify-end">
              <li class="flex items-center">
                <a href="/" class="pr-1 text-base font-medium text-body-color hover:text-primary">
                  Home
                </a>
                <span class="mr-3 block h-2 w-2 rotate-45 border-t-2 border-r-2 border-body-color"></span>
              </li>
              <li class="text-base font-medium text-primary">
                {{ $pageName }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <span class="absolute top-0 left-0 z-[-1]">
        <!-- SVG Background Shapes -->
      </span>
      <span class="absolute right-0 top-0 z-[-1]">
        <!-- SVG Background Shapes -->
      </span>
    </div>
  </section>
