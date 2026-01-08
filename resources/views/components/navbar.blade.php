@props([
    'with_navigation' => true,
])

<header
    class="sticky top-0 z-50 w-full border-b border-[#e7ecf4] dark:border-gray-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
    <div class="layout-container flex justify-center">
        <div class="flex w-full max-w-[1280px] items-center justify-between px-4 py-4 md:px-10">
            <!-- Logo Section -->
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
                    <span class="material-symbols-outlined text-2xl">school</span>
                </div>
                <h1 class="text-xl font-bold text-[#0d131c] hidden md:block dark:text-white">EkstraSMAKANZA</h1>
            </div>
            <!-- Navigation Links (Desktop) -->
            @if ($with_navigation)
                <nav class="hidden md:flex flex-1 justify-center gap-8">
                    <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->routeIs('home') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors"
                        href="{{ route('home') }}">Beranda</a>
                    <a class="text-sm font-medium {{ request()->is('ekstrakurikuler*') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->is('ekstrakurikuler*') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors"
                        href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                    <a class="text-sm font-medium {{ request()->is('prestasi*') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->is('prestasi*') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors"
                        href="{{ route('prestasi') }}">Prestasi</a>
                    <a class="text-sm font-medium {{ request()->routeIs('daftar-ekstra') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->routeIs('daftar-ekstra') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors"
                        href="{{ route('daftar-ekstra') }}">Daftar Ekstra</a>
                </nav>
            @endif
            <!-- CTA Buttons -->
            <div class="flex items-center gap-4">
                <x-toggle-theme />
                <!-- Hamburger Menu Button (Mobile) -->
                <button id="hamburger-btn"
                    class="md:hidden p-2 rounded-full text-[#0d131c] dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined pointer-events-none text-md">menu</span>
                </button>
                @if (!auth()->check())
                    <a href="{{ route('login') }}"><x-button>Login</x-button></a>
                @else
                    @if (auth()->user()->role !== 'student')
                        <a href="{{ route('admin-dashboard') }}" class="hidden md:block"><x-button variant="outline" icon="dashboard" class="gap-2">Dashboard</x-button></a>
                        <x-profile />
                    @else
                        <x-profile />
                    @endif
                @endif
            </div>
        </div>
    </div>

    <!-- Mobile Menu - Positioned below header -->
    <div id="mobile-menu"
        class="md:hidden w-full
               bg-white dark:bg-background-dark
               border-b border-[#e7ecf4] dark:border-gray-800
               shadow-lg
               max-h-0 opacity-0 overflow-hidden
               transition-all duration-300 ease-in-out">

        <div class="layout-container">
            <div class="px-4 py-6 space-y-4">
                @if ($with_navigation)
                    <nav class="flex flex-col space-y-4">
                        <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->routeIs('home') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors py-2"
                            href="{{ route('home') }}">Beranda</a>
                        <a class="text-sm font-medium {{ request()->is('ekstrakurikuler*') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->is('ekstrakurikuler*') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors py-2"
                            href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                        <a class="text-sm font-medium {{ request()->is('prestasi*') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->is('prestasi*') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors py-2"
                            href="{{ route('prestasi') }}">Prestasi</a>
                        <a class="text-sm font-medium {{ request()->routeIs('daftar-ekstra') ? 'text-primary' : 'text-[#0d131c] hover:text-primary' }} {{ request()->routeIs('daftar-ekstra') ? 'dark:text-primary' : 'dark:text-gray-300 dark:hover:text-primary' }} transition-colors py-2"
                            href="{{ route('daftar-ekstra') }}">Daftar Ekstra</a>
                    </nav>
                @endif

                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                    @if (!auth()->check())
                        <x-button class="w-full">
                            <a href="{{ route('login') }}">Login</a>
                        </x-button>
                    @endif

                    <a href="{{ route('admin-dashboard') }}" class="md:hidden"><x-button variant="outline" icon="dashboard" class="gap-2">Dashboard</x-button></a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isOpen = false;

        hamburgerBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen = !isOpen;

            if (isOpen) {
                // Open menu
                mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                mobileMenu.classList.remove('opacity-0');
                mobileMenu.classList.add('opacity-100');
                hamburgerBtn.innerHTML = '<span class="material-symbols-outlined text-2xl pointer-events-none">close</span>';
            } else {
                // Close menu
                mobileMenu.style.maxHeight = '0';
                mobileMenu.classList.add('opacity-0');
                mobileMenu.classList.remove('opacity-100');
                hamburgerBtn.innerHTML = '<span class="material-symbols-outlined text-2xl pointer-events-none">menu</span>';
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!hamburgerBtn.contains(event.target) && !mobileMenu.contains(event.target)) {
                if (isOpen) {
                    isOpen = false;
                    mobileMenu.style.maxHeight = '0';
                    mobileMenu.classList.add('opacity-0');
                    mobileMenu.classList.remove('opacity-100');
                    hamburgerBtn.innerHTML = '<span class="material-symbols-outlined text-2xl pointer-events-none">menu</span>';
                }
            }
        });

        // Close menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                isOpen = false;
                mobileMenu.style.maxHeight = '0';
                mobileMenu.classList.add('opacity-0');
                mobileMenu.classList.remove('opacity-100');
                hamburgerBtn.innerHTML = '<span class="material-symbols-outlined text-2xl pointer-events-none">menu</span>';
            });
        });
    });
</script>