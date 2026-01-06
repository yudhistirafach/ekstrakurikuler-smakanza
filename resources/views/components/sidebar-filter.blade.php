<aside class="w-full md:w-64 flex-shrink-0">
    <div class="sticky top-24 bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-[#e7ecf4] dark:border-gray-800 p-5">
        <div class="flex flex-col gap-4">
            <div>
                <h2 class="text-lg font-bold text-[#0d131c] dark:text-white">Kategori</h2>
                <p class="text-[#49699c] dark:text-gray-400 text-sm">Filter jenis kegiatan</p>
            </div>
            <!-- Filters List (Horizontal scroll on mobile, Vertical on desktop) -->
            <div class="flex flex-row md:flex-col gap-2 overflow-x-auto md:overflow-visible scrollbar-hide pb-2 md:pb-0">
                <!-- Active State -->
                <button
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-primary/10 text-primary flex-shrink-0 group hover:bg-primary/20 transition-all">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">grid_view</span>
                    <span class="text-sm font-medium">Semua</span>
                </button>
                <button
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 text-[#49699c] dark:text-gray-400 hover:text-[#0d131c] dark:hover:text-white flex-shrink-0 transition-colors group">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">sports_basketball</span>
                    <span class="text-sm font-medium">Olahraga</span>
                </button>
                <button
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 text-[#49699c] dark:text-gray-400 hover:text-[#0d131c] dark:hover:text-white flex-shrink-0 transition-colors group">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">palette</span>
                    <span class="text-sm font-medium">Seni</span>
                </button>
                <button
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 text-[#49699c] dark:text-gray-400 hover:text-[#0d131c] dark:hover:text-white flex-shrink-0 transition-colors group">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">school</span>
                    <span class="text-sm font-medium">Akademik</span>
                </button>
                <button
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 text-[#49699c] dark:text-gray-400 hover:text-[#0d131c] dark:hover:text-white flex-shrink-0 transition-colors group">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">groups</span>
                    <span class="text-sm font-medium">Organisasi</span>
                </button>
            </div>
        </div>
    </div>
</aside>
