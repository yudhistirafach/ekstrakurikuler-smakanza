<footer
    class="w-full border-t border-[#e7ecf4] bg-white pt-16 pb-8 text-[#0d131c] dark:border-gray-800 dark:bg-[#151c2a] dark:text-gray-300 z-10">
    <div class="layout-container flex justify-center px-4 md:px-10">
        <div class="flex w-full max-w-[1280px] flex-col gap-10 justify-around">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-1">
                    <div class="mb-4 flex items-center gap-2">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-white">
                            <span class="material-symbols-outlined text-lg">school</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#0d131c] dark:text-white">EkstraSMAKANZA</h3>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        Platform manajemen ekstrakurikuler resmi SMK Negeri 1 Wonosobo. Mewujudkan siswa
                        berprestasi dan berkarakter.
                    </p>
                </div>
                <!-- Links 1 -->
                <div>
                    <h4 class="mb-4 text-sm font-bold uppercase tracking-wider text-[#0d131c] dark:text-white">
                        Menu Utama</h4>
                    <ul class="flex flex-col gap-3 text-sm text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}">Beranda</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                        </li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('prestasi') }}">Prestasi</a>
                        </li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('daftar-ekstra') }}">Daftar Ekstra</a>
                        </li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h4 class="mb-4 text-sm font-bold uppercase tracking-wider text-[#0d131c] dark:text-white">
                        Kontak Kami</h4>
                    <ul class="flex flex-col gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <li class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-primary mt-0.5 text-[18px]">location_on</span>
                            <span>Jl. Bhayangkara No. 12, Wonosobo, Jawa Tengah</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-[18px]">call</span>
                            <span>(0286) 321xxx</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-[18px]">mail</span>
                            <span>osis@smkn1wonosobo.sch.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="flex flex-col items-center justify-between gap-6 border-t border-[#e7ecf4] pt-8 dark:border-gray-800 sm:flex-row">
                <p class="text-sm text-gray-400">© {{ now()->format('Y') }} SMK Negeri 1 Wonosobo. All rights reserved.</p>
                <div class="flex gap-4">
                    <a class="flex h-8 w-8 items-center justify-center rounded-full bg-[#f8f9fc] text-gray-500 hover:bg-primary hover:text-white transition-all dark:bg-gray-800 dark:hover:bg-primary"
                        href="https://smkn1-wnb.sch.id/" target="_blank" rel="noopener noreferrer">
                        <span class="material-symbols-outlined text-[18px]">public</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>