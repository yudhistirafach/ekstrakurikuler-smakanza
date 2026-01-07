@props([
    'current' => 1,   // halaman aktif
    'total' => 1,     // total halaman
])

@if ($total > 1)
<div class="mt-12 flex justify-center">
    <nav aria-label="Pagination" class="flex items-center gap-2">

        {{-- Previous --}}
        <button
            class="size-10 flex items-center justify-center rounded-lg border
                {{ $current === 1
                    ? 'border-gray-200 text-gray-300 cursor-not-allowed dark:border-gray-700'
                    : 'border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700'
                }}">
            <span class="material-symbols-outlined">chevron_left</span>
        </button>

        {{-- Page Numbers --}}
        @for ($page = 1; $page <= $total; $page++)
            @if ($page == $current)
                <button
                    class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-medium">
                    {{ $page }}
                </button>
            @else
                <button
                    class="size-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700
                    bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200
                    hover:bg-gray-50 dark:hover:bg-gray-700 font-medium">
                    {{ $page }}
                </button>
            @endif
        @endfor

        {{-- Next --}}
        <button
            class="size-10 flex items-center justify-center rounded-lg border
                {{ $current === $total
                    ? 'border-gray-200 text-gray-300 cursor-not-allowed dark:border-gray-700'
                    : 'border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700'
                }}">
            <span class="material-symbols-outlined">chevron_right</span>
        </button>

    </nav>
</div>
@endif
