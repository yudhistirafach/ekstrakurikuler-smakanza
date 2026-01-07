@extends('layouts.layout')

@section('title', 'Daftar Ekstra')

@section('content')
<body
    class="bg-background-light dark:bg-background-dark font-display text-[#0d131c] antialiased min-h-screen flex flex-col">
    {{-- Navbar --}}
    <x-navbar />
    <!-- Main Content -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Page Heading -->
        <div class="mb-8">
            <h1
                class="text-[#0d131c] dark:text-white text-3xl sm:text-4xl font-black leading-tight tracking-[-0.033em]">
                Pendaftaran Ekstrakurikuler</h1>
            <p class="text-[#49699c] text-base font-normal mt-2">Tahun Ajaran 2023/2024 • Semester Ganjil</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- LEFT COLUMN: Sticky Status Card -->
            <aside class="lg:col-span-4 lg:sticky lg:top-24 space-y-6 order-1">
                <!-- Student Profile & Status Card -->
                <div
                    class="bg-white dark:bg-[#1e293b] rounded-xl border border-[#e7ecf4] dark:border-slate-700 shadow-sm overflow-hidden">
                    <!-- Header Pattern -->
                    <x-student-profile-card />
                        <!-- Registered Activities List -->
                        <div class="space-y-4">
                            <h4 class="text-sm font-bold text-[#0d131c] dark:text-white uppercase tracking-wider">
                                Ekstrakurikuler Saya</h4>
                            <!-- Item 1: Approved -->
                            <div
                                class="flex items-start gap-3 p-3 rounded-lg border border-green-200 bg-green-50 dark:bg-green-900/20 dark:border-green-800">
                                <div
                                    class="bg-green-100 dark:bg-green-800 p-1.5 rounded-full text-green-600 dark:text-green-300">
                                    <span class="material-symbols-outlined text-lg">check_circle</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-[#0d131c] dark:text-white">Pramuka (Wajib)</p>
                                    <p class="text-xs text-green-700 dark:text-green-400 font-medium">Approved</p>
                                </div>
                            </div>
                            <!-- Item 2: Pending (Simulated newly added) -->
                            <!-- Use Empty State if none -->
                            <!-- Example of empty slot -->
                            <div
                                class="flex items-center gap-3 p-3 rounded-lg border border-dashed border-[#ced8e8] dark:border-slate-600 bg-transparent text-[#49699c]">
                                <div class="bg-[#f0f4f8] dark:bg-slate-700 p-1.5 rounded-full text-[#9aaecb]">
                                    <span class="material-symbols-outlined text-lg">add_circle</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium">Slot Kosong</p>
                                    <p class="text-xs">Silahkan daftar di samping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Helper Card -->
                <div
                    class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-xl border border-blue-100 dark:border-blue-800 flex gap-3">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">help</span>
                    <div>
                        <p class="text-sm font-bold text-blue-800 dark:text-blue-300">Butuh Bantuan?</p>
                        <p class="text-xs text-blue-700 dark:text-blue-400 mt-1">Jika mengalami kendala pendaftaran,
                            hubungi Wali Kelas atau Admin Kesiswaan di Ruang 102.</p>
                    </div>
                </div>
            </aside>
            <!-- RIGHT COLUMN: Registration Form -->
            <section class="lg:col-span-8 space-y-6 order-2">

                <!-- Main Form Card -->
                <x-form-daftar-ekstra />
            </section>
        </div>
    </main>
    <!-- Success Toast (Hidden by default, shown for design purpose visual) -->
    <!-- Ideally controlled by JS, here static representation of style -->
    <div class="fixed bottom-6 right-6 z-50 transform transition-all duration-300 translate-y-20 opacity-0 pointer-events-none"
        style="opacity: 0;">
        <div
            class="flex items-center gap-3 bg-white dark:bg-slate-800 border border-green-200 dark:border-green-800 shadow-xl rounded-lg p-4 max-w-sm">
            <span class="material-symbols-outlined text-green-500 text-2xl">check_circle</span>
            <div>
                <p class="font-bold text-sm text-[#0d131c] dark:text-white">Berhasil Mendaftar!</p>
                <p class="text-xs text-gray-500">Formulir Anda telah dikirim untuk verifikasi.</p>
            </div>
            <button class="text-gray-400 hover:text-gray-600 ml-2">
                <span class="material-symbols-outlined text-sm">close</span>
            </button>
        </div>
    </div>
</body>
@endsection
