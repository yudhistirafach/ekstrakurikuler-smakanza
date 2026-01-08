@props(['is_mandatory', 'title', 'slug', 'category', 'description', 'image_url', 'icon'])
<div
    class="group relative flex flex-col overflow-hidden rounded-2xl border border-[#e7ecf4] bg-white transition-all hover:shadow-xl hover:shadow-primary/5 dark:border-gray-800 dark:bg-[#151c2a]">
    <div class="relative aspect-video w-full overflow-hidden">
        @if($is_mandatory)
        <div
            class="absolute right-3 top-3 z-10 rounded-full bg-accent px-2 py-1 text-[10px] font-bold text-white shadow-sm">
            WAJIB
        </div>
        @endif
        <img alt="Scout camping activity"
            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
            data-alt="Camping tents in a forest setting during sunset"
            src="{{ $image_url ?: 'https://placehold.co/600x400/e7ecf4/64748b?text=No+Image' }}" 
            onerror="this.src='https://placehold.co/600x400/e7ecf4/64748b?text=No+Image'" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60">
        </div>
    </div>
    <div class="flex flex-1 flex-col p-5">
        <div class="mb-2 flex items-center gap-2 text-xs font-semibold text-primary">
            <span class="material-symbols-outlined text-sm">{{ $icon }}</span>
            {{ $category }}
        </div>
        <h3 class="mb-2 text-lg font-bold text-[#0d131c] dark:text-white">{{ $title }}</h3>
        <p class="mb-4 flex-1 text-sm text-gray-500 dark:text-gray-400">{{ $description }}</p>
        <a href="{{ route('ekstrakurikuler.detail', $slug) }}">
            <button
                class="flex w-full items-center justify-center rounded-lg bg-background-light py-2.5 text-sm font-bold text-[#0d131c] hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 transition-colors">
                Detail Ekstra
            </button>
        </a>
    </div>
</div>