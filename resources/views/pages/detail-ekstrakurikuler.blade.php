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
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe8WGj59qr0Hozu6np7J6dXIyDnCbmGVoy-ru9SXJG-t15EIxKiNFFHRf9dUEN79u8WzFFRqxoXEyZBBtwyxUwCdZubQ-4BfjM9y1hGuoTpruwCtZmPXbF-JU6jos-31aJV0JMlm4PmSSW1pds73LTYy5a9R2mO9gn703k-c3WCKnuXHwXyI872l_Qt5plVcxUgwVXBB11p5RzyjOzjWI6WAkvRz60jrNcn8mJExGo5pFnCkFzsVO7yq3a-n9nMSzUYbWMRCwRGRsN" />
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
                            Klub Robotika
                        </h1>
                        <p class="text-lg font-light text-gray-200 sm:text-xl max-w-2xl leading-relaxed">
                            Membangun masa depan dengan inovasi teknologi, rekayasa, dan kreativitas tanpa batas.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Main Content Layout -->
            <div class="mx-auto mt-8 max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <!-- Left Column: Tabs & Details (8 cols) -->
                    <div class="lg:col-span-8">
                        <!-- Tabs Navigation -->
                        <div class="sticky top-[64px] z-30 mb-8 bg-background-light pt-4 dark:bg-background-dark">
                            <div
                                class="flex gap-8 overflow-x-auto border-b border-gray-200 pb-px dark:border-gray-700 hide-scrollbar">
                                <div
                                    class="group flex min-w-fit flex-col items-center border-b-2 border-primary pb-3 text-sm font-bold text-primary transition-all">
                                    <span>Deskripsi</span>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area -->
                        <div class="flex flex-col gap-10">
                            <!-- Description Section -->
                            <div
                                class="space-y-6 rounded-2xl bg-white p-6 shadow-sm dark:bg-[#1e293b] dark:text-white md:p-8">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Tentang Klub Robotika</h3>
                                <div class="prose prose-blue max-w-none text-gray-600 dark:text-gray-300 leading-relaxed">
                                    <p>
                                        Klub Robotika SMKN 1 Wonosobo adalah wadah bagi siswa yang memiliki minat tinggi
                                        dalam bidang teknologi, elektronika, dan pemrograman. Di sini, siswa tidak hanya
                                        belajar teori, tetapi juga langsung mempraktikkan ilmu mereka dalam merancang,
                                        merakit, dan memprogram robot.
                                    </p>
                                    <p>
                                        Sejak didirikan pada tahun 2015, klub ini telah mencetak berbagai prestasi di
                                        tingkat regional maupun nasional. Kami percaya bahwa teknologi robotika adalah kunci
                                        masa depan industri 4.0. Kurikulum kami dirancang untuk melatih kemampuan
                                        <em>problem solving</em>, kerja sama tim, dan berpikir kritis.
                                    </p>
                                </div>
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
                                    <a class="text-sm font-bold text-primary hover:underline" href="#">Lihat
                                        Semua</a>
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
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity group-hover:opacity-100">
                                            <span class="material-symbols-outlined text-white text-3xl">visibility</span>
                                        </div>
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
                                            <p class="font-semibold text-gray-900 dark:text-white">Rabu, 15:00 - 17:00 WIB
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
                                            <p class="font-semibold text-gray-900 dark:text-white">Lab Komputer 3, Gedung B
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
                                            <p class="font-semibold text-gray-900 dark:text-white">Pak Budi Santoso, S.T.
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
                                                    <p class="font-semibold text-gray-900 dark:text-white">5 dari 30 Siswa
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
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Ekstrakurikuler Terkait</h2>
                            <p class="text-gray-500 dark:text-gray-400">Kegiatan lain yang mungkin kamu minati</p>
                        </div>
                        <a class="hidden text-sm font-bold text-primary hover:underline sm:block" href="#">Lihat
                            Semua</a>
                    </div>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <!-- Card 1 -->
                        <a class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 dark:border-gray-700 dark:bg-[#1e293b]"
                            href="#">
                            <div class="relative aspect-video overflow-hidden bg-gray-200">
                                <img alt="Code displayed on computer screen"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Digital matrix code rain background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtZKWzYCjnbSe_GENetiYykHnwDyuycMPuU9YHi2pmbyWvgAGLLMi3UNyRlij_0eTXeuZPgEKp50MVqgsaWUxnoVXItxpaCX5QuvDIbjhMguZmnOCSLr_2XuRz7_uDQxFIpfYqQpa1GAQHaj69-UglMryx037kIXNWHI3VkNqo6d9xdbUkwASdDzTxv2E-eHG8u8kwnW-aOG_wKwqeKjAwK5lx1Zl71yzjYiOFNQ9-MEO03uYO-Ij1jyEJhoQjbGJwMGWlscMbLM7A" />
                                <div
                                    class="absolute right-2 top-2 rounded-lg bg-white/90 px-2 py-1 text-xs font-bold text-gray-900 backdrop-blur-sm">
                                    20 Kuota
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-1 text-lg font-bold text-gray-900 group-hover:text-primary dark:text-white">
                                    Klub Coding</h3>
                                <p class="mb-4 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">Belajar web
                                    development dan aplikasi mobile dari dasar.</p>
                                <div class="mt-auto flex items-center justify-between text-xs font-medium text-gray-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">calendar_today</span>
                                        Senin</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 15:00</span>
                                </div>
                            </div>
                        </a>
                        <!-- Card 2 -->
                        <a class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 dark:border-gray-700 dark:bg-[#1e293b]"
                            href="#">
                            <div class="relative aspect-video overflow-hidden bg-gray-200">
                                <img alt="Multimedia editing setup"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Video editing timeline on a monitor"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8kNpqZMmu_kZ-FlfuACe7Lix0duIgqCfREjpu-gwI-AE7C9-GhQ4lTpihK9_u3SaLHKEqX6qhPSecXRdmWQuowsQfyztH_dzhFPVAWSB6Rn0X1eE2HKO5tk7u793ommgYB218tKDZqmdZq8-I9yzJRF-rBSYgTAWhGLDzvNf2m-LhhUotB6x_kBx4Cs8Wr1YDY-Of8OjZAg-yEweoGagBnY6QKJjQeiNmGactDOMnNjwS5wmkXV1UrqoL8GZW7iwm84A--Nmknmpn" />
                                <div
                                    class="absolute right-2 top-2 rounded-lg bg-white/90 px-2 py-1 text-xs font-bold text-gray-900 backdrop-blur-sm">
                                    12 Kuota
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-1 text-lg font-bold text-gray-900 group-hover:text-primary dark:text-white">
                                    Multimedia</h3>
                                <p class="mb-4 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">Fotografi,
                                    videografi, dan desain grafis kreatif.</p>
                                <div class="mt-auto flex items-center justify-between text-xs font-medium text-gray-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">calendar_today</span>
                                        Kamis</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 15:30</span>
                                </div>
                            </div>
                        </a>
                        <!-- Card 3 -->
                        <a class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 dark:border-gray-700 dark:bg-[#1e293b]"
                            href="#">
                            <div class="relative aspect-video overflow-hidden bg-gray-200">
                                <img alt="Basketball game"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Basketball hoop outdoors with blue sky"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIQqdh15SFwSeYUfFe_KAh6-O4egCqXW3NinCL3k-OEAhPFR9p5Bgm4MLt3N5IBou_iicJHUQH3MDAv_vbGYs934p1nqws2CeThQzrsZXGeES8gEjRgd7uTYHGlWwIJN-R84oJGjC7J_TeYFKJwRLwFTBeG6kqPchoFBs_Tt8AqmOIO7_MfLaj7D-3YNh3r_HDRwG5CX6La0eBO8aMPtCrAajT5fW0Q_goBP3A5V2rL5jSvZK5_LenlOQdU5BlmM9ZfbDYlPGpCIws" />
                                <div
                                    class="absolute right-2 top-2 rounded-lg bg-white/90 px-2 py-1 text-xs font-bold text-gray-900 backdrop-blur-sm">
                                    5 Kuota
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-1 text-lg font-bold text-gray-900 group-hover:text-primary dark:text-white">
                                    Basket</h3>
                                <p class="mb-4 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">Tim basket sekolah
                                    yang aktif mengikuti kejuaraan.</p>
                                <div class="mt-auto flex items-center justify-between text-xs font-medium text-gray-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">calendar_today</span>
                                        Jumat</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 16:00</span>
                                </div>
                            </div>
                        </a>
                        <!-- Card 4 -->
                        <a class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 dark:border-gray-700 dark:bg-[#1e293b]"
                            href="#">
                            <div class="relative aspect-video overflow-hidden bg-gray-200">
                                <img alt="Business planning meeting"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Paperwork and glasses on a desk"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0hPK846v2ExyvMh-NsKJlRlmBesnaUno1G4m5c3lpqGvfueATTpQkfYAeVQhyP6BzEKIi21oTMIIug-pw7NeMshv2BxsNcKgsWVklY-CT7lOywFhG0fnQSXKHAlGmIp5UpRzz_ZvDeqOp-Y5Sm7_rBU4oGAsC_6fmqQfcCM_6uu-1vf2oCxfMP1OqErCCKw___Uaszn2ev5adgM1UmVro6yeCHMXS0ByyHliRIZfW54-uACiXXw5aSon0mGWKtH7svAvsGhXn9U0n" />
                                <div
                                    class="absolute right-2 top-2 rounded-lg bg-white/90 px-2 py-1 text-xs font-bold text-gray-900 backdrop-blur-sm">
                                    Penuh
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-1 text-lg font-bold text-gray-900 group-hover:text-primary dark:text-white">
                                    Kewirausahaan</h3>
                                <p class="mb-4 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">Belajar membangun
                                    bisnis dari nol hingga sukses.</p>
                                <div class="mt-auto flex items-center justify-between text-xs font-medium text-gray-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">calendar_today</span>
                                        Selasa</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 14:00</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Simple Footer -->
            <x-footer />
        </main>
    </body>
@endsection
