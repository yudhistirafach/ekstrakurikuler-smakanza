@extends('layouts.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
    <div class="flex h-screen w-full overflow-hidden">
        <!-- Sidebar -->
        <x-sidebar />
        <!-- Main Content -->
        <main class="flex flex-1 flex-col overflow-y-auto bg-background-light dark:bg-background-dark">
            <!-- Top Header -->
            <x-header-dashboard />
            <div class="mx-auto w-full max-w-7xl p-6 lg:p-8">
                <!-- Page Heading -->
                <div class="mb-8 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Overview Dashboard</h2>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Ringkasan aktivitas ekstrakurikuler
                            terkini.</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700">
                            <span class="material-symbols-outlined text-[20px]">download</span>
                            Export Data
                        </button>
                        <button
                            class="flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-lg shadow-primary/30 hover:bg-blue-600">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Tambah Siswa
                        </button>
                    </div>
                </div>
                <!-- Stats Grid -->
                <div class="mb-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Stat Card 1 -->
                    <div
                        class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md dark:bg-[#1e2736]">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Siswa</p>
                                <h3 class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">1,240</h3>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">groups</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center text-emerald-600 dark:text-emerald-400 font-medium">
                                <span class="material-symbols-outlined text-sm mr-1">trending_up</span>
                                +12%
                            </span>
                            <span class="ml-2 text-slate-400 text-xs">dari bulan lalu</span>
                        </div>
                    </div>
                    <!-- Stat Card 2 -->
                    <div
                        class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md dark:bg-[#1e2736]">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Ekstra</p>
                                <h3 class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">18</h3>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-lg bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                                <span class="material-symbols-outlined">trophy</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-slate-400 text-xs">Semua aktif berjalan</span>
                        </div>
                    </div>
                    <!-- Stat Card 3 -->
                    <div
                        class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md dark:bg-[#1e2736]">
                        <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-orange-500/10 blur-xl"></div>
                        <div class="flex items-start justify-between relative z-10">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending</p>
                                <h3 class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">45</h3>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-lg bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">pending_actions</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm relative z-10">
                            <span class="flex items-center text-orange-600 dark:text-orange-400 font-medium">
                                Butuh validasi
                            </span>
                        </div>
                    </div>
                    <!-- Stat Card 4 -->
                    <div
                        class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md dark:bg-[#1e2736]">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Terpopuler</p>
                                <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white truncate"
                                    title="Futsal &amp; Basket">Futsal &amp; Basket</h3>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-lg bg-pink-50 text-pink-600 dark:bg-pink-900/20 dark:text-pink-400">
                                <span class="material-symbols-outlined">favorite</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-slate-400 text-xs">Berdasarkan pendaftar</span>
                        </div>
                    </div>
                </div>
                <!-- Charts & Content -->
                <div class="mb-8 grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <!-- Bar Chart -->
                    <div class="rounded-xl bg-white p-6 shadow-sm dark:bg-[#1e2736] lg:col-span-2">
                        <div class="mb-6 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Statistik Pendaftaran</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Tahun Ajaran 2023/2024</p>
                            </div>
                            <select
                                class="rounded-lg border-slate-200 bg-slate-50 text-sm text-slate-600 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                                <option>Semester Ganjil</option>
                                <option>Semester Genap</option>
                            </select>
                        </div>
                        <!-- Chart Area -->
                        <div class="relative h-64 w-full">
                            <div class="flex h-full items-end justify-between gap-2 px-2 pb-6">
                                <!-- Bar 1 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 85%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            120</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Futsal</span>
                                </div>
                                <!-- Bar 2 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 75%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            98</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Basket</span>
                                </div>
                                <!-- Bar 3 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 45%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            65</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">PMR</span>
                                </div>
                                <!-- Bar 4 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 60%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            85</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Pramuka</span>
                                </div>
                                <!-- Bar 5 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 35%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            42</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Musik</span>
                                </div>
                                <!-- Bar 6 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 30%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            38</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Rohis</span>
                                </div>
                                <!-- Bar 7 -->
                                <div class="group relative flex h-full w-full flex-col justify-end gap-2">
                                    <div class="relative w-full rounded-t-lg bg-primary/20 transition-all group-hover:bg-primary dark:bg-primary/30"
                                        style="height: 55%;">
                                        <div
                                            class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white group-hover:block dark:bg-white dark:text-slate-900">
                                            72</div>
                                    </div>
                                    <span
                                        class="text-center text-xs font-medium text-slate-500 dark:text-slate-400">Silat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Widget / Notification -->
                    <div class="flex flex-col gap-6 lg:col-span-1">
                        <div class="rounded-xl bg-gradient-to-br from-primary to-blue-700 p-6 text-white shadow-lg">
                            <div
                                class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-white/20 backdrop-blur">
                                <span class="material-symbols-outlined fill">campaign</span>
                            </div>
                            <h3 class="text-lg font-bold">Pendaftaran Dibuka!</h3>
                            <p class="mt-2 text-sm text-blue-100">Periode pendaftaran semester genap akan berakhir
                                dalam 5 hari lagi.</p>
                            <button
                                class="mt-4 w-full rounded-lg bg-white py-2 text-sm font-semibold text-primary transition-colors hover:bg-blue-50">
                                Lihat Detail
                            </button>
                        </div>
                        <!-- Skeleton Loading Example for "Aktifitas Terbaru" -->
                        <div class="flex-1 rounded-xl bg-white p-6 shadow-sm dark:bg-[#1e2736]">
                            <h3 class="mb-4 text-base font-bold text-slate-900 dark:text-white">Log Aktivitas</h3>
                            <div class="flex flex-col gap-4">
                                <!-- Skeleton Item -->
                                <div class="flex items-center gap-3 animate-pulse">
                                    <div class="h-10 w-10 rounded-full bg-slate-200 dark:bg-slate-700"></div>
                                    <div class="flex flex-1 flex-col gap-2">
                                        <div class="h-3 w-3/4 rounded bg-slate-200 dark:bg-slate-700"></div>
                                        <div class="h-2 w-1/2 rounded bg-slate-200 dark:bg-slate-700"></div>
                                    </div>
                                </div>
                                <!-- Real Item -->
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400">
                                        <span class="material-symbols-outlined text-sm">edit</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Admin mengedit
                                            data</span>
                                        <span class="text-xs text-slate-500 dark:text-slate-400">2 menit yang
                                            lalu</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-green-50 text-green-600 dark:bg-green-900/30 dark:text-green-400">
                                        <span class="material-symbols-outlined text-sm">check</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">30 Siswa
                                            disetujui</span>
                                        <span class="text-xs text-slate-500 dark:text-slate-400">1 jam yang lalu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Registrations Table -->
                <div class="rounded-xl bg-white shadow-sm dark:bg-[#1e2736] overflow-hidden">
                    <div
                        class="flex items-center justify-between border-b border-slate-100 px-6 py-4 dark:border-slate-800">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Pendaftaran Terbaru</h3>
                        <a class="text-sm font-medium text-primary hover:text-blue-700" href="#">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead
                                class="bg-slate-50 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:bg-slate-800/50 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-4">Nama Siswa</th>
                                    <th class="px-6 py-4">Kelas</th>
                                    <th class="px-6 py-4">Ekstrakurikuler</th>
                                    <th class="px-6 py-4">Tanggal Daftar</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-sm dark:divide-slate-800">
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Student Avatar"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDkIitLp5Xi1KBThiSh6m47-D2oQIR7j7ukZcXfSfQA9-O6Sbp04mqL-NaTp4VJMsbR3l9P3TKLz4BXDPNsX1GheclDs_DxjlSvAZNbdKFPMVzPnOzpZ5vhSn3w--Kbc6-Ipbg1H9l-PCiZDYEkCFwpolCLTv2IG8wKd6wjmZyLtsvgnr5Kxpz20pm618ulITYdWYc8Nv8dEA0Y90qzc2yiTnAFcl9Np1OsJwxMSjGKspLx1caI445YCJUQKvPsRDVi5qjjWj7aMPua')">
                                            </div>
                                            <span class="font-medium text-slate-900 dark:text-white">Ahmad Fauzi</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">XI RPL 1</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Futsal</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">24 Okt 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="rounded-lg bg-green-50 p-1.5 text-green-600 hover:bg-green-100 dark:bg-green-900/20 dark:text-green-400 dark:hover:bg-green-900/40"
                                                title="Approve">
                                                <span class="material-symbols-outlined text-[20px]">check</span>
                                            </button>
                                            <button
                                                class="rounded-lg bg-red-50 p-1.5 text-red-600 hover:bg-red-100 dark:bg-red-900/20 dark:text-red-400 dark:hover:bg-red-900/40"
                                                title="Reject">
                                                <span class="material-symbols-outlined text-[20px]">close</span>
                                            </button>
                                            <button
                                                class="rounded-lg bg-slate-100 p-1.5 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700"
                                                title="Detail">
                                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 text-xs font-bold">
                                                SN
                                            </div>
                                            <span class="font-medium text-slate-900 dark:text-white">Siti
                                                Nurhaliza</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">X AKL 2</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">PMR</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">23 Okt 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="rounded-lg bg-green-50 p-1.5 text-green-600 hover:bg-green-100 dark:bg-green-900/20 dark:text-green-400 dark:hover:bg-green-900/40"
                                                title="Approve">
                                                <span class="material-symbols-outlined text-[20px]">check</span>
                                            </button>
                                            <button
                                                class="rounded-lg bg-red-50 p-1.5 text-red-600 hover:bg-red-100 dark:bg-red-900/20 dark:text-red-400 dark:hover:bg-red-900/40"
                                                title="Reject">
                                                <span class="material-symbols-outlined text-[20px]">close</span>
                                            </button>
                                            <button
                                                class="rounded-lg bg-slate-100 p-1.5 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700"
                                                title="Detail">
                                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Student Avatar"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB-GjYP_Oq9IuiGvvyaHZsgidzudBJ2WVw30g59JMz0ArOe_kDPmgQh7Ur9diIGxj3g61udx6AVkCCQUzTu994p45S9LgNOrcITujysc8_yOMKjhgL4Q2xm1zoAdGLboRYmYGChFjBMGOArLWHkspFX6MXwl5rdAAjzt0rWgwuWg0diXxpPo7XaNqalxtLBKQ0mYiluBQXKdGA2deyLb8WNqQsqQ51zoLKl5MLdCuwk46PCcd-aCc3MWrUWpA5In_TRx0CCr8v42lFD')">
                                            </div>
                                            <span class="font-medium text-slate-900 dark:text-white">Rizky
                                                Ramadhan</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">XII TKJ 3</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Basket</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">22 Okt 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                            Disetujui
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="rounded-lg bg-slate-100 p-1.5 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700"
                                                title="Detail">
                                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Loading Skeleton Row -->
                                <tr class="animate-pulse">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 dark:bg-slate-700"></div>
                                            <div class="h-4 w-24 rounded bg-slate-200 dark:bg-slate-700"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="h-4 w-16 rounded bg-slate-200 dark:bg-slate-700"></div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="h-4 w-20 rounded bg-slate-200 dark:bg-slate-700"></div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="h-4 w-20 rounded bg-slate-200 dark:bg-slate-700"></div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="h-5 w-16 rounded-full bg-slate-200 dark:bg-slate-700"></div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="ml-auto h-8 w-24 rounded bg-slate-200 dark:bg-slate-700"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
@endsection