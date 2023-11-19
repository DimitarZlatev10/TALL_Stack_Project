@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-base h-10">
            {{-- prev --}}
            @if ($paginator->onFirstPage())
                <li
                    class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-gray-300 border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < </li>
                    @else
                <li wire:click='previousPage'
                    class="flex items-center justify-center cursor-pointer px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < </li>
            @endif
            {{-- prev --}}

            {{-- numbers --}}

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li
                                class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                {{ $page }}
                            </li>
                        @else
                            <li wire:click="gotoPage({{ $page }})"
                                class="flex items-center justify-center cursor-pointer px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                {{ $page }}
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach



            {{-- numbers --}}

            {{-- next --}}
            @if ($paginator->hasMorePages())
                <li wire:click.debounce.200ms='nextPage'
                    class="flex items-center justify-center cursor-pointer px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </li>
            @else
                <li
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-300 border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </li>
            @endif
            {{-- next --}}
        </ul>
    </nav>
@endif
