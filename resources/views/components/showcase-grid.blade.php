@props(['extracurriculars'])

<section class="w-full max-w-[1280px] px-4 pb-20 md:px-10" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos="fade-left">
    @foreach($extracurriculars->chunk(4) as $chunk)
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($chunk as $extracurricular)
                <x-card-ekstra
                    :is_mandatory="$extracurricular->is_mandatory"
                    :title="$extracurricular->name"
                    :slug="$extracurricular->slug"
                    :category="$extracurricular->category->name"
                    :description="$extracurricular->description"
                    :image_url="$extracurricular->image_url"
                    :icon="$extracurricular->category->icon"
                    />
            @endforeach
        </div>
    @endforeach
</section>