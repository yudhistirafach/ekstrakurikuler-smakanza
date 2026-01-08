<!-- Pastikan Alpine.js sudah terinstall -->
<!-- Jika belum, tambahkan: <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <!-- Profile Button -->
    <div @click="open = !open" class="flex items-center gap-3 cursor-pointer hover:opacity-80 transition-opacity">
        <div class="text-right hidden xl:block">
            <p class="text-xs font-medium text-[#0d131c] dark:text-white">Budi Santoso</p>
            <p class="text-[10px] text-[#49699c]">XI RPL 1</p>
        </div>
        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-white shadow-sm"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD9i76jXZM66V9x8LLqCmgqn9Rf8mUKOpmBMscL9RhQtaCp_g5NcvH2ZfFKPswKBUs6c9jp4x9RI4k3m0NSWWAUPHLq0uCcxakXrh1QLEVH83d7keoCo6EpSNFZ-kxr0lwZq5PAsTj_-rXHExkAMLI84g8XqaHKi4YT_SEPHZeWa-hYbMKr15l0Xj8pWw8pWe_IB7Mawy82Jo47blPCMBik1DGRQrmhG7dE3K4NMaeJiaCqi8NZS84eV21_qV7l-tMAcS5Q8zXCQWde");'>
        </div>
    </div>

    <!-- Dropdown Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden z-50"
         style="display: none;">
        
        <!-- Profile Info -->
        <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700 xl:hidden">
            <p class="text-sm font-medium text-[#0d131c] dark:text-white">Budi Santoso</p>
            <p class="text-xs text-[#49699c]">XI RPL 1</p>
        </div>

        <!-- Menu Items -->
        <div class="py-1">
            <!-- Profile Link -->
            <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Profil Saya
            </a>
            <!-- Divider -->
            <div class="border-t border-gray-200 dark:border-gray-700 my-1"></div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>