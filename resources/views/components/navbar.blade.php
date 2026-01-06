@props([
    'with_navigation' => true,
])

<header
    class="sticky top-0 z-50 w-full border-b border-[#e7ecf4] dark:border-gray-800 bg-white/80 dark:bg-[#101722]/80 backdrop-blur-md">
    <div class="layout-container flex justify-center">
        <div class="flex w-full max-w-[1280px] items-center justify-between px-4 py-4 md:px-10">
            <!-- Logo Section -->
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
                    <span class="material-symbols-outlined text-2xl">school</span>
                </div>
                <h2 class="text-xl font-bold tracking-tight text-[#0d131c] dark:text-white">EkstraSMAKANZA</h2>
            </div>
            <!-- Navigation Links (Desktop) -->
            @if ($with_navigation)
            <nav class="hidden md:flex flex-1 justify-center gap-8">
                <a class="text-sm font-medium text-[#0d131c] hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                    href="{{ route('home') }}">Beranda</a>
                <a class="text-sm font-medium text-[#0d131c] hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                    href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                <a class="text-sm font-medium text-[#0d131c] hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                    href="">Prestasi</a>
                <a class="text-sm font-medium text-[#0d131c] hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                    href="#">Berita</a>
            </nav>
            @endif
            <!-- CTA Buttons -->
            <div class="flex items-center gap-4">
                <x-toggle-theme />
                @if (!auth()->check())
                    <x-button variant="outline"><a href="{{ route('login') }}">Login</a></x-button>
                    <x-button><a href="">Daftar Sekarang</a></x-button>
                @else 
                    <x-button variant="outline"><a href="#">Dashboard</a></x-button>
                @endif
            </div>
        </div>
    </div>
</header>
