<div wire:init='updateCart'>
    <section class="flex items-center bg-stone-200 h-fit font-poppins dark:bg-gray-700 ">
        <div class="justify-center flex-1 px-4 py-6 mx-auto max-w-7xl lg:py-4 md:px-6">
            <div class="p-8 bg-gray-50 dark:bg-gray-800">
                <h2 class="mb-8 text-4xl font-bold dark:text-gray-400">Your Cart</h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 mb-8 xl:w-8/12 xl:mb-0">
                        <div class="flex flex-wrap items-center mb-6 -mx-4 md:mb-8">
                            <div class="w-full md:block hidden px-4 mb-6 md:w-4/6 lg:w-6/12 md:mb-0">
                                <h2 class="font-bold text-gray-500 dark:text-gray-400">Product name</h2>
                            </div>
                            <div class="hidden px-4 lg:block lg:w-2/12">
                                <h2 class="font-bold text-gray-500 dark:text-gray-400">Price</h2>
                            </div>
                            <div class="hidden md:block px-4 md:w-1/6 lg:w-2/12 ">
                                <h2 class="font-bold text-gray-500 dark:text-gray-400">Quantity</h2>
                            </div>
                            <div class="hidden md:block px-4 text-right md:w-1/6 lg:w-2/12 ">
                                <h2 class="font-bold text-gray-500 dark:text-gray-400"> Subtotal</h2>
                            </div>
                        </div>
                        <div class="py-4 mb-8 border-t border-b border-gray-200 dark:border-gray-700">

                            @forelse ($cartItems as $item)
                                <div class="flex flex-wrap items-center mb-6 -mx-4 md:mb-8">
                                    <div class="w-full px-4 mb-6 md:w-4/6 lg:w-6/12 md:mb-0">
                                        <div class="flex flex-wrap items-center -mx-4">
                                            <div class="w-full px-4 mb-3 md:w-1/3">
                                                <div class="w-full h-96 md:h-24 md:w-24">
                                                    <img src="/pictures/g-shock.avif" alt=""
                                                        class="object-cover w-full h-full">
                                                </div>
                                            </div>
                                            <div class="w-2/3 px-4">
                                                <h2 class="mb-2 text-xl font-bold dark:text-gray-400">
                                                    <a wire:navigate
                                                        href="/watches/{{ $item->watch->slug }}">{{ $item->watch->title }}</a>
                                                </h2>
                                                {{-- <p class="text-gray-500 dark:text-gray-400 ">Picture frame</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden px-4 lg:block lg:w-2/12">
                                        <p class="text-lg font-bold text-blue-500 dark:text-gray-400">
                                            ${{ $item->watch->price }}
                                        </p>
                                        {{-- <span class="text-xs text-gray-500 line-through dark:text-gray-400">$1500</span> --}}
                                    </div>
                                    <div class="w-auto px-4 md:w-1/6 lg:w-2/12 ">
                                        <div
                                            class="inline-flex items-center px-4 font-semibold text-gray-500 border border-gray-200 rounded-md dark:border-gray-700 ">
                                            <button class="py-2 hover:text-gray-700 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <input type="number"
                                                class="w-12 px-2 py-4 text-center border-0 rounded-md dark:bg-gray-800 bg-gray-50 dark:text-gray-400 md:text-right"
                                                placeholder="1">
                                            <button class="py-2 hover:text-gray-700 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-auto px-4 text-right md:w-1/6 lg:w-2/12 ">
                                        <p class="text-lg font-bold text-blue-500 dark:text-gray-400">$99.00</p>
                                    </div>
                                </div>
                            @empty
                                <p class="text-red-500">no items in your cart</p>
                            @endforelse
                        </div>
                        <div class="flex flex-wrap items-center gap-4">
                            <span class="text-gray-700 dark:text-gray-400">Apply Coupon</span>
                            <input type="text"
                                class="flex-1 px-8 py-4 font-normal placeholder-gray-300 border dark:border-gray-700 dark:placeholder-gray-500 md:flex-none md:mr-6 dark:text-gray-400 dark:bg-gray-800"
                                placeholder="x304k45" required="">
                            <button
                                class="flex-1 inline-block px-8 py-4 font-bold text-center text-gray-100 bg-blue-500 rounded-md hover:bg-blue-600 md:flex-none">Apply</button>
                        </div>
                    </div>
                    <div class="w-full px-4 xl:w-4/12">
                        <div class="p-6 border border-blue-100 dark:bg-gray-900 dark:border-gray-900 bg-blue-50 md:p-8">
                            <h2 class="mb-8 text-3xl font-bold text-gray-700 dark:text-gray-400">Order Summary</h2>
                            <div
                                class="flex items-center justify-between pb-4 mb-4 border-b border-gray-300 dark:border-gray-700 ">
                                <span class="text-gray-700 dark:text-gray-400">Subtotal</span>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-400 ">$99</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 mb-4 ">
                                <span class="text-gray-700 dark:text-gray-400 ">Shipping</span>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-400 ">Free</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 mb-4 ">
                                <span class="text-gray-700 dark:text-gray-400">Order Total</span>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-400">$99.00</span>
                            </div>
                            <h2 class="text-lg text-gray-500 dark:text-gray-400">We offer:</h2>
                            <div class="flex items-center mb-4 ">
                                <a href="#">
                                    <img src="https://i.postimg.cc/g22HQhX0/70599-visa-curved-icon.png" alt=""
                                        class="object-cover h-16 mr-2 w-26">
                                </a>
                                <a href="#">
                                    <img src="https://i.postimg.cc/HW38JkkG/38602-mastercard-curved-icon.png"
                                        alt="" class="object-cover h-16 mr-2 w-26">
                                </a>
                                <a href="#">
                                    <img src="https://i.postimg.cc/HL57j0V3/38605-paypal-straight-icon.png"
                                        alt="" class="object-cover h-16 mr-2 w-26">
                                </a>
                            </div>
                            <div class="flex items-center justify-between ">
                                <button
                                    class="block w-full py-4 font-bold text-center text-gray-100 uppercase bg-blue-500 rounded-md hover:bg-blue-600">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
