@extends('layouts.auth-layout')

@section('title', 'Login')

@section('content')
    @if (session()->has('alert'))
        <x-alert type="{{ session('alert.type') }}" :title="session('alert.title')" :message="session('alert.message')" :show="true" />
    @endif

    <div class="flex min-h-screen flex-row">
        <!-- Left Section: Form -->
        <div
            class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 w-full lg:w-1/2 bg-white transition-colors duration-200">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <!-- Logo Header -->
                <div class="flex items-center gap-3 text-primary mb-10">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-3xl">school</span>
                    </div>
                    <h2 class="text-2xl font-bold tracking-tight text-[#0d131c]">EkstraSMAKANZA</h2>
                </div>
                <div>
                    <h1 class="text-3xl font-bold tracking-tight text-[#0d131c] mb-2">Selamat Datang</h1>
                    <p class="text-sm text-slate-500">
                        Kelola kegiatan ekstrakurikuler teman-teman dengan mudah dan efisien. Silakan masukkan data
                        teman-teman di bawah ini.
                    </p>
                </div>
                <div class="mt-8">
                    <form action="{{ route('login.post') }}" class="space-y-6" method="POST">
                        <!-- Email Field -->
                        @csrf
                        <div>
                            <label class="block text-sm font-medium leading-6 text-[#0d131c]" for="email">Email</label>
                            @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="mt-2 relative rounded-xl shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="material-symbols-outlined text-slate-400">mail</span>
                                </div>
                                <input autocomplete="email" value="{{ old('email') }}"
                                    class="form-input block w-full rounded-xl border-0 py-3.5 pl-10 text-[#0d131c] bg-input-bg-light ring-1 ring-inset ring-border-light placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 {{ $errors->has('email') ? 'ring-red-500 focus:ring-red-500' : 'ring-border-light focus:ring-primary' }}"
                                    id="email" name="email" placeholder="student@gmail.com" required=""
                                    type="email" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div>
                            <label class="block text-sm font-medium leading-6 text-[#0d131c]"
                                for="password">Password</label>

                            @error('password')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="mt-2 relative rounded-xl shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="material-symbols-outlined text-slate-400">lock</span>
                                </div>
                                <input autocomplete="current-password"
                                    class="form-input block w-full rounded-xl border-0 py-3.5 pl-10 pr-10 text-[#0d131c] bg-input-bg-light ring-1 ring-inset ring-border-light placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 {{ $errors->has('password') ? 'ring-red-500 focus:ring-red-500' : 'ring-border-light focus:ring-primary' }}"
                                    id="password" name="password" placeholder="••••••••" required="" type="password" />
                                <button type="button" onclick="togglePassword()"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg id="eye-icon" class="w-5 h-5 text-primary hover:text-primary-hover" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input class="h-5 w-5 rounded border-gray-300 text-primary focus:ring-primary"
                                    id="remember-me" name="remember-me" type="checkbox" />
                                <label class="ml-2 block text-sm text-[#0d131c]" for="remember-me">Remember me</label>
                            </div>
                            <div class="text-sm">
                                <a class="font-semibold text-primary hover:text-primary-hover hover:underline"
                                    href="{{ route('forgot-password') }}">Forgot password?</a>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div>
                            <button
                                class="flex w-full justify-center rounded-xl bg-primary px-3 py-3.5 text-sm font-bold leading-6 text-white shadow-sm hover:bg-primary-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all duration-200"
                                type="submit">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Right Section: Image/Illustration -->
        <div class="relative hidden w-0 flex-1 lg:block">
            <!-- Image Slider Container -->
            <div class="image-slider-container absolute inset-0 h-full w-full">
                <!-- Slide 1 - Students studying -->
                <div class="login-slide absolute inset-0 h-full w-full bg-cover bg-center transition-opacity duration-1000 opacity-100"
                    style='background-image: url("https://images.unsplash.com/photo-1581726690015-c9861fa5057f?q=80&w=685&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");'>
                </div>
                <!-- Slide 2 - School sports field -->
                <div class="login-slide absolute inset-0 h-full w-full bg-cover bg-center transition-opacity duration-1000 opacity-0"
                    style='background-image: url("https://images.unsplash.com/photo-1639548538099-6f7f9aec3b92?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");'>
                </div>
                <!-- Slide 3 - Library/books -->
                <div class="login-slide absolute inset-0 h-full w-full bg-cover bg-center transition-opacity duration-1000 opacity-0"
                    style='background-image: url("https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=1200&q=80");'>
                </div>
            </div>

            <!-- Gradient Overlay (Blue #3B82F6 to Green #10B981) -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary/80 to-secondary/80 mix-blend-multiply z-[1]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-[2]"></div>

            <!-- Content Overlay -->
            <div class="absolute bottom-0 left-0 right-0 p-12 text-white z-10 flex flex-col justify-end h-full">
                <div class="max-w-xl">
                    <div
                        class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-white/20 backdrop-blur-md border border-white/30 text-white">
                        <span class="material-symbols-outlined text-4xl">verified</span>
                    </div>
                    <h2 class="text-4xl font-bold tracking-tight mb-4 drop-shadow-lg">SMK Negeri 1 Wonosobo</h2>
                    <p class="text-lg text-white/90 font-light leading-relaxed drop-shadow-md">
                        "Unggul dan Berprestasi" — Join our vibrant community and manage your extracurricular journey
                        with ease.
                    </p>
                    <!-- Indicators -->
                    <div class="mt-8 flex gap-2">
                        <div class="login-indicator h-1.5 w-8 rounded-full bg-white transition-all duration-300"></div>
                        <div class="login-indicator h-1.5 w-2 rounded-full bg-white/40 transition-all duration-300"></div>
                        <div class="login-indicator h-1.5 w-2 rounded-full bg-white/40 transition-all duration-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
