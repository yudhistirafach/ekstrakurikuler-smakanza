@props([
    /**
     * Contoh penggunaan:
     * :items="[
     *   ['label' => 'Beranda', 'url' => route('home')],
     *   ['label' => 'Ekstrakurikuler', 'url' => route('ekskul.index')],
     *   ['label' => 'Robotika']
     * ]"
     */
    'items' => [],
])

<div class="border-b border-gray-200 bg-white px-4 py-3 dark:bg-[#111a28] dark:border-[#2a3649]">
    <div class="mx-auto max-w-7xl">
        <nav class="flex text-sm text-gray-500 dark:text-gray-400">
            <ol class="flex items-center gap-2">
                @foreach ($items as $index => $item)
                    @if ($index > 0)
                        <li>
                            <span class="material-symbols-outlined text-[16px]">
                                chevron_right
                            </span>
                        </li>
                    @endif

                    <li>
                        @if (isset($item['url']))
                            <a
                                href="{{ $item['url'] }}"
                                class="hover:text-primary transition"
                            >
                                {{ $item['label'] }}
                            </a>
                        @else
                            <span class="font-medium text-primary">
                                {{ $item['label'] }}
                            </span>
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
