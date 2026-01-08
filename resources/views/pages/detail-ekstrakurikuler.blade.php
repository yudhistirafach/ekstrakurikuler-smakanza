@extends('layouts.layout')

@section('title', 'Detail')

@section('content')

    <body class="bg-background-light dark:bg-background-dark font-display text-[#0d131c] overflow-x-hidden antialiased">
        <!-- Navbar -->
        <x-navbar />
        <main class="min-h-screen pb-20">
            <!-- Hero Section -->
            <section class="relative h-[400px] w-full overflow-hidden bg-gray-900 md:h-[480px]">
                <div class="absolute inset-0 z-0">
                    <img alt="Students working on robotics project"
                        class="h-full w-full object-cover opacity-60 transition-transform duration-700 hover:scale-105"
                        data-alt="Students working on a robotics engineering project with circuit boards"
                        src="{{ $extracurricular->banner_url ? $extracurricular->banner_url : 'https://placehold.co/600x400/e7ecf4/64748b?text=No+Image' }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
                </div>
                <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col justify-end px-4 pb-12 sm:px-6 lg:px-8">
                    <div class="max-w-3xl">
                        <span
                            class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-secondary/20 px-3 py-1 text-xs font-bold text-[#10B981] backdrop-blur-sm border border-secondary/30">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                            </span>
                            Pendaftaran Dibuka
                        </span>
                        <h1 class="mb-2 text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">
                            {{ $extracurricular->name }}
                        </h1>
                        <p class="text-lg font-light text-gray-200 sm:text-xl max-w-2xl leading-relaxed">
                            {{ $extracurricular->description }}
                        </p>
                    </div>
                </div>
            </section>
            <!-- Main Content Layout -->
            <div class="mx-auto mt-8 max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <!-- Left Column: Tabs & Details (8 cols) -->
                    <div class="lg:col-span-8">
                        <!-- Tab Content Area -->
                        <div class="flex flex-col gap-10">
                            <!-- Description Section -->
                            <div
                                class="space-y-6 rounded-2xl bg-white p-6 shadow-sm dark:bg-[#1e293b] dark:text-white md:p-8">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Tentang {{ $extracurricular->name }}</h3>
                                <div class="prose prose-blue max-w-none text-gray-600 dark:text-gray-300 leading-relaxed">
                                    <p>
                                        {{ $extracurricular->description }}
                                    </p>                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                                    <div class="flex items-start gap-4 rounded-xl bg-blue-50 p-4 dark:bg-blue-900/20">
                                        <span
                                            class="material-symbols-outlined rounded-full bg-blue-100 p-2 text-primary dark:bg-blue-800">engineering</span>
                                        <div>
                                            <h4 class="font-bold text-gray-900 dark:text-white">Hands-on Learning</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Praktik langsung dengan kit
                                                robotika modern dan Arduino.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4 rounded-xl bg-blue-50 p-4 dark:bg-blue-900/20">
                                        <span
                                            class="material-symbols-outlined rounded-full bg-blue-100 p-2 text-primary dark:bg-blue-800">emoji_events</span>
                                        <div>
                                            <h4 class="font-bold text-gray-900 dark:text-white">Kompetisi</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Persiapan intensif untuk
                                                lomba LKS dan kompetisi robot nasional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Requirements Preview (Simulating scroll or multiple visible sections) -->
                            <div
                                class="space-y-6 rounded-2xl bg-white p-6 shadow-sm dark:bg-[#1e293b] dark:text-white md:p-8">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Persyaratan Bergabung</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-green-500">check_circle</span>
                                        <span class="text-gray-600 dark:text-gray-300">Siswa aktif kelas X atau XI SMKN 1
                                            Wonosobo.</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-green-500">check_circle</span>
                                        <span class="text-gray-600 dark:text-gray-300">Memiliki minat kuat dalam logika
                                            pemrograman dan fisika dasar.</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-green-500">check_circle</span>
                                        <span class="text-gray-600 dark:text-gray-300">Berkomitmen mengikuti jadwal latihan
                                            rutin mingguan.</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-green-500">check_circle</span>
                                        <span class="text-gray-600 dark:text-gray-300">Membawa laptop pribadi (disarankan,
                                            tidak wajib).</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Gallery Preview -->
                            <div
                                class="space-y-6 rounded-2xl bg-white p-6 shadow-sm dark:bg-[#1e293b] dark:text-white md:p-8">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Galeri Kegiatan</h3>
                                </div>
                                <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                    <div class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100">
                                        <img alt="Robot arm assembly"
                                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            data-alt="Close up of a robotic arm being assembled"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjoPJzz2hHPe6NVwZJKj9dg05Rrjg5t5qp-lI6XklMH3Whioe3c4WMJV8LNJkrFssBvsxCXpbulKHieruMpcCAQRM-7EX0r2blOHfCrl98SIo8T3uaxia6Kua1gKljGGrJUwjhjDCltenvCWJNLH4YnC8o1FcmZF5YeKZeRAhq85X6AcCiCF1gyBoyXZaLEbxTVCiBXPkscUUUTvl2pQSb_wJVmrIh2w_nUjuyk_l4syGWUgVlPr8p-q_Qdxdzw1pKyYBbOHqJ0I-X" />
                                    </div>
                                    <div class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100">
                                        <img alt="Team collaboration"
                                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            data-alt="Group of students discussing code on a laptop"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeDVLG8AroSIEBK3y8G8rZPK48iqtowcD2WCl5EYKMA4-m0s6aBKdP2QLYCsJ8-0Qr6NOG6PhWiXAOB2YIw9nzd3L86ScC3b6pUd7UoB2PgmnML3wtOk9g4pJ9bF9ztqNY3RXTsDeoS9_mHFLcumd52l-6posFtfJvLE7AJRRWJavTniZjUY6habw1269e378uaQgBZCI5uVpwGB7AexWnF-oqHYafsAmN9-SRUHK5j0W6JmBLCVllnfeetYdesdcoPQOmsbnNJch8" />
                                    </div>
                                    <div class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100">
                                        <img alt="Coding session"
                                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            data-alt="Monitor screen showing complex code structure"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7bzs1xbU3GKCeir1DN981cnko88xqpN7kVrb7zZVR-kIi7TrOCN0ggJgvXpwOB7lAzco8PhCWADgFKLZK2reKu-drO2nSQQH5EgQJTITjD50Dko0ZIh5Z7t-zMF1SRGFX1HiByUD1Dr04eW6V3ubIEl8suCJ91FhMiQnbsUMrWBr8d29MzFGsLWO8i430cqitXEu3I-a-ARVzRkrrKAvhW_FZUP_PWy9nnEeEBjF1Ba9BergVNi5I-QtWX6lOjAi7UpEPCj-JP0lu" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Sticky Sidebar (4 cols) -->
                    <div class="lg:col-span-4">
                        <div class="sticky top-28 space-y-6">
                            <!-- Info Card -->
                            <div
                                class="overflow-hidden rounded-2xl bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:bg-[#1e293b] border border-gray-100 dark:border-gray-700">
                                <div class="bg-primary/5 p-6 dark:bg-white/5">
                                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Informasi Kegiatan</h2>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Detail pelaksanaan ekstrakurikuler
                                    </p>
                                </div>
                                <div class="divide-y divide-gray-100 px-6 dark:divide-gray-700">
                                    <!-- Jadwal -->
                                    <div class="flex items-center gap-4 py-4">
                                        <div
                                            class="flex size-10 flex-none items-center justify-center rounded-full bg-blue-50 text-primary dark:bg-blue-900/30">
                                            <span class="material-symbols-outlined">schedule</span>
                                        </div>
                                        <div class="flex-1">
                                            <p
                                                class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">
                                                Jadwal</p>
                                            <p class="font-semibold text-gray-900 dark:text-white">{{ ucwords($extracurricular->day) }}, {{ date('H:i', strtotime($extracurricular->start_time)) }} - {{ date('H:i', strtotime($extracurricular->end_time)) }} WIB
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Lokasi -->
                                    <div class="flex items-center gap-4 py-4">
                                        <div
                                            class="flex size-10 flex-none items-center justify-center rounded-full bg-purple-50 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400">
                                            <span class="material-symbols-outlined">location_on</span>
                                        </div>
                                        <div class="flex-1">
                                            <p
                                                class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">
                                                Lokasi</p>
                                            <p class="font-semibold text-gray-900 dark:text-white">{{ $extracurricular->location }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Pembina -->
                                    <div class="flex items-center gap-4 py-4">
                                        <div
                                            class="flex size-10 flex-none items-center justify-center rounded-full bg-orange-50 text-orange-600 dark:bg-orange-900/30 dark:text-orange-400">
                                            <span class="material-symbols-outlined">person</span>
                                        </div>
                                        <div class="flex-1">
                                            <p
                                                class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">
                                                Pembina</p>
                                            <p class="font-semibold text-gray-900 dark:text-white">{{ $extracurricular->coach->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Kuota -->
                                    <div class="py-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="flex size-10 flex-none items-center justify-center rounded-full bg-green-50 text-secondary dark:bg-green-900/30">
                                                    <span class="material-symbols-outlined">group</span>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">
                                                        Sisa Kuota</p>
                                                    <p class="font-semibold text-gray-900 dark:text-white">{{ '5' . ' dari ' . $extracurricular->quota . ' Kuota' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-2 h-2 w-full overflow-hidden rounded-full bg-gray-100 dark:bg-gray-700">
                                            <div
                                                class="h-full w-[83%] rounded-full bg-secondary transition-all duration-500 ease-out">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-6 dark:bg-white/5">
                                    <button
                                        class="group relative w-full overflow-hidden rounded-xl bg-primary py-3.5 text-center text-sm font-bold text-white shadow-lg shadow-blue-500/30 transition-all hover:-translate-y-1 hover:shadow-blue-500/50 focus:ring-4 focus:ring-blue-500/30">
                                        <span class="relative z-10 flex items-center justify-center gap-2">
                                            Daftar Sekarang
                                            <span
                                                class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                                        </span>
                                    </button>
                                    <p class="mt-3 text-center text-xs text-gray-500 dark:text-gray-400">
                                        Butuh bantuan? <a class="text-primary hover:underline" href="#">Hubungi
                                            Admin</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Section -->
            <section class="mt-20 border-t border-gray-200 bg-white py-12 dark:bg-[#111a28] dark:border-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mb-8 flex items-end justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Ekstrakurikuler Lain</h2>
                            <p class="text-gray-500 dark:text-gray-400">Kegiatan lain yang mungkin kamu minati</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <!-- Card 1 -->
                        @foreach ($extracurriculars as $extracurricular)
                            <a class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 dark:border-gray-700 dark:bg-[#1e293b]"
                                href="{{ route('ekstrakurikuler.detail', $extracurricular->slug) }}">
                                <div class="relative aspect-video overflow-hidden bg-gray-200">
                                    <img alt="Code displayed on computer screen"
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        data-alt="Digital matrix code rain background"
                                        src="{{ $extracurricular->image_url ? $extracurricular->image_url : 'https://placehold.co/600x400/e7ecf4/64748b?text=No+Image' }}" />
                                    <div
                                        class="absolute right-2 top-2 rounded-lg bg-white/90 px-2 py-1 text-xs font-bold text-gray-900 backdrop-blur-sm">
                                        {{ $extracurricular->quota }}
                                    </div>
                                </div>
                                <div class="flex flex-1 flex-col p-4">
                                    <h3
                                        class="mb-1 text-lg font-bold text-gray-900 group-hover:text-primary dark:text-white">
                                        {{ $extracurricular->name }}</h3>
                                    <p class="mb-4 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">{{ $extracurricular->description }}</p>
                                    <div
                                        class="mt-auto flex items-center justify-between text-xs font-medium text-gray-400">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">calendar_today</span>
                                            {{ ucwords($extracurricular->day) }}</span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">schedule</span> {{ date('H:i', strtotime($extracurricular->start_time)) }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Simple Footer -->
            <x-footer />
        </main>
    </body>
@endsection
