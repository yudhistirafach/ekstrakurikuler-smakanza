<section class="w-full bg-background-light dark:bg-background-dark z-0 py-16" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos="fade-up">
    <div class="layout-container flex justify-center px-4 md:px-10">
        <div class="w-full max-w-7xl overflow-hidden rounded-3xl bg-primary text-white">
            <div class="flex flex-col items-center justify-between gap-8 p-10 md:flex-row md:p-16">
                <div class="flex flex-col gap-4 text-center md:text-left">
                    <h2 class="text-3xl font-black tracking-tight md:text-4xl">Siap Bergabung?</h2>
                    <p class="max-w-md text-blue-100">Jangan lewatkan kesempatan untuk mengembangkan
                        dirimu. Daftar sekarang sebelum kuota penuh!</p>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('daftar-ekstra') }}">
                        <x-button variant="secondary" size="xl" class="gap-2">
                            Daftar Sekarang
                        </x-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
