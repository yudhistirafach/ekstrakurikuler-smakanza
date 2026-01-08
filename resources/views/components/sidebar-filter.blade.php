@props(['categories'])
<aside class="w-full md:w-64 flex-shrink-0">
    <div class="sticky top-24 bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-[#e7ecf4] dark:border-gray-800 p-5">
        <div class="flex flex-col gap-4">
            <div>
                <h2 class="text-lg font-bold text-[#0d131c] dark:text-white">Kategori</h2>
                <p class="text-[#49699c] dark:text-gray-400 text-sm">Filter jenis kegiatan</p>
            </div>
            
            <!-- Filters List -->
            <div class="flex flex-row md:flex-col gap-2 overflow-x-auto md:overflow-visible scrollbar-hide pb-2 md:pb-0">
                <!-- Semua (All) Button -->
                <a href="{{ route('ekstrakurikuler') }}"
                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl shrink-0 group transition-all {{ request('category') === null
                       ? 'bg-primary/10 text-primary font-semibold'
                       : 'bg-transparent text-[#49699c] dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-[#0d131c] dark:hover:text-white' }}">
                    <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform flex-shrink-0">grid_view</span>
                    <span class="text-sm whitespace-nowrap">Semua</span>
                </a>

                <!-- Category Buttons -->
                @foreach ($categories as $category)
                <a href="{{ route('ekstrakurikuler', ['category' => $category->slug]) }}"
                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl shrink-0 group transition-all {{ request('category') === $category->slug
                       ? 'bg-primary/10 text-primary font-semibold'
                       : 'bg-transparent text-[#49699c] dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-[#0d131c] dark:hover:text-white' }}">
                    <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform flex-shrink-0">{{ $category->icon }}</span>
                    <span class="text-sm truncate max-w-[160px]" title="{{ $category->name }}">{{ $category->name }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</aside>