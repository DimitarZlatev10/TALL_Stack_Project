<div>
    @if (session('success'))
        <section class="flex items-center bg-gray-50 font-poppins dark:bg-gray-900 ">
            <div class="justify-center flex-1 max-w-4xl px-4 py-4 mx-auto lg:py-10 ">
                <div class="relative p-6 rounded-xl text-teal-700 bg-teal-100 border-b-2 border-teal-500 dark:border-teal-400 dark:bg-gray-800"
                    role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 mr-4 text-teal-500 dark:text-teal-400 bi bi-check-circle-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-1 text-lg font-bold dark:text-gray-300"> {{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Section: Design Block -->
    <section class="mb-40">

        <!-- Navbar -->

        <!-- Navbar -->

        <!-- Jumbotron -->
        <div class="bg-neutral-50 px-6 py-12 text-center dark:bg-neutral-900 md:px-12 lg:text-left">
            <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="mt-12 lg:mt-0 text-center">
                        <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
                            Upgrade your watch collection <br /><span class="text-primary">with our watches!</span>
                        </h1>
                        <a class="mb-2 inline-block rounded bg-primary px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] md:mr-2 md:mb-0"
                            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Browse our
                            collection</a>
                        {{-- <a class="inline-block rounded px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:hover:bg-neutral-800 dark:hover:bg-opacity-60"
                            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Learn
                            more</a> --}}
                    </div>
                    <div class="mb-12 lg:mb-0">
                        <img src="pictures/g-shock.avif" width="700" height="700"
                            class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</div>
