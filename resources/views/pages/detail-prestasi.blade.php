@extends('layouts.layout')

@section('title', 'Detail Prestasi')

@section('content')

    <body class="bg-background-light dark:bg-background-dark font-display text-[#0d131c] antialiased">
        <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
            <!-- Top Navigation -->
            <x-navbar />
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center py-5 px-4 md:px-8 lg:px-20 xl:px-40">
                    <div class="layout-content-container flex flex-col max-w-[1200px] flex-1 gap-6">
                        <!-- Hero Header -->
                        <div class="group relative w-full overflow-hidden rounded-2xl shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent z-10">
                            </div>
                            <div class="bg-cover bg-center h-[300px] md:h-[400px] w-full transform transition-transform duration-700 hover:scale-105"
                                data-alt="Students holding a trophy and robot on a stage with bright lights"
                                style="background-image: url('{{ $achievement->image_url ?: 'https://placehold.co/600x400/e7ecf4/64748b?text=No+Image' }}')">
                            </div>
                            <div class="absolute bottom-0 left-0 z-20 w-full p-6 md:p-10">
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="inline-flex items-center gap-1 rounded-full bg-white/20 px-3 py-1 text-xs font-medium text-white backdrop-blur-md">
                                            <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                            {{ \Carbon\Carbon::parse($achievement->event_date)->isoFormat('DD MMMM YYYY') }}
                                        </span>
                                    </div>
                                    <h1
                                        class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight tracking-tight drop-shadow-sm">
                                        {{ $achievement->title }}
                                    </h1>
                                    <p class="text-gray-200 text-sm md:text-base max-w-2xl line-clamp-2">
                                        {{ $achievement->excerpt }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Info Stats Grid -->
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <div
                                class="flex flex-col gap-1 rounded-xl bg-white dark:bg-gray-800 p-5 shadow-sm border border-[#e7ecf4] dark:border-gray-700 transition-all hover:shadow-md hover:border-primary/20 group">
                                <div class="flex items-center gap-3 mb-2">
                                    <div
                                        class="bg-blue-50 text-primary p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-[24px]">public</span>
                                    </div>
                                    <p class="text-[#49699c] dark:text-gray-300 text-sm font-medium">Tingkat</p>
                                </div>
                                <p class="text-[#0d131c] dark:text-white text-xl font-bold">
                                    {{ ucwords($achievement->level) }}</p>
                            </div>
                            <div
                                class="flex flex-col gap-1 rounded-xl bg-white dark:bg-gray-800 p-5 shadow-sm border border-[#e7ecf4] dark:border-gray-700 transition-all hover:shadow-md hover:border-primary/20 group">
                                <div class="flex items-center gap-3 mb-2">
                                    <div
                                        class="bg-blue-50 text-primary p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-[24px]">calendar_month</span>
                                    </div>
                                    <p class="text-[#49699c] dark:text-gray-300 text-sm font-medium">Tahun</p>
                                </div>
                                <p class="text-[#0d131c] dark:text-white text-xl font-bold">{{ $achievement->year }}</p>
                            </div>
                            <div
                                class="flex flex-col gap-1 rounded-xl bg-white dark:bg-gray-800 p-5 shadow-sm border border-[#e7ecf4] dark:border-gray-700 transition-all hover:shadow-md hover:border-primary/20 group">
                                <div class="flex items-center gap-3 mb-2">
                                    <div
                                        class="bg-green-50 text-secondary p-2 rounded-lg group-hover:bg-secondary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-[24px]">workspace_premium</span>
                                    </div>
                                    <p class="text-[#49699c] dark:text-gray-300 text-sm font-medium">Peringkat</p>
                                </div>
                                <p class="text-[#0d131c] dark:text-white text-xl font-bold text-secondary">
                                    {{ $achievement->rank }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col gap-1 rounded-xl bg-white dark:bg-gray-800 p-5 shadow-sm border border-[#e7ecf4] dark:border-gray-700 transition-all hover:shadow-md hover:border-primary/20 group">
                                <div class="flex items-center gap-3 mb-2">
                                    <div
                                        class="bg-blue-50 text-primary p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-[24px]">precision_manufacturing</span>
                                    </div>
                                    <p class="text-[#49699c] dark:text-gray-300 text-sm font-medium">Ekstrakurikuler</p>
                                </div>
                                <p class="text-[#0d131c] dark:text-white text-xl font-bold">
                                    {{ $achievement->extracurricular->name }}</p>
                            </div>
                        </div>
                        <!-- Main Content Split -->
                        <div class="flex flex-col lg:flex-row gap-8 mt-2">
                            <!-- Left Column: Content -->
                            <div class="flex-1 flex flex-col gap-8">
                                <!-- Tab Sections -->
                                <div class="flex flex-col gap-10">
                                    <!-- Deskripsi Section -->
                                    <section
                                        class="bg-white dark:bg-gray-800 rounded-2xl p-6 md:p-8 shadow-sm border border-[#e7ecf4] dark:border-gray-700"
                                        id="deskripsi">
                                        <h3 class="text-xl font-bold text-[#0d131c] dark:text-white mb-4">
                                            Deskripsi Lengkap
                                        </h3>
                                        <div
                                            class="prose prose-blue max-w-none text-[#49699c] dark:text-gray-300 leading-relaxed">
                                            <p>
                                                {{ $achievement->description }}
                                            </p>
                                        </div>
                                    </section>
                                    <!-- Siswa Section -->
                                    <section id="siswa">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-xl font-bold text-[#0d131c] dark:text-white">
                                                Siswa Terlibat (3)
                                            </h3>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                            <!-- Student Card 1 -->
                                            @foreach ($achievement->students as $student)
                                                <div
                                                    class="flex items-center gap-4 bg-white dark:bg-gray-800 p-4 rounded-xl border border-[#e7ecf4] dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                                                    <div class="relative">
                                                        <div class="size-14 rounded-full bg-cover bg-center ring-2 ring-gray-100"
                                                            data-alt="Student Portrait"
                                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFtJga7IeeG2Ubd-5d7ZMNXUqG9ysN8U9Af-E6Qcb15JK-Fdnp3PFbQNxhEQ44jvuEjD4qapfQ6xiN8Nlc_S0SDwFZJNygNhHRkM0Za7LdsNMgzJkArM_SxEHE2PUMH20xbezUpVpsQ4QDo2ibkbWLU4WEZGIPeVY0IECYkf6m9O6Lp5CE2CRdssOGvwxOw2IDjwT5jYeYQ39MCC5e0xzb_jtq5bZIs-5c8xdf3fLJTmnfux4ltyo_4GPqn-WtL81Tbbw_2hwp7LMo");'>
                                                        </div>
                                                    </div>
                                                    <div>p
                                                        <p class="text-[#0d131c] dark:text-white font-bold text-sm">
                                                            {{ $student->fullname }}
                                                        </p>
                                                        <p class="text-[#49699c] dark:text-gray-300 text-xs">
                                                            {{ $student->class }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </section>
                                    <!-- Pembina Section -->
                                    <section id="pembina">
                                        <h3 class="text-xl font-bold text-[#0d131c] dark:text-white mb-4">
                                            Pembina
                                        </h3>
                                        <div
                                            class="flex flex-col sm:flex-row gap-5 bg-white dark:bg-gray-800 p-6 rounded-2xl border border-[#e7ecf4] dark:border-gray-700 shadow-sm">
                                            <div class="size-20 min-w-[80px] rounded-full bg-cover bg-center ring-4 ring-blue-50"
                                                data-alt="Teacher Portrait"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKWlnSkH3ynufVQpUiDB18dZKqOYe2aKc-cm3ifZFRa8cH8gUjA2SCndGgA26AljDEJvchoqqYtbev8v0l1aUR33Q73_BcxUowEsbzhx8LECKvhauJa994AELbZow1-VbbGEKoc_BqA1Hn2edxB7_fdU3BCbWb2Zp2hvEaXGqC8WZFKtcTFZb6LFwjEoZKTl56cV1GUSAxlrBHsF9RVWD4Xp_iBDkXwKLIt082uzm--ZHWkB1jXBj0GIoWFzkrtBZFaGdUUBKTw8tO");'>
                                            </div>
                                            <div class="flex flex-col justify-center gap-1">
                                                <div class="flex items-center gap-2">
                                                    <h4 class="text-lg font-bold text-[#0d131c] dark:text-white">Bpk.
                                                        Handoko Suryo, S.Pd.T
                                                    </h4>
                                                    <span class="material-symbols-outlined text-secondary text-[18px]"
                                                        title="Verified Teacher">verified</span>
                                                </div>
                                                <p class="text-[#49699c] dark:text-gray-300 text-sm">Guru Produktif Teknik
                                                    Mekatronika</p>
                                                <div class="flex gap-2 mt-2">
                                                    <span
                                                        class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-xs px-2 py-1 rounded">NIP:
                                                        19800101 200501 1 003</span>
                                                </div>
                                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2 italic">"Kemenangan
                                                    adalah bonus dari
                                                    sebuah proses belajar yang sungguh-sungguh."</p>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Galeri Section -->
                                    <section id="galeri">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-xl font-bold text-[#0d131c] dark:text-white">
                                                Dokumentasi
                                            </h3>
                                        </div>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                            <div
                                                class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100 cursor-pointer">
                                                <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                                    data-alt="Robot maneuvering obstacle course"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDezB2Q_u5l3eifkOv0aEIGjjT0UZOZF95oO10GK7iFkg82L9kBC-bqwmfUh30ZVvtUpBBjpd2J8eJ_HVm0wmkSgZs5RNa-rB2xVH6okqkvtTWBwJpgmIyrLV7S2tpUS3OsEiX15BFCotINUO5yTvI7kJZFC-SsM1bPle7HdOrg7bbVVyfTtyYyhMJ76ZgeLMWUn5gXlJ1CXyOYXwMm0aXu0B4xgGbSfJVbrvYSuFtQL-s3B5NksN0Z05TmySJvbVhm97sGbu_zwNTL");'>
                                                </div>
                                            </div>
                                            <div
                                                class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100 cursor-pointer">
                                                <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                                    data-alt="Team working on laptop"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC0ncMB4hl7VOZ4DXAqLD-1NdT8YLmOk_HhapyU1NbBVNOO_RgoHSznQSOACiMpy3MSLlCTSQz0SSOuk1dWl6qtWHJr19eiojyKvADebgkq0UD2k-iYAZRrRdEZAidvn5UhN-28mfdhkextesq3AxaRfxvvvIDy7RbaDpLz44Bm84I2SUyKxvCOLPeWPhT88Vsust1X7FNS-N25Yb9zCm10djwp2qVdYdltiFBZwF3wQVxut5esvmcBVHZ47ehOH7oWQzvwNnd5FjyG");'>
                                                </div>
                                            </div>
                                            <div
                                                class="group relative aspect-square overflow-hidden rounded-xl bg-gray-100 cursor-pointer">
                                                <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                                    data-alt="Receiving medal on stage"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkTBbu1g-zjKusIsYx_6oVN4LJXB9_xQvjgYQLa_YBmPly6ArBlIh2akWPmBWFNCqnNhnCPKF7GP9eo96NnI7iNco0ASvfCYmFFzwyNxYmy7upntIgWCy0UmTii_A_-HA7_ua4rZ0N7WjR9g_gH1ys6hjMJUb1TTQQcjy_uBLbaXuFKRUK_FSZ5-GuiuqHSeffZCmhRlcADs9QmrmQArG52Yo_0dxcnRPsAKZ0J1TtdAMxS0yPy7t2Jjk67oeuVDcuKgZWnrQ_8ABN");'>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- Right Column: Sidebar -->
                            <div class="w-full lg:w-[340px] flex flex-col gap-6">
                                <!-- Share Card (Sticky) -->
                                <div class="sticky top-[90px] flex flex-col gap-4">
                                    <div
                                        class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-sm border border-[#e7ecf4] dark:border-gray-700">
                                        <h4 class="font-bold text-[#0d131c] dark:text-white mb-4 text-lg">Bagikan Prestasi
                                        </h4>
                                        <button
                                            class="w-full bg-primary hover:bg-blue-600 text-white font-medium rounded-lg px-4 py-3 flex items-center justify-center gap-2 mb-3 shadow-lg shadow-blue-500/30 transition-all hover:-translate-y-1 hover:shadow-blue-500/50 focus:ring-4 focus:ring-blue-500/30">
                                            <span class="material-symbols-outlined text-[20px]">share</span>
                                            Bagikan Sekarang
                                        </button>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 text-white shadow-lg relative overflow-hidden">
                                        <div class="absolute -right-4 -top-4 text-white/10">
                                            <span class="material-symbols-outlined text-[100px]">emoji_events</span>
                                        </div>
                                        <h4 class="font-bold mb-2 relative z-10">Ingin berprestasi?</h4>
                                        <p class="text-white/80 text-sm mb-4 relative z-10">Gabung dengan ekstrakurikuler
                                            Robotik dan kembangkan bakatmu.</p>
                                        <a href="#">

                                            <button
                                                class="bg-white text-primary text-sm font-bold py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors relative z-10">
                                                Lihat Profil Robotik
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related Achievements Section -->
                        <div class="mt-8 mb-10 pt-8 border-t border-[#e7ecf4] dark:border-gray-600">
                            <h2 class="text-2xl font-bold text-[#0d131c] dark:text-white mb-6">Prestasi Terkait</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Related Card 1 -->
                                <div
                                    class="group bg-white dark:bg-gray-800 rounded-xl border border-[#e7ecf4] dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                                    <div class="h-48 bg-cover bg-center" data-alt="Student coding on laptop"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9UmXG7YnxO_fSqhr08npKcgU9xTbFrzcie2RX0b04m_8J12WLlGqzk9KuWKU_MPsf7QH150nllM45837DDitF23nLVGl7Z2KA3AYj_EUqqB4d5d3aL7wYP32XbJ4QfIxoAY6N5SkzQpE74crfR_GUMkSyPs-TWrcZz0FLx6-XxgCj6EHAYKvwMhQZV93pKF1lcBEIxcmtrWrrYP2e1FJQfVjA6vb7gcmSI-pIh1fnSI5hkOCn-DJ5M59sYcfAEKs52stC8df0vfNK");'>
                                    </div>
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-2">
                                            <span
                                                class="text-xs font-bold text-[#49699c] dark:text-gray-300 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">Provinsi</span>
                                            <span class="text-xs text-[#94a3b8] dark:text-gray-400">Okt 2023</span>
                                        </div>
                                        <h3
                                            class="font-bold text-lg text-[#0d131c] dark:text-white mb-2 group-hover:text-primary transition-colors">
                                            Juara 2 LKS Web Design</h3>
                                        <p class="text-sm text-[#49699c] dark:text-gray-300 line-clamp-2 mb-4">Meraih
                                            medali perak dalam Lomba
                                            Kompetensi Siswa tingkat Provinsi bidang Web Technologies.</p>
                                        <div class="flex items-center gap-2 text-sm text-primary font-medium">
                                            Lihat Detail <span
                                                class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Related Card 2 -->
                                <div
                                    class="group bg-white dark:bg-gray-800 rounded-xl border border-[#e7ecf4] dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                                    <div class="h-48 bg-cover bg-center" data-alt="Drone flying in competition"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtbLeFJ7dsgKwvvP8zMkoyksyFHJgrADTfCaZcGYfP83E_H-OX543u_yT4HkpBaoB9GZSJhk0tJ_90jBVJKwRtlnU-o6JeZGrE4fbQGCgDAmcsvqoUTlnsERy6T6V_VHm7N7c5Anq3BArQ_tn2TgbG4yYFhxlb686uDxafxzYQSol3sLGK6H8XCf5dxubIWrEvC0iJdcTUqytElia7uSTUFTyntmSCUw86pYQ52aPZRLqBGSTA5YOsIrGb9Ny4808skuvyk0cwtkt8");'>
                                    </div>
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-2">
                                            <span
                                                class="text-xs font-bold text-[#49699c] dark:text-gray-300 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">Nasional</span>
                                            <span class="text-xs text-[#94a3b8] dark:text-gray-400">Sep 2023</span>
                                        </div>
                                        <h3
                                            class="font-bold text-lg text-[#0d131c] dark:text-white mb-2 group-hover:text-primary transition-colors">
                                            Finalis Drone Racing</h3>
                                        <p class="text-sm text-[#49699c] dark:text-gray-300 line-clamp-2 mb-4">Masuk dalam
                                            10 besar kompetisi
                                            balap drone tingkat nasional kategori pelajar.</p>
                                        <div class="flex items-center gap-2 text-sm text-primary font-medium">
                                            Lihat Detail <span
                                                class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Related Card 3 -->
                                <div
                                    class="group bg-white dark:bg-gray-800 rounded-xl border border-[#e7ecf4] dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                                    <div class="h-48 bg-cover bg-center" data-alt="Award ceremony group photo"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5uyfEfqx81n9e1XNUnhsCZ5AuLEMzoJE2zBYyWqPe-3ErKWjTnYm4JfHD8uQCS0ImrnibDj5clqoQCVet7asQUejFXbbBBOTLYERDWpSb-Hsqz83qGQPqz9r7uPkSa-g-zZFFxF_gQ7TsnZDMBnRc_hM9S6RV3XwYsVUYb47t5ZvrdQ-RzIFqGvhA_1-glnOkr5bc1aorhPwce7QUlnGyawXIXg7qNtI3PhEtfyYtmjLCiftR8vxvYMQeGY08jIDgSN70swM0CtlY");'>
                                    </div>
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-2">
                                            <span
                                                class="text-xs font-bold text-[#49699c] dark:text-gray-300 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">Kabupaten</span>
                                            <span class="text-xs text-[#94a3b8] dark:text-gray-400">Agu 2023</span>
                                        </div>
                                        <h3
                                            class="font-bold text-lg text-[#0d131c] dark:text-white mb-2 group-hover:text-primary transition-colors">
                                            Juara 1 Karya Ilmiah</h3>
                                        <p class="text-sm text-[#49699c] dark:text-gray-300 line-clamp-2 mb-4">Inovasi
                                            teknologi tepat guna
                                            untuk pertanian berbasis IoT.</p>
                                        <div class="flex items-center gap-2 text-sm text-primary font-medium">
                                            Lihat Detail <span
                                                class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-footer />
    </body>
@endsection
