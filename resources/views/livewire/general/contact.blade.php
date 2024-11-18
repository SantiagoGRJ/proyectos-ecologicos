<div class="mx-auto max-w-[1300px]">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <livewire:components.bread-crumb pageName="Contact Page" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />


    {{-- resources/views/components/contact.blade.php --}}
<section id="contact" class="overflow-hidden py-16 md:py-20 lg:py-28">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
          <div class="mb-12 rounded-md bg-primary/[3%] py-11 px-8 dark:bg-dark sm:p-[55px] lg:mb-5 lg:px-8 xl:p-[55px]">
            <h2 class="mb-3 text-2xl font-bold text-black dark:text-white sm:text-3xl lg:text-2xl xl:text-3xl">
              Need Help? Open a Ticket
            </h2>
            <p class="mb-12 text-base font-medium text-body-color">
              Our support team will get back to you ASAP via email.
            </p>
            <form>
              <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2">
                  <div class="mb-8">
                    <label for="name" class="mb-3 block text-sm font-medium text-dark dark:text-white">
                      Your Name
                    </label>
                    <input type="text" id="name" placeholder="Enter your name" class="w-full rounded-md border py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51]" />
                  </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                  <div class="mb-8">
                    <label for="email" class="mb-3 block text-sm font-medium text-dark dark:text-white">
                      Your Email
                    </label>
                    <input type="email" id="email" placeholder="Enter your email" class="w-full rounded-md border py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51]" />
                  </div>
                </div>
                <div class="w-full px-4">
                  <div class="mb-8">
                    <label for="message" class="mb-3 block text-sm font-medium text-dark dark:text-white">
                      Your Message
                    </label>
                    <textarea id="message" rows="5" placeholder="Enter your Message" class="w-full resize-none rounded-md border py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51]"></textarea>
                  </div>
                </div>
                <div class="w-full px-4">
                  <button type="submit" class="rounded-md bg-primary py-4 px-9 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-80">
                    Submit Ticket
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
