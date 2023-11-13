<div>
    <section class=" font-poppins">
        <div class="max-w-6xl px-0 mx-auto lg:px-6">
            <div class="flex flex-col items-center h-full md:flex-row">
                <div
                    class="flex items-center justify-center h-screen max-w-full px-0 md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 lg:px-16 xl:px-12">
                    <div class="z-10 w-full p-10 bg-gray-100 dark:bg-gray-900 h-100">
                        <h2 class="text-xl font-bold leading-tight mb-7 md:text-3xl dark:text-gray-300">
                            Login to your account</h2>
                        @if (session('error'))
                            <p class="text-red-500 text-lg"> {{ session('error') }} </p>
                        @endif
                        <form wire:submit.prevent='login' class="mt-6">
                            <div>
                                <label for="" class="block text-gray-700 dark:text-gray-300">Email:</label>
                                <input wire:model='email'
                                    class="w-full px-4 py-3 mt-2 bg-white rounded-lg dark:text-gray-100 dark:bg-gray-800 dark:border dark:border-gray-800"
                                    name="" placeholder="Enter your email">
                                @error('email')
                                    <span
                                        class="text-red-500
                                    ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-5">
                                <div>
                                    <label for="" class="text-gray-700 dark:text-gray-300 ">Password:</label>
                                    <div class="relative flex items-center mt-2">
                                        <input type="password" wire:model='password'
                                            class="w-full px-4 py-3 bg-white rounded-lg dark:text-gray-400 dark:bg-gray-800 dark:border dark:border-gray-800 "
                                            name="" placeholder="Enter password">
                                    </div>
                                    @error('password')
                                        <span
                                            class="text-red-500
                                            ">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4 text-right">
                                <a href="#" class="text-sm font-semibold text-blue-700 hover:underline">forgot
                                    password?</a>
                            </div>
                            <button
                                class="w-full px-4 py-3 mt-6 font-semibold text-gray-200 bg-blue-600 rounded-lg hover:text-gray-700 hover:bg-blue-200 "
                                type="submit">LOGIN</button>
                            <p class="mt-6 text-gray-700 dark:text-gray-300">Don't have an account?
                                <a wire:navigate.hover href="/register"
                                    class="font-semibold text-blue-500 hover:text-blue-700"> Create an
                                    account
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
