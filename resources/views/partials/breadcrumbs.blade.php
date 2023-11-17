@unless ($breadcrumbs->isEmpty())
    <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl px-4 py-5">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumb-item inline-flex items-center"><a wire:navigate.hover href="{{ $breadcrumb->url }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            {{ $breadcrumb->title }} /
                        </a></li>
                @else
                    <li
                        class="breadcrumb-item inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        {{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ol>
    </div>
@endunless
