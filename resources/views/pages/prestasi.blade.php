@extends('layouts.layout')

@section('title', 'Prestasi')

@section('content')

    <body
        class="bg-background-light dark:bg-background-dark text-[#0d131c] dark:text-white flex flex-col min-h-screen transition-colors duration-200">
        <!-- Navbar -->
        <x-navbar />
        <main class="flex-1 flex flex-col">
            <!-- Hero Section -->
            <section class="relative w-full overflow-hidden bg-background-light dark:bg-background-dark pt-10 pb-8">
                <div class="px-4 lg:px-40 flex justify-center">
                    <div class="max-w-[1280px] w-full flex flex-col md:flex-row gap-8 items-center">
                        <div class="flex flex-col gap-4 text-center md:text-left flex-1 z-10">
                            <span
                                class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-primary rounded-full text-xs font-bold uppercase tracking-wider w-fit mx-auto md:mx-0">
                                Hall of Fame
                            </span>
                            <h1
                                class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tight text-gray-900 dark:text-white">
                                Prestasi Ekstrakurikuler <br class="hidden lg:block" /> <span class="text-primary">SMK
                                    Negeri 1 Wonosobo</span>
                            </h1>
                            <p
                                class="text-gray-600 dark:text-gray-400 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto md:mx-0">
                                Mengharumkan nama sekolah melalui bakat, dedikasi, dan kerja keras para siswa di berbagai
                                bidang.
                            </p>
                        </div>
                        <!-- Decorative Graphic -->
                        <div class="hidden md:flex flex-1 justify-center items-center relative">
                            <div class="absolute w-80 h-80 bg-primary/20 rounded-full blur-3xl -z-10 animate-pulse"></div>
                            <div class="grid grid-cols-2 gap-4 rotate-3 hover:rotate-0 transition-transform duration-500">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl transform translate-y-8">
                                    <span class="material-symbols-outlined text-5xl text-gold mb-2">emoji_events</span>
                                    <div class="text-sm font-bold text-gray-900 dark:text-white">Juara 1</div>
                                    <div class="text-xs text-gray-500">LKS Nasional 2023</div>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl">
                                    <span class="material-symbols-outlined text-5xl text-silver mb-2">military_tech</span>
                                    <div class="text-sm font-bold text-gray-900 dark:text-white">Juara 2</div>
                                    <div class="text-xs text-gray-500">FLS2N Provinsi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Background Gradient -->
                <div class="absolute top-0 right-0 -z-10 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent"></div>
            </section>
            <!-- Filter & Search Section -->
            <x-search-filter-prestasi :levels="$levels" :years="$years" :extracurriculars="$extracurriculars" />
            <!-- Content Grid -->
            <section class="py-10 bg-background-light dark:bg-background-dark flex-1">
                <div class="px-4 lg:px-40 flex justify-center">
                    <div class="max-w-[1280px] w-full">
                        <!-- Grid -->
                        <x-grid-card-prestasi :achievements="$achievements" />
                        <!-- Pagination -->
                        <x-pagination :current="$achievements->currentPage()" :total="$achievements->lastPage()" />
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <x-footer />
    </body>
@endsection
