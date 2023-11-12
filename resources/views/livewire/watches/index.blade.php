<section class="flex items-center bg-gray-100 dark:bg-gray-800">
    <div class="p-4 mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($watches as $watch)
                <div class="mt-56 bg-white rounded shadow dark:bg-gray-700">
                    <div class="relative z-20 p-6 group">
                        <div class="relative block h-64 mb-4 -mt-56 overflow-hidden rounded -top-full">
                            <img class="object-cover transition-all group-hover:scale-110" src="pictures/g-shock.avif"
                                width="252" height="256" alt="">
                            <div class="absolute flex flex-col top-4 right-4">
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-blue-200 dark:hover:bg-blue-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                            </path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-blue-200 dark:hover:bg-blue-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h2 class="mb-2 text-xl font-bold text-black dark:text-white">
                                {{ $watch->title }}
                            </h2>
                        </a>
                        <p class="mb-3 text-lg font-bold text-blue-500 dark:text-blue-300 ">
                            <span>$150.00</span>
                            {{-- <span class="text-xs font-semibold text-gray-400 line-through ">$200.00</span> --}}
                        </p>
                        <div class="flex gap-1 text-orange-400">
                            Category
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
