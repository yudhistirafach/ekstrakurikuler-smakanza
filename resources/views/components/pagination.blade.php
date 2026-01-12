@props([
    'current' => 1,
    'total' => 1,
    'maxVisible' => 5, // maksimal tombol halaman yang ditampilkan
])

@php
    $current = (int) $current;
    $total = (int) $total;
    $maxVisible = min($maxVisible, $total);

    // Pastikan current valid
    $current = max(1, min($current, $total));

    // Hitung rentang halaman yang ditampilkan
    $start = 1;
    $end = $total;

    if ($total > $maxVisible) {
        $half = floor($maxVisible / 2);
        $start = max(1, $current - $half);
        $end = min($total, $start + $maxVisible - 1);

        // Adjust jika di ujung
        if ($end - $start + 1 < $maxVisible) {
            $start = max(1, $end - $maxVisible + 1);
        }
    }

    $url = fn ($page) => request()->fullUrlWithQuery(['page' => $page]);
@endphp

@if ($total > 1)
    <div class="mt-12 flex justify-center">
        <nav class="flex items-center gap-2">

            {{-- Previous --}}
            <a href="{{ $current > 1 ? $url($current - 1) : '#' }}"
                class="{{ $current <= 1 
                    ? 'pointer-events-none opacity-50' 
                    : 'text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700' }} 
                    size-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 transition-colors">
                <span class="material-symbols-outlined text-xl">chevron_left</span>
            </a>

            {{-- Page Numbers --}}
            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $current)
                    <span class="size-10 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium">
                        {{ $i }}
                    </span>
                @else
                    <a href="{{ $url($i) }}"
                        class="size-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700
                               bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-medium
                               hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                        {{ $i }}
                    </a>
                @endif
            @endfor

            {{-- Next --}}
            <a href="{{ $current < $total ? $url($current + 1) : '#' }}"
                class="{{ $current >= $total 
                    ? 'pointer-events-none opacity-50' 
                    : 'text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700' }} 
                    size-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 transition-colors">
                <span class="material-symbols-outlined text-xl">chevron_right</span>
            </a>

        </nav>
    </div>
@endif