@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
<body
    class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col text-slate-900 dark:text-slate-100 transition-colors duration-200">
    <!-- Top Navigation Bar -->
    <x-navbar />
    <!-- Main Content -->
    <main class="flex-1 layout-container flex flex-col w-full max-w-[1280px] mx-auto px-4 sm:px-10 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column: Profile Edit Form -->
            <div class="flex-1 w-full lg:w-2/3 flex flex-col gap-6">
                <!-- Header Card -->
                <div
                    class="bg-white dark:bg-[#151e2b] rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800/50">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                        <div class="relative group cursor-pointer">
                            <div class="bg-center bg-no-repeat bg-cover rounded-full size-28 ring-4 ring-slate-50 dark:ring-slate-800"
                                data-alt="Profile picture of a student"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAl9JeRbJ1CdPpIcDQHFNcRvwiEog8wKb-mndeyI70wyLs2CB7ANw6FLs-KWMxKV3vWQ5FKek_yQjcPe3Gj7EEKB6J_Oxgs3w7rp9k1vjrddr4ct5dfJxifIqtSRb0lxtsWtxA986_RvuEUSnViogDLngIXogZKDw3TFMyZh84bMsPCkFgdxAJli5qI5Lv-c-MunXAkrUVT3aA-BN04TSfyLpyHfF4Bcg0nSldVDG-2FpA_WowuplgQMIac9MHC2m7b1_ejfgUK_WOX");'>
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black/40 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white">photo_camera</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-center sm:items-start pt-2">
                            <h1 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight">Budi Santoso
                            </h1>
                            <p class="text-slate-500 dark:text-slate-400 text-base font-medium mt-1">NISN: 0056781234
                            </p>
                            <span
                                class="mt-3 inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                <span class="size-2 rounded-full bg-green-500 mr-2"></span>
                                Siswa Aktif
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Personal Information Form -->
                <div
                    class="bg-white dark:bg-[#151e2b] rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800/50">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Informasi Pribadi</h3>
                    </div>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Nama Lengkap</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all cursor-not-allowed"
                                disabled type="text" value="Budi Santoso" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Email</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all cursor-not-allowed"
                                disabled type="email" value="budi.santoso@smkn1wsb.sch.id" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">NISN</span>
                            <input
                                class="w-full rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 px-4 py-2.5 cursor-not-allowed"
                                disabled="" type="text" value="0056781234" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Kelas</span>
                            <div class="relative">
                                <input
                                    class="w-full appearance-none rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 pr-10 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all cursor-not-allowed" disabled type="text" value="XII RPL 2">
                                </input>
                            </div>
                        </label>
                        <label class="flex flex-col gap-2 md:col-span-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">No. Handphone</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                type="tel" value="081234567890" />
                        </label>
                    </form>
                </div>
                <!-- Change Password Section -->
                <div
                    class="bg-white dark:bg-[#151e2b] rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800/50">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Ganti Password</h3>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <label class="flex flex-col gap-2 md:col-span-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Password Lama</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                placeholder="Masukkan password lama" type="password" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Password Baru</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                placeholder="Minimal 8 karakter" type="password" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">Konfirmasi Password
                                Baru</span>
                            <input
                                class="w-full rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white px-4 py-2.5 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                placeholder="Ulangi password baru" type="password" />
                        </label>
                    </form>
                </div>
                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-4 mt-2">
                    <button
                        class="px-6 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Batal</button>
                    <button
                        class="px-6 py-2.5 rounded-lg bg-primary text-white font-medium hover:bg-blue-600 shadow-lg shadow-blue-500/30 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">save</span>
                        Simpan Perubahan
                    </button>
                </div>
            </div>
            <!-- Right Column: Extracurricular Activities (Readonly) -->
            <div class="w-full lg:w-1/3 flex flex-col gap-6">
                <div
                    class="bg-white dark:bg-[#151e2b] rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800/50 sticky top-24">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Ekstrakurikuler Saya</h3>
                    </div>
                    <div class="flex flex-col gap-4">
                        <!-- Card Item 1 -->
                        <div
                            class="group flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-slate-900 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all">
                            <div
                                class="size-12 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">terminal</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white truncate">Computer
                                        Club</h4>
                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400">AKTIF</span>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">Ketua Divisi Web</p>
                                <div class="flex items-center gap-2 mt-2 text-xs text-slate-400 dark:text-slate-500">
                                    <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                    <span>Rabu, 15:00</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item 2 -->
                        <div
                            class="group flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-slate-900 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all">
                            <div
                                class="size-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-600 shrink-0">
                                <span class="material-symbols-outlined">sports_basketball</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white truncate">Basket
                                        Putra</h4>
                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400">AKTIF</span>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">Anggota</p>
                                <div class="flex items-center gap-2 mt-2 text-xs text-slate-400 dark:text-slate-500">
                                    <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                    <span>Jumat, 14:30</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item 3 -->
                        <div
                            class="group flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-slate-900 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all opacity-70">
                            <div
                                class="size-12 rounded-lg bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-500 shrink-0">
                                <span class="material-symbols-outlined">hiking</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white truncate">Pramuka
                                    </h4>
                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-slate-200 text-slate-600 dark:bg-slate-800 dark:text-slate-400">CUTI</span>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">Dewan Ambalan</p>
                                <div class="flex items-center gap-2 mt-2 text-xs text-slate-400 dark:text-slate-500">
                                    <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                    <span>Sabtu, 13:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-6 py-2.5 rounded-lg border border-dashed border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-primary hover:border-primary hover:bg-blue-50 dark:hover:bg-blue-900/10 text-sm font-medium transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">add_circle</span>
                        Daftar Ekskul Baru
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
