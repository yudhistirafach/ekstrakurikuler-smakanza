@props([
    'title',
    'image',
    'level' => null, // Nasional / Provinsi / dll
    'club' => null, // RPL Club
    'icon' => 'terminal',
    'winner' => null, // Ahmad Rizky
    'class' => null, // XII RPL 1
    'date' => null,
    'slug',
])

<article
    class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full">

    <!-- IMAGE -->
    <div class="relative h-48 overflow-hidden">
        @if ($level)
            <div class="absolute top-3 right-3 z-10">
                <span
                    class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-gold text-black text-xs font-bold shadow-sm">
                    <span class="material-symbols-outlined text-[16px]">emoji_events</span>
                    {{ $level }}
                </span>
            </div>
        @endif

        <div class="bg-cover bg-center w-full h-full group-hover:scale-110 transition-transform duration-500"
            style="background-image: url('{{ $image }}');">
        </div>

        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
    </div>

    <!-- CONTENT -->
    <div class="p-5 flex flex-col flex-1">
        @if ($club)
            <div class="flex items-center gap-2 mb-3">
                <div class="p-1.5 rounded-lg bg-blue-50 dark:bg-blue-900/30 text-primary">
                    <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
                </div>
                <span class="text-xs font-semibold text-primary uppercase tracking-wide">
                    {{ $club }}
                </span>
            </div>
        @endif

        <h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 line-clamp-2">
            {{ $title }}
        </h3>

        <div class="space-y-2 mt-auto">
            @if ($winner)
                <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400 text-sm">
                    <span class="material-symbols-outlined text-[18px]">person</span>
                    <span>{{ $winner }}{{ $class ? " ($class)" : '' }}</span>
                </div>
            @endif

            @if ($date)
                <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400 text-sm">
                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    <span>{{ $date }}</span>
                </div>
            @endif
        </div>

        <!-- ACTION -->
        <div class="mt-5 pt-4 border-t border-gray-100 dark:border-gray-700">
            <button
                class="w-full py-2 px-4 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white text-sm font-semibold transition-colors">
                <a href="{{ route('prestasi.detail', $slug) }}" class="flex items-center justify-center gap-2">
                    Lihat Detail
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </button>
        </div>
    </div>
</article>
