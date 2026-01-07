@extends('layouts.layout')

@section('title', 'Ekstrakurikuler')

@section('content')

    <body class="bg-background-light dark:bg-background-dark text-[#0d131c] dark:text-white min-h-screen flex flex-col overflow-x-hidden">
        <!-- Header / TopNavBar -->
        <x-navbar />
        <!-- Main Layout -->
        <div class="max-w-7xl mx-auto w-full flex-grow flex flex-col md:flex-row gap-6 p-4 sm:px-6 lg:px-8 py-8">
            <!-- Sidebar Filter -->
            <x-sidebar-filter />
            <!-- Content Area -->
            <main class="flex-1 min-w-0">
                <!-- Page Heading -->
                <div class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-[#0d131c] dark:text-white tracking-tight mb-2">Ekstrakurikuler</h1>
                    <p class="text-[#49699c] dark:text-gray-400 text-base md:text-lg">Temukan kegiatan yang sesuai dengan minat dan bakatmu di
                        sini.</p>
                </div>
                <!-- Search Bar -->
                <div class="mb-8">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span
                                class="material-symbols-outlined text-[#49699c] dark:text-gray-400 group-focus-within:text-primary transition-colors">search</span>
                        </div>
                        <input
                            class="block w-full pl-12 pr-4 py-4 bg-surface-light dark:bg-surface-dark border border-[#e7ecf4] dark:border-gray-800 rounded-2xl text-[#0d131c] dark:text-white placeholder-[#9ca3af] dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm text-base"
                            placeholder="Cari ekstrakurikuler (contoh: Basket, Robotik, Tari)..." type="text" />
                    </div>
                </div>
                <!-- Grid Layout -->
                <x-grid-view-ekstra />
                <!-- Pagination / Load More -->
                <div class="mt-12 flex justify-center">
                    <button
                        class="flex items-center gap-2 px-6 py-3 rounded-xl border border-gray-200 dark:border-gray-700 text-[#49699c] dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-[#0d131c] dark:hover:text-white transition-all font-medium text-sm">
                        <span>Muat Lebih Banyak</span>
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                </div>
            </main>
        </div>

        <x-footer />
    </body>
@endsection
