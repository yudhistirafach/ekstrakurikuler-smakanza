@props(['extracurriculars'])

<div id="grid-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse ($extracurriculars as $extracurricular)
        <x-card-ekstra-page
            :title="$extracurricular->name"
            :slug="$extracurricular->slug"
            :category="optional($extracurricular->category)->name ?? 'Tanpa Kategori'"
            :date="$extracurricular->day . ', ' . $extracurricular->start_time"
            :location="$extracurricular->location"
            :quota="$extracurricular->quota"
            :image_url="$extracurricular->image_url" />
    @empty
        <div class="col-span-full text-center py-12">
            <span class="material-symbols-outlined text-6xl text-gray-300 dark:text-gray-700 mb-4">search_off</span>
            <p class="text-[#49699c] dark:text-gray-400 text-lg">Tidak ada ekstrakurikuler ditemukan</p>
        </div>
    @endforelse
</div>
