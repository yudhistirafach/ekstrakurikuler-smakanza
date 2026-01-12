@props(['levels', 'years', 'extracurriculars'])

<section x-data="{
    search: '{{ request('search') }}',
    level: '{{ request('level', 'all') }}',
    year: '{{ request('year', 'all') }}',
    ekstra: '{{ request('ekstra', 'all') }}',

    applyFilters() {
        const url = new URL(window.location);

        // Handle search
        if (this.search) {
            url.searchParams.set('search', this.search);
        } else {
            url.searchParams.delete('search');
        }

        // Handle level
        if (this.level && this.level !== 'all') {
            url.searchParams.set('level', this.level);
        } else {
            url.searchParams.delete('level');
        }

        // Handle year
        if (this.year && this.year !== 'all') {
            url.searchParams.set('year', this.year);
        } else {
            url.searchParams.delete('year');
        }

        // Handle ekstra
        if (this.ekstra && this.ekstra !== 'all') {
            url.searchParams.set('ekstra', this.ekstra);
        } else {
            url.searchParams.delete('ekstra');
        }

        // Reset ke halaman 1
        url.searchParams.delete('page');

        window.location.href = url.toString();
    },

    debounceSearch: null,
    handleSearch() {
        clearTimeout(this.debounceSearch);
        this.debounceSearch = setTimeout(() => {
            this.applyFilters();
        }, 500);
    }
}"
    class="sticky top-[65px] z-40 bg-white/95 dark:bg-[#101722]/95 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 shadow-sm py-4">

    <div class="px-4 lg:px-40 flex justify-center">
        <div class="max-w-[1280px] w-full flex flex-col lg:flex-row gap-4 justify-between items-center">

            <!-- Search -->
            <div class="relative w-full lg:w-96">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-gray-400">search</span>
                </div>
                <input x-model="search" @input="handleSearch"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-700 rounded-xl leading-5 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-shadow"
                    placeholder="Cari siswa atau judul prestasi..." type="text" />
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap gap-3 w-full lg:w-auto justify-center lg:justify-end">

                <!-- Filter Tingkat -->
                <select x-model="level" @change="applyFilters"
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option value="all">Semua Tingkat</option>
                    @foreach ($levels as $lvl)
                        <option value="{{ $lvl }}">{{ ucwords($lvl) }}</option>
                    @endforeach
                </select>

                <!-- Filter Tahun -->
                <select x-model="year" @change="applyFilters"
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option value="all">Semua Tahun</option>
                    @foreach ($years as $yr)
                        <option value="{{ $yr }}">{{ $yr }}</option>
                    @endforeach
                </select>

                <!-- Filter Ekstra -->
                <select x-model="ekstra" @change="applyFilters"
                    class="form-select block w-auto pl-3 pr-10 py-2.5 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 cursor-pointer">
                    <option value="all">Semua Ekstra</option>
                    @foreach ($extracurriculars as $extra)
                        <option value="{{ $extra->slug ?? strtolower($extra->name) }}">{{ $extra->name }}</option>
                    @endforeach
                </select>

                <!-- Reset Button (Optional) -->
                <button @click="search = ''; level = 'all'; year = 'all'; ekstra = 'all'; applyFilters();"
                    x-show="search || level !== 'all' || year !== 'all' || ekstra !== 'all'" x-transition
                    class="px-4 py-2.5 text-center text-sm font-medium text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors flex items-center justify-center gap-1">
                    <span class="material-symbols-outlined text-base">close</span>
                    Reset
                </button>
            </div>

        </div>
    </div>
</section>
