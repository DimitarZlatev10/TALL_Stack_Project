<div>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a wire:navigate href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white italic">Z&P
                    Watches</span>
            </a>

            @auth
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <p>Welcome, {{ auth()->user()->name }}!</p>
                    <a href="/logout" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
                    <a wire:navigate.hover href="/cart"
                        class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Cart</a>
                </div>
            @else
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a wire:navigate.hover href="/login"
                        class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                    <a wire:navigate.hover href="/register"
                        class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
                </div>
            @endauth
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a wire:navigate.hover href="/" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="/about"
                            class="text-gray-900 dark:text-white hover:underline">About
                            us</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="/watches"
                            class="text-gray-900 dark:text-white hover:underline">Watches</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
