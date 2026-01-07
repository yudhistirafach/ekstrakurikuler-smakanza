@props(['event' => 'open-modal-prestasi'])

<div 
    class="bg-gray-200 dark:bg-gray-900 font-display flex items-center justify-center h-screen p-4">
    <!-- Modal Overlay Backdrop -->
    <div aria-hidden="true" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 transition-opacity"></div>
    <!-- Modal Container -->
    <div x-transition.scale.origin.center @click.away="showModal = false"
        class="relative w-full max-w-4xl max-h-[90vh] bg-background-light dark:bg-background-dark rounded-xl shadow-2xl flex flex-col z-50 overflow-hidden ring-1 ring-white/10">
        <!-- Modal Header (Sticky) -->
        <div
            class="sticky top-0 z-20 flex items-start justify-between border-b border-gray-200 dark:border-gray-800 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md px-6 py-5">
            <div class="flex-1 pr-8">
                <div class="flex flex-wrap items-center gap-3 mb-3">
                    <span
                        class="inline-flex items-center rounded-lg bg-blue-100 dark:bg-blue-900/30 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:text-blue-200 ring-1 ring-inset ring-blue-600/20">
                        Tingkat Nasional
                    </span>
                    <span
                        class="inline-flex items-center rounded-lg bg-amber-100 dark:bg-amber-900/30 px-2.5 py-0.5 text-xs font-medium text-amber-800 dark:text-amber-200 ring-1 ring-inset ring-amber-600/20">
                        <span class="material-symbols-outlined text-[16px] mr-1">emoji_events</span>
                        Juara 1
                    </span>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white leading-tight">
                    Juara 1 Lomba Robotic Nasional 2023
                </h2>
            </div>
            <button @click="showModal = false"
                class="rounded-lg p-2 text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-500 focus:outline-none transition-colors"
                type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <!-- Modal Body (Scrollable) -->
        <div class="flex-1 overflow-y-auto p-6 space-y-8 no-scrollbar">
            <!-- Image Carousel -->
            <div class="relative group">
                <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-2">
                    <!-- Image 1 -->
                    <div
                        class="snap-center shrink-0 w-full sm:w-[80%] md:w-[600px] h-64 md:h-80 rounded-xl overflow-hidden relative shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform hover:scale-105 duration-700"
                            data-alt="Students holding trophy on stage smiling"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBOo6fBZSXtoxmZp1UL6PQnN3ls9RlnaMwRM8dHrBXoJeqrZMyO3dI_jWcTS96CVUBZOlNQ6JjfGjAWJhZuP5CuhisHhuz6h0dBLYY96pmD2uj57BIv7jXw2Pf3w8TzGkTx7BkATTSUE1gZ_dnDtgdddM6jixWp0zbYnSjCR_0J3vPT3YIJ2BAPi-hKg-E2mFotv0DO4WGTR1mGprkLIvRQZZ_OvAcemKLjxFc4qppfGY5HXPWDzct26GQXJ7i29ozPz1l4uZFC9a2D");'>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm font-medium">Podium Juara</p>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div
                        class="snap-center shrink-0 w-full sm:w-[80%] md:w-[600px] h-64 md:h-80 rounded-xl overflow-hidden relative shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform hover:scale-105 duration-700"
                            data-alt="Close up of robot wiring and mechanics"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAo1Xzm9VSaiT2Nzm4EaoHMJqFsKPsUYnyjT8xQyP1OuG_HBD4B9OxqdFOMcUS36I6DvEz3ku-mlDgOtNlkUoqYaEpjZe-RxCzWxnOPocbVlxi94Yl8ea1Y_kyOkxLy4mEZrSSvctUepxkRskEQty7u1Ail0mcouLXjbTPXwQsRkHxKsUcxpMrOCKrQEjt732H_IdBYS3Sy7kGWJnKDasOw_7JKqYr8AlCl4J3leDq5h9NZlLbn3AIanrL4JnDqidCJUTccLasK28ZM");'>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm font-medium">Detail Robot Line Follower</p>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div
                        class="snap-center shrink-0 w-full sm:w-[80%] md:w-[600px] h-64 md:h-80 rounded-xl overflow-hidden relative shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform hover:scale-105 duration-700"
                            data-alt="Group of students working on robot project table"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAkXTu_DF1ABgWam4FbI1GbXFX1D6bbQmvA5h6zt0rsv3wksXyGS-YX2C_-YtlM7oT5I7CcoLLxYGVPB9oi9VGr85Z09dN673nmbBbVnWJA7H2_NXNEIalxMyCQbeLDIz9EZzQbvNu6-kWGFzpM46NktKa3B7sqAAQ71Raa9tZQ6mGq2Y8FDJ5E-ce6z-CJvTXOddFYLOexJ94y0NMqr_25oLkXw8RGRlfw9Xpdo9sUIKtUFcZja9CJiZJI6-axAWs5ZgiOsCOGdHIe");'>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <p class="text-white text-sm font-medium">Proses Pengerjaan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Info Column -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Description -->
                    <div class="prose dark:prose-invert max-w-none">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Tentang Kompetisi</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Tim Robotik EkstraSMEA berhasil memenangkan kategori Line Follower Analog dengan catatan
                            waktu tercepat pada kompetisi nasional tahun ini.
                            Kompetisi ini diikuti oleh lebih dari 50 sekolah dari seluruh Indonesia. Kemenangan ini
                            merupakan hasil kerja keras tim selama 3 bulan persiapan intensif, mulai dari
                            perancangan
                            sirkuit, pemrograman mikrokontroler, hingga uji coba lintasan.
                        </p>
                    </div>
                    <!-- Participants Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Tim &amp; Pembina</h3>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <!-- Coach Card -->
                            <div
                                class="flex items-center gap-3 bg-gray-100 dark:bg-gray-800 p-3 rounded-xl min-w-[200px] border border-gray-200 dark:border-gray-700">
                                <div
                                    class="h-10 w-10 rounded-full bg-primary/20 flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">school</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">
                                        Pembina</p>
                                    <p class="text-sm font-semibold text-gray-900 dark:text-white">Bp. Haryanto,
                                        S.Pd
                                    </p>
                                </div>
                            </div>
                            <!-- Students List -->
                            <div
                                class="flex-1 bg-gray-50 dark:bg-gray-800/50 p-3 rounded-xl border border-gray-100 dark:border-gray-700/50">
                                <p
                                    class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider mb-2">
                                    Siswa Terlibat</p>
                                <div class="flex flex-wrap gap-2">
                                    <div
                                        class="inline-flex items-center gap-2 px-2 py-1 rounded-md bg-white dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600">
                                        <div class="w-5 h-5 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500"
                                            data-alt="Avatar placeholder gradient"></div>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Ahmad
                                            Dani</span>
                                    </div>
                                    <div
                                        class="inline-flex items-center gap-2 px-2 py-1 rounded-md bg-white dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600">
                                        <div class="w-5 h-5 rounded-full bg-gradient-to-br from-pink-400 to-rose-500"
                                            data-alt="Avatar placeholder gradient"></div>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Siti
                                            Aminah</span>
                                    </div>
                                    <div
                                        class="inline-flex items-center gap-2 px-2 py-1 rounded-md bg-white dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600">
                                        <div class="w-5 h-5 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500"
                                            data-alt="Avatar placeholder gradient"></div>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Budi
                                            Santoso</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Details Column -->
                <div class="space-y-4">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 border border-gray-100 dark:border-gray-700">
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-4">Detail Pelaksanaan</h4>
                        <div class="space-y-4">
                            <!-- Date Item -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-primary shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10">
                                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Tanggal</p>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">12 Oktober 2023</p>
                                </div>
                            </div>
                            <!-- Location Item -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-primary shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10">
                                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Lokasi</p>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Yogyakarta</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Universitas Gadjah
                                        Mada
                                    </p>
                                    <div class="mt-2 h-20 w-full rounded-md bg-cover bg-center opacity-80"
                                        data-alt="Map thumbnail showing location" data-location="Yogyakarta"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBCAmwNYroOyqUD59uqKzEhGVZx9GOmPRRL-XZLjFCLWmlQJPvbViW2lp9ICR7gFHZswX3zgMIxczY8ckqLih75avKOTxid6r8KbTrep7wIFFbUiODXHEGYdVYe3BfbPgPIs-IfSXjl7nqXIFQjL6zyyMJ845cjKu_SbIU6tHI9WE-aLncy91zvPk3VRB9Dh6PyMQPEM0sVRht3a_CZxXzR5qP0JcUPnN8mxCeVbu8XhoulK2N9j_989VnRGHbpuTzzlCqf8ttuGqXg");'>
                                    </div>
                                </div>
                            </div>
                            <!-- Organizer Item -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-primary shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10">
                                    <span class="material-symbols-outlined text-[18px]">domain</span>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Penyelenggara
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Kemenristekdikti
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Documents Section -->
                    <div
                        class="bg-primary/5 dark:bg-primary/10 rounded-xl p-4 border border-primary/10 dark:border-primary/20">
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">Dokumen</h4>
                        <button
                            class="w-full flex items-center justify-center gap-2 rounded-lg bg-white dark:bg-gray-800 px-4 py-2.5 text-sm font-medium text-primary shadow-sm ring-1 ring-inset ring-gray-200 dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="material-symbols-outlined text-[18px]">description</span>
                            Lihat Sertifikat
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Footer (Sticky) -->
        <div
            class="sticky bottom-0 z-20 flex items-center justify-between border-t border-gray-200 dark:border-gray-800 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md px-6 py-4">
            <button
                class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[20px]">share</span>
                <span class="hidden sm:inline">Bagikan</span>
            </button>
            <div class="flex gap-3">
                <button @click="showModal = false"
                    class="rounded-lg bg-primary px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
