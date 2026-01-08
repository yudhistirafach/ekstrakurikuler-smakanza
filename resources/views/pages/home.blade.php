@extends('layouts.layout')

@section('title', 'Beranda')

@section('content')

    @if (session()->has('alert'))
        <x-alert type="{{ session('alert.type') }}" :title="session('alert.title')" :message="session('alert.message')" :show="true" />
    @endif

    <body
        class="font-display bg-background-light dark:bg-background-dark text-[#0d131c] dark:text-white overflow-x-hidden transition-colors duration-200">
        <div class="relative flex min-h-screen w-full flex-col group/design-root">
            <!-- Navbar -->
            <x-navbar />
            <!-- Main Content -->
            <main class="flex flex-col items-center justify-center">
                <!-- Hero Section -->
                <section class="w-full bg-background-light dark:bg-background-dark py-12 md:py-20 lg:py-24">
                    <div class="layout-container flex justify-center">
                        <div
                            class="mx-auto grid max-w-[1280px] grid-cols-1 gap-12 px-4 md:grid-cols-2 md:items-center md:px-10 lg:gap-20">
                            <!-- Text Content -->
                            <div class="flex flex-col gap-6 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                                <div
                                    class="inline-flex w-fit items-center gap-2 rounded-full bg-accent/10 px-3 py-1 text-xs font-bold text-accent dark:bg-accent/20">
                                    <span class="material-symbols-outlined text-[16px]">verified</span>
                                    Pendaftaran Tahun Ajaran 2024/2025 Dibuka
                                </div>
                                <h1
                                    class="text-4xl font-black leading-[1.1] tracking-tighter text-[#0d131c] dark:text-white md:text-5xl lg:text-6xl">
                                    EkstraSMAKANZA <br />
                                    <span class="text-primary">Platform Pendaftaran</span> Ekstrakurikuler
                                </h1>
                                <p class="max-w-[540px] text-lg font-normal text-gray-600 dark:text-gray-400">
                                    Temukan bakatmu, kembangkan potensimu, dan raih prestasi bersama SMK Negeri 1 Wonosobo.
                                    Bergabunglah dengan komunitas yang tepat untuk masa depanmu.
                                </p>
                                <div class="flex flex-wrap gap-4 pt-2">
                                    <a href="{{ route('daftar-ekstra') }}">
                                        <x-button size="lg" icon="arrow_forward" class="gap-2" icon-position="right">
                                            Mulai Daftar
                                        </x-button>
                                    </a>
                                    <x-button variant="outline" size="lg" class="gap-2" icon="play_circle">
                                        <a href="#">Lihat video</a>
                                    </x-button>
                                </div>
                            </div>
                            <!-- Hero Image -->
                            <div class="relative w-full" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                                <div
                                    class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl shadow-2xl shadow-primary/10 lg:aspect-square">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>

                                    <!-- Image Slider -->
                                    <div class="image-slider relative h-full w-full">
                                        <img alt="Vocational school students 1"
                                            class="slider-image absolute inset-0 h-full w-full object-cover transition-opacity duration-1000 opacity-100"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxEdx-rl2kf--jraFYV87UYhQ6PFBJH0zR5_JpMCdf5gs-u96eCw2nLux9kQ49R00vRapx99ZCb46x6iJkYK9UbnOy3IyeKgp_sCX2Cg7L2AW6Da8oI-bf-Kny82eJADEmnLAcZLmP4eZ5mj2XbfZ3b2jGoH6SN9J-mk6-5qOMD2s5Dg5wj2xK-p2DWS9KnMqSbif53lA_dNyVCaQ3YMvm1KvA58zbnMp7q0rqYlkXdYfC4aL3xhmwAGLbPME_OgxxBo46V7sXgpYC" />
                                        <img alt="Vocational school students 2"
                                            class="slider-image absolute inset-0 h-full w-full object-cover transition-opacity duration-1000 opacity-0"
                                            src="https://picsum.photos/800/600?random=1" />
                                        <img alt="Vocational school students 3"
                                            class="slider-image absolute inset-0 h-full w-full object-cover transition-opacity duration-1000 opacity-0"
                                            src="https://picsum.photos/800/600?random=2" />
                                    </div>

                                    <!-- Indicators (optional) -->
                                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2">
                                        <span
                                            class="indicator h-2 w-2 rounded-full bg-white/50 transition-all duration-300"></span>
                                        <span
                                            class="indicator h-2 w-2 rounded-full bg-white/50 transition-all duration-300"></span>
                                        <span
                                            class="indicator h-2 w-2 rounded-full bg-white/50 transition-all duration-300"></span>
                                    </div>
                                </div>

                                <!-- Decorative Elements -->
                                <div
                                    class="absolute -right-8 -top-8 -z-10 h-64 w-64 rounded-full bg-primary/20 blur-3xl dark:bg-primary/10">
                                </div>
                                <div
                                    class="absolute -bottom-8 -left-8 -z-10 h-64 w-64 rounded-full bg-accent/20 blur-3xl dark:bg-accent/10">
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Headline -->
                <div class="w-full max-w-[1280px] px-4 pt-10 pb-4 md:px-10" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                    <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-[#0d131c] dark:text-white">Ekstrakurikuler
                                Populer</h2>
                            <p class="mt-2 text-base text-gray-500 dark:text-gray-400">Pilihan favorit siswa SMK Negeri 1
                                Wonosobo tahun ini</p>
                        </div>
                        <a class="group flex items-center gap-1 text-sm font-bold text-primary transition-colors hover:text-blue-700"
                            href="{{ route('ekstrakurikuler') }}">
                            Lihat Semua
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <!-- Showcase Grid -->
                <x-showcase-grid :extracurriculars="$extracurriculars" />
                <!-- CTA Section -->
                <x-cta-section />
            </main>
            <!-- Footer -->
            <x-footer />
        </div>
    </body>
@endsection
