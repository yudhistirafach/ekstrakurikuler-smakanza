@props([
    'type' => 'success', // success | error | info | warning
    'title' => '',
    'message' => '',
    'show' => false,
])

@php
    $types = [
        'success' => [
            'bg' => 'bg-green-100 dark:bg-green-900/30',
            'text' => 'text-green-600',
            'icon' => 'check_circle',
            'bar' => 'bg-green-500',
        ],
        'error' => [
            'bg' => 'bg-red-100 dark:bg-red-900/30',
            'text' => 'text-red-600',
            'icon' => 'error',
            'bar' => 'bg-red-500',
        ],
        'info' => [
            'bg' => 'bg-blue-100 dark:bg-blue-900/30',
            'text' => 'text-blue-600',
            'icon' => 'info',
            'bar' => 'bg-blue-500',
        ],
    ];

    $config = $types[$type];
@endphp

@if($show)
<div id="alert-toast" class="fixed top-6 right-6 z-[60] toast-animate max-w-sm w-full bg-white dark:bg-slate-800 shadow-xl rounded-lg overflow-hidden border border-slate-100 dark:border-slate-700">
    <div class="p-4 flex gap-3 items-start">
        <div class="shrink-0">
            <div class="h-8 w-8 rounded-full {{ $config['bg'] }} flex items-center justify-center {{ $config['text'] }}">
                <span class="material-symbols-outlined text-[20px]">
                    {{ $config['icon'] }}
                </span>
            </div>
        </div>

        <div class="flex-1 pt-0.5">
            <h4 class="text-sm font-bold text-slate-900 dark:text-white">
                {{ $title }}
            </h4>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">
                {{ $message }}
            </p>
        </div>

        <button onclick="closeAlert()" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
            <span class="material-symbols-outlined text-[18px]">close</span>
        </button>
    </div>

    <!-- Progress Bar -->
    <div class="h-1 w-full bg-slate-100 dark:bg-slate-700">
        <div class="h-full {{ $config['bar'] }} animate-progress w-full"></div>
    </div>
</div>

<script>
    function closeAlert() {
        document.getElementById('alert-toast').style.display = 'none';
    }

    // Auto close after 5 seconds
    setTimeout(() => {
        closeAlert();
    }, 3000);
</script>
@endif
