@extends('layouts.layout')

@section('title', 'Berita')

@section('content')
<body
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-50 overflow-x-hidden min-h-screen flex flex-col transition-colors duration-300">
    <!-- Navbar -->
    <x-navbar />
    <main class="flex-grow w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-10">
        <!-- Page Header & Featured Story -->
        <section class="flex flex-col gap-6">
            <!-- Breadcrumb / Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div class="space-y-2">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                        Berita &amp; Kabar Terkini</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-base md:text-lg max-w-2xl">
                        Update terbaru seputar prestasi, kegiatan ekstrakurikuler, dan pengumuman penting SMK Negeri 1
                        Wonosobo.
                    </p>
                </div>
            </div>
            <!-- Featured Hero Card -->
            <div
                class="relative w-full rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-xl transition-all duration-500 h-[400px] md:h-[480px]">
                <div class="absolute inset-0 bg-slate-200 dark:bg-slate-800"
                    data-alt="Students celebrating with a trophy on a volleyball court">
                    <!-- Placeholder background image simulation using Tailwind gradients -->
                    <div
                        class="w-full h-full bg-[url('https://images.unsplash.com/photo-1565514020176-db5b53eb786d?q=80&amp;w=2670&amp;auto=format&amp;fit=crop')] bg-cover bg-center transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-10 w-full md:max-w-3xl flex flex-col gap-3">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-secondary text-white w-fit">
                        Prestasi
                    </span>
                    <h2
                        class="text-white text-2xl md:text-4xl font-bold leading-tight group-hover:text-blue-200 transition-colors">
                        Tim Voli Putri SMEA Raih Juara 1 Tingkat Provinsi Jawa Tengah
                    </h2>
                    <div class="flex items-center text-slate-300 text-sm gap-4 mt-2">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                            <span>12 Oktober 2023</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                            <span>1.2k Views</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Filters & Search -->
        <section
            class="sticky top-16 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm py-2 -mx-4 px-4 sm:mx-0 sm:px-0">
            <div class="flex flex-col lg:flex-row gap-4 justify-between items-start lg:items-center p-1 rounded-xl">
                <!-- Chips -->
                <div class="flex gap-2 overflow-x-auto pb-2 lg:pb-0 w-full lg:w-auto no-scrollbar mask-linear-fade">
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-primary text-white text-sm font-semibold shadow-sm shadow-blue-500/30 transition-all hover:bg-blue-600">
                        Semua Berita
                    </button>
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        Pramuka
                    </button>
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        OSIS
                    </button>
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        Olahraga
                    </button>
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        Seni &amp; Budaya
                    </button>
                    <button
                        class="whitespace-nowrap px-4 py-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        Akademik
                    </button>
                </div>
                <!-- Search -->
                <div class="relative w-full lg:w-80 shrink-0">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-slate-400">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2.5 border-none rounded-lg leading-5 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary sm:text-sm shadow-sm"
                        placeholder="Cari berita atau artikel..." type="text" />
                </div>
            </div>
        </section>
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- News Feed (Left) -->
            <div class="lg:col-span-8 flex flex-col gap-8">
                <!-- News Card 1 -->
                <article
                    class="group flex flex-col sm:flex-row bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 dark:border-slate-700/50">
                    <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden relative">
                        <div class="w-full h-full bg-slate-200 dark:bg-slate-700"
                            data-alt="Students wearing red cross uniforms practicing first aid">
                            <img alt="PMR Activity"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOwWLZsUBe_UsSnTvJqbf-xv-sQg0tefRjSFJf1HW0NmWyX1S8UPWN8MeOw9qTMBJr862lunc79kUpwvFoScDLPiKobAxGXwabg18ZsWQ5oJ8YwrTmqlIirmY9NTSTNqKkzBqLCRxk5dK53AElzQ8IywU3Ywgz3-fa_wZS4RAjcik0qBE2XSa25CCUiv_lGbg5N6rCRCCP__run1fd3qY0jfZgxjf1yFjMnQ9US7qfvYyYhdEmmL0qK_sQxxJEAQ4zD1Ed2dpI8E5p" />
                        </div>
                        <div
                            class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 dark:text-slate-200">
                            10 Okt 2023
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-blue-50 dark:bg-blue-900/20 px-2 py-0.5 rounded">PMR</span>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Kegiatan</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight group-hover:text-primary transition-colors">
                            <a href="#">Penerimaan Anggota Baru PMR Wira Unit SMK N 1 Wonosobo</a>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 flex-1">
                            Sebanyak 150 siswa baru antusias mengikuti kegiatan orientasi dan pelantikan anggota baru
                            Palang Merah Remaja minggu ini.
                        </p>
                        <div
                            class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-700">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200 dark:bg-slate-600 overflow-hidden"
                                    data-alt="Avatar of author">
                                    <img alt="Author" class="w-full h-full"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD68mGtEJa2HCwEYPGMDVTepoVwda0GL-FewxU2wj2erWdBSgqCrbGiN8c5P9528R_jgJiwrlFEW9NOC_O2GiCKgdg19mIfihDz53A3rXYCoXb_lQoStAC7oXgH_DkQWeTs93IeDhCxrKoRHZAAD_IEgS6yTkn4mTgXf8yOls77i28Q8vRBqPyytAHjG-i5WyEXPlzdFBIQj2R8iCxmviXyiXhbPDs78PNdqZ-trM3SMkKg0b-HHIZ03EF4i4fGFTar879AmMj8N780" />
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Admin
                                    Ekstra</span>
                            </div>
                            <button
                                class="text-primary text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                Baca <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </article>
                <!-- News Card 2 -->
                <article
                    class="group flex flex-col sm:flex-row bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 dark:border-slate-700/50">
                    <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden relative">
                        <div class="w-full h-full bg-slate-200 dark:bg-slate-700"
                            data-alt="Students performing traditional dance on stage">
                            <img alt="Seni Tari"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4mOBxOEnHuq4KUIOpPt66OV3HOnKQgctoOeUGAmFLLr3me5XOrnBywfBByxlXK0u2Arl3-sf0R52oThOHyUl-LLJNeDwGXo_sqDi6xEOFh6FF7TMDTrO1bNNtXjLeJNs-IseVc4Wz9Zk6SObF_LZjllS92YPNo1lCIk2pryEnwefXfs9QbQ9SwKwiR-aSm7p8ksAKzcRFZB7gEr4u9szuu9nNPJyPwx5LizqSv2xckgJY5iz0_1OewXE_nIi2iTM0oK7ztlNMAfkc" />
                        </div>
                        <div
                            class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 dark:text-slate-200">
                            08 Okt 2023
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-secondary bg-emerald-50 dark:bg-emerald-900/20 px-2 py-0.5 rounded">Seni</span>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Event</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight group-hover:text-secondary transition-colors">
                            <a href="#">Galeri: Kemeriahan Pentas Seni Tutup Tahun 2023</a>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 flex-1">
                            Lihat dokumentasi lengkap dari penampilan spektakuler siswa-siswi SMEA dalam ajang pentas
                            seni tahunan.
                        </p>
                        <div
                            class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-700">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200 dark:bg-slate-600 overflow-hidden"
                                    data-alt="Avatar of author">
                                    <img alt="Author" class="w-full h-full"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKO_jMCHjZ9VzTEGxpOwxajqoaekb7Lp796AqC1FDL7TUGlgDv3aZ5H1ps6E_19eTStHwlvID23QfddH-1wLuHBS96OZO6lTaM_WghylMHHX6OXH3ftig2z5c_cIXYAB_ANxR9U4qMAUo4qw1G_hJz0mNutFXfMUkdh5AxpNSakzNRT0PMRKTEe80_fi2jCaJicFQrCj4558lQuPVd79IFxWHlBXSpX3A_dyPe4ZORWg7z3LWlxV-xlMhwXExidANZ3ydhnDMO19Uw" />
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Bu Ani</span>
                            </div>
                            <button
                                class="text-secondary text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                Lihat Galeri <span class="material-symbols-outlined text-[16px]">photo_library</span>
                            </button>
                        </div>
                    </div>
                </article>
                <!-- News Card 3 -->
                <article
                    class="group flex flex-col sm:flex-row bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 dark:border-slate-700/50">
                    <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden relative">
                        <div class="w-full h-full bg-slate-200 dark:bg-slate-700"
                            data-alt="Meeting room with student council members discussing">
                            <img alt="Rapat OSIS"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9XcMzrP1MMYa7MKnmKbCeVZXfFPUH9TrLTsgTGjPAwApKAaQJduIwaVJ8NesdqGnpZh_qB4JafZs6NLrQLXZ_z9I1KP4KFA9OlmjBWUClxVY8JwCytc4WsIhI2gFTeKYYxouTMcyu4FmMoNDN-qisJybwqTux0xZiZ0_zAF7dUmVeTuxu5yCu76HDZz88dvQ8UX8lD-OCNIroIgTIF5rS63i-UotpOHLJOSpa5iOjAMRlsECInkRMPOeTlCKP4wA04VE7eYPn_h4o" />
                        </div>
                        <div
                            class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 dark:text-slate-200">
                            05 Okt 2023
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-purple-600 bg-purple-50 dark:bg-purple-900/20 px-2 py-0.5 rounded">OSIS</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Pengumuman</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight group-hover:text-purple-500 transition-colors">
                            <a href="#">Hasil Rapat Koordinasi Ekskul Semester Ganjil</a>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 flex-1">
                            Berikut adalah ringkasan hasil rapat koordinasi ketua ekstrakurikuler mengenai jadwal
                            penggunaan fasilitas sekolah.
                        </p>
                        <div
                            class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-700">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200 dark:bg-slate-600 overflow-hidden"
                                    data-alt="Avatar of author">
                                    <img alt="Author" class="w-full h-full"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD863IPmPnvlhM8lpXlx-OO8WSzTBRDPsKkIZmNG5lygXCgZLmvtb8W4ooAyjg9AZFNzfHMRnmHm9N6pH2ZmYhLFlf9Q1b8OIb6jJMxE80CszhMPYvmTYej8uGWkTaV5FrZRDZ7uyFm9tOCE5K1HB0TYfRD2yU_w1mYR_Uu-TXz0DNa4T7-xNeqBbzUh2REoCEjHrIJQ1PYyV5auGdBcocdmzToc5mQGJG7z6rmWx_XbnNMQIsklLM4hWCsq33BQH0xvA_QDjOe_QB2" />
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Ketua OSIS</span>
                            </div>
                            <button
                                class="text-purple-600 text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                Baca <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </article>
                <!-- Grid for smaller cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Small Card 1 -->
                    <article
                        class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-slate-100 dark:border-slate-700/50 flex flex-col">
                        <div class="h-40 overflow-hidden relative">
                            <div class="w-full h-full bg-slate-200 dark:bg-slate-700"
                                data-alt="Futsal court green field">
                                <img alt="Futsal"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfu9P9NjcF5fmXijF1EUaBaLK5ejQnyyKTEPEu_wnyQy7mQVrPHnALY8UvVqQIgZ8ZCu_hrwgwgCi0yBa9MrH-vK7DK5tBVCYGCoVHcHfX__j3WrVnTXOP0HKNtb40NYb_YVnfyNUGTnDyBcKzJFX3Zs_qyxaSc2NFmFB5paJ7UDP0oSNrOznmS6-xij-1LKX-B8FYEMBunErnbaaDteICpqEI-12MRL5BA91OY7I05glk7XIqXqTloRfAeQs3AdYpnKhWELOuWsFW" />
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <span class="text-xs font-bold text-secondary mb-1">Olahraga</span>
                            <h4
                                class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 hover:text-primary cursor-pointer">
                                Jadwal Latihan Futsal Diundur Sementara
                            </h4>
                            <span class="text-xs text-slate-500 mt-auto">2 Hari yang lalu</span>
                        </div>
                    </article>
                    <!-- Small Card 2 -->
                    <article
                        class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-slate-100 dark:border-slate-700/50 flex flex-col">
                        <div class="h-40 overflow-hidden relative">
                            <div class="w-full h-full bg-slate-200 dark:bg-slate-700"
                                data-alt="Scouts hiking in nature">
                                <img alt="Pramuka Hiking"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXwC2URf_yCOge9cru4dKmEG6Mboa_DCp09vr_0ynSag9s4hX4cmfS4hYnXrR1lBJcsx8l9LD9zQklqrKhctk4IYcq8fdE5qIS58c9CaTjBk7ddCwvulpwQbWrLu9yKZtQlLtSAfmwG-LCv1LFuQ-D8BH23saAEHdlVwXpWs5P65gXn5VY_Ei187zEQ1d0L-8Nv6FkSL7WZhQcJoKpvmEo-XFm15a3uT44b62GZW-BWSkfp5xpoQpbwTSdB-orITh9F75Wr0Zq1hdy" />
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <span class="text-xs font-bold text-primary mb-1">Pramuka</span>
                            <h4
                                class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 hover:text-primary cursor-pointer">
                                Persiapan Hiking Gabungan Minggu Depan
                            </h4>
                            <span class="text-xs text-slate-500 mt-auto">3 Hari yang lalu</span>
                        </div>
                    </article>
                </div>
                <!-- Load More -->
                <div class="flex justify-center pt-4 pb-8">
                    <button
                        class="flex items-center gap-2 px-8 py-3 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-semibold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors focus:ring-2 focus:ring-primary focus:outline-none">
                        <span class="material-symbols-outlined animate-spin-slow"
                            style="font-size: 20px;">refresh</span>
                        Muat Lebih Banyak
                    </button>
                </div>
            </div>
            <!-- Sidebar (Right) -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Widget: Trending/Populer -->
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-100 dark:border-slate-700/50">
                    <div class="flex items-center gap-2 mb-6 border-b border-slate-100 dark:border-slate-700 pb-4">
                        <span class="material-symbols-outlined text-red-500">local_fire_department</span>
                        <h3 class="font-bold text-lg text-slate-900 dark:text-white">Sedang Populer</h3>
                    </div>
                    <div class="flex flex-col gap-5">
                        <a class="group flex gap-4 items-start" href="#">
                            <span
                                class="text-2xl font-black text-slate-200 dark:text-slate-700 group-hover:text-primary transition-colors">01</span>
                            <div>
                                <h4
                                    class="font-semibold text-slate-800 dark:text-slate-200 group-hover:text-primary transition-colors line-clamp-2">
                                    Tips Membagi Waktu Antara Belajar dan Organisasi
                                </h4>
                                <span class="text-xs text-slate-500 mt-1 block">Tips &amp; Trik</span>
                            </div>
                        </a>
                        <a class="group flex gap-4 items-start" href="#">
                            <span
                                class="text-2xl font-black text-slate-200 dark:text-slate-700 group-hover:text-primary transition-colors">02</span>
                            <div>
                                <h4
                                    class="font-semibold text-slate-800 dark:text-slate-200 group-hover:text-primary transition-colors line-clamp-2">
                                    Profil Ketua OSIS Periode 2023/2024
                                </h4>
                                <span class="text-xs text-slate-500 mt-1 block">Profil</span>
                            </div>
                        </a>
                        <a class="group flex gap-4 items-start" href="#">
                            <span
                                class="text-2xl font-black text-slate-200 dark:text-slate-700 group-hover:text-primary transition-colors">03</span>
                            <div>
                                <h4
                                    class="font-semibold text-slate-800 dark:text-slate-200 group-hover:text-primary transition-colors line-clamp-2">
                                    Daftar Ekstrakurikuler Paling Diminati Tahun Ini
                                </h4>
                                <span class="text-xs text-slate-500 mt-1 block">Statistik</span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- Footer -->
    <x-footer />
</body>
@endsection