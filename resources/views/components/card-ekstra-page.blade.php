@props([
    'title',
    'slug',
    'category',
    'date' => null,
    'location',
    'quota',
    'image_url',
    'icon' => null,
    'is_mandatory' => false,
])

<div
    class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl border border-[#e7ecf4] dark:border-gray-800 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 overflow-hidden">
    <div class="relative h-48 w-full bg-gray-100 dark:bg-gray-800 overflow-hidden">
        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat transition-transform duration-500 group-hover:scale-105"
            data-alt="Students playing basketball in an indoor court"
        style='background-image: url("{{ $image_url ?: 'https://placehold.co/600x400/e7ecf4/64748b?text=No+Image' }}");'>
        </div>
        <div class="absolute top-3 left-3">
            <span class="px-3 py-1 bg-white/90 dark:bg-black/90 backdrop-blur-sm text-[#0d131c] dark:text-white text-xs font-bold rounded-full shadow-sm">
                {{ $category }}
            </span>
        </div>
    </div>
    <div class="p-5 flex flex-col flex-1">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-bold text-[#0d131c] dark:text-white leading-tight">{{ $title }}</h3>
        </div>
        <div class="flex flex-col gap-2 mb-4 flex-1">
            <div class="flex items-center gap-2 text-[#49699c] dark:text-gray-400 text-sm">
                <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                <span>{{ $date }}</span>
            </div>
            <div class="flex items-center gap-2 text-[#49699c] dark:text-gray-400 text-sm">
                <span class="material-symbols-outlined text-[18px]">location_on</span>
                <span>{{ $location }}</span>
            </div>
        </div>
        <!-- Quota Section -->
        <div class="mb-5">
            <div class="flex justify-between items-end mb-1">
                <span class="text-xs font-medium text-[#49699c] dark:text-gray-400">Sisa Kuota</span>
                <span class="text-xs font-bold text-accent">{{ $quota }} Kursi</span>
            </div>
            <div class="w-full bg-gray-100 dark:bg-gray-700 rounded-full h-2">
                <div class="bg-accent h-2 rounded-full" style="width: {{ ($quota / 40 * 100) }}%"></div>
            </div>
            <p class="text-[10px] text-right text-gray-400 dark:text-gray-500 mt-1">{{ 40 }}/{{ $quota }} Terdaftar</p>
        </div>
        <a  href="{{ route('ekstrakurikuler.detail', $slug) }}"
            class="w-full py-2.5 border border-primary text-primary hover:bg-primary hover:text-white font-medium rounded-xl text-sm transition-olors flex items-center justify-center gap-2">
            <span>Lihat Detail</span>
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
        </a>
    </div>
</div>
