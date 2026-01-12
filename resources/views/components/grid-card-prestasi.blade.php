@props(['achievements'])

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($achievements as $achievement)
        <x-card-prestasi
            :title="$achievement->title"
            image="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            :level="ucwords($achievement->level)"
            :club="$achievement->extracurricular->name"
            :winner="$achievement->students->first()?->fullname"
            :class="$achievement->students->first()?->class"
            :date="\Carbon\Carbon::parse($achievement->event_date)->isoFormat('dddd, D MMMM Y')"
            :slug="$achievement->slug"
        />
    @endforeach
</div>
