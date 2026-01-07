<section
    class="sticky top-[65px] z-40 bg-white/95 dark:bg-[#101722]/95 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 shadow-sm py-4">
    <div class="px-4 lg:px-40 flex justify-center">
        <div class="max-w-[1280px] w-full flex flex-col lg:flex-row gap-4 justify-between items-center">
            <!-- Search -->
            <div class="relative w-full lg:w-96">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-gray-400">search</span>
                </div>
                <input
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-700 rounded-xl leading-5 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-shadow"
                    placeholder="Cari siswa atau judul prestasi..." type="text" />
            </div>
            <!-- Filters -->
            <div class="flex flex-wrap gap-3 w-full lg:w-auto justify-center lg:justify-end">
                <select
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option>Semua Tingkat</option>
                    <option>Nasional</option>
                    <option>Provinsi</option>
                    <option>Kabupaten/Kota</option>
                </select>
                <select
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option>Semua Tahun</option>
                    <option>2024</option>
                    <option>2023</option>
                    <option>2022</option>
                </select>
                <select
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option>Semua Ekstra</option>
                    <option>Pramuka</option>
                    <option>Paskibra</option>
                    <option>Basket</option>
                    <option>RPL Club</option>
                    <option>Teater</option>
                </select>
            </div>
        </div>
    </div>
</section>
