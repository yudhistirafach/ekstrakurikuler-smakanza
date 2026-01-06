@extends('layouts.layout')

@section('title', 'Forgot Password')

@section('content')
<body
    class="relative flex min-h-screen w-full flex-col bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white overflow-x-hidden antialiased transition-colors duration-300">
    <!-- Navbar -->
    <x-navbar :with_navigation="false" />
    <!-- Main Content -->
    <main class="flex flex-1 flex-col items-center justify-center px-4 py-12 lg:px-20">
        <div class="w-full max-w-[480px]">
            <!-- Card Container -->
            <div
                class="relative overflow-hidden rounded-2xl bg-white dark:bg-[#1a2332] shadow-xl ring-1 ring-slate-900/5 dark:ring-white/10">
                <!-- Top Decorative Gradient -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary to-secondary"></div>
                <div class="p-8 pt-10">
                    <!-- Icon & Heading -->
                    <div class="mb-8 flex flex-col items-center text-center">
                        <div
                            class="mb-5 flex size-16 items-center justify-center rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary">
                            <span class="material-symbols-outlined text-[32px]">lock_reset</span>
                        </div>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Lupa Kata
                            Sandi?</h1>
                        <p class="text-base text-slate-500 dark:text-slate-400">
                            Jangan khawatir, masukkan email yang terdaftar dan kami akan mengirimkan petunjuk reset kata
                            sandi.
                        </p>
                    </div>
                    <!-- Form -->
                    <form class="flex flex-col gap-5" onsubmit="event.preventDefault();">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-slate-900 dark:text-slate-200" for="email">
                                Alamat Email
                            </label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                    <span class="material-symbols-outlined text-slate-400">mail</span>
                                </div>
                                <input
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-slate-900 placeholder:text-slate-400 focus:border-primary focus:bg-white focus:ring-1 focus:ring-primary dark:border-slate-700 dark:bg-slate-900/50 dark:text-white dark:placeholder:text-slate-500 dark:focus:border-primary dark:focus:bg-slate-900 transition-all duration-200"
                                    id="email" name="email" placeholder="contoh@gmail.com"
                                    required="" type="email" />
                            </div>
                        </div>
                        <button
                            class="group mt-2 flex w-full items-center justify-center gap-2 rounded-xl bg-primary py-3.5 text-base font-bold text-white shadow-lg shadow-blue-500/25 transition-all hover:bg-blue-600 hover:shadow-blue-500/40 active:scale-[0.98]"
                            type="submit">
                            <span>Kirim Email Reset</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </button>
                    </form>
                    <!-- Footer Link -->
                    <div class="mt-8 text-center">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            Ingat kata sandi Anda?
                            <a class="font-semibold text-primary decoration-2 hover:underline hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                                href="{{ route('login') }}">
                                Masuk kembali
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Subtle Pattern Background inside card -->
                <div
                    class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(#3c83f6_1px,transparent_1px)] [background-size:16px_16px] opacity-[0.03] dark:opacity-[0.05]">
                </div>
            </div>
            <!-- Safe & Secure Badge -->
            <div class="mt-8 flex justify-center gap-2 text-xs font-medium text-slate-400 dark:text-slate-500">
                <span class="material-symbols-outlined text-base">verified_user</span>
                <span>Aman &amp; Terenkripsi oleh EkstraSMEA</span>
            </div>
        </div>
    </main>
</body>
@endsection