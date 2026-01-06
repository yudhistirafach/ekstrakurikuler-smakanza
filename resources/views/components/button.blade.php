@props([
    // Tipe tombol
    'variant' => 'primary', // 'primary', 'secondary', 'outline', 'ghost', 'link', 'danger'
    
    // Ukuran
    'size' => 'md', // 'sm', 'md', 'lg', 'xl'
    
    // Status
    'disabled' => false,
    'loading' => false,
    
    // Icon (opsional)
    'icon' => null,         // string: 'arrow_forward', 'play_circle', dll
    'iconPosition' => 'left', // 'left', 'right'
    
    // Custom class (untuk override khusus)
    'class' => '',
    
    // Atribut HTML
    'type' => 'button',
])

@php
    // Mapping ukuran
    $sizeClasses = [
        'sm' => 'h-8 px-3 text-xs',
        'md' => 'h-10 px-5 text-sm',
        'lg' => 'h-12 px-6 text-base',
        'xl' => 'h-14 px-8 text-lg',
    ][$size] ?? 'h-10 px-5 text-sm';

    // Base classes
    $baseClasses = "inline-flex items-center justify-center font-bold rounded-xl transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60";

    // Variant classes
    $variantClasses = match($variant) {
        'primary' => 'bg-primary text-white hover:bg-[#2563eb] focus:ring-primary/30 shadow-lg shadow-primary/20 hover:scale-[1.02]',
        'secondary' => 'bg-secondary text-white hover:bg-emerald-600 focus:ring-secondary/30 shadow-lg shadow-secondary/20',
        'outline' => 'border border-[#e7ecf4] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#0d131c] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 focus:ring-gray-400/30',
        'ghost' => 'bg-transparent text-[#0d131c] dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 focus:ring-gray-400/30',
        'link' => 'bg-transparent px-1 text-primary hover:text-blue-700 focus:ring-primary/30 underline-offset-4 hover:underline',
        'danger' => 'bg-red-500 text-white hover:bg-red-600 focus:ring-red-500/30 shadow-lg shadow-red-500/20',
        default => 'bg-primary text-white hover:bg-[#2563eb] focus:ring-primary/30 shadow-lg shadow-primary/20 hover:scale-[1.02]',
    };

    // Loading state
    if ($loading) {
        $variantClasses .= ' cursor-wait';
    }

    // Gabung semua class
    $classes = implode(' ', [
        $baseClasses,
        $sizeClasses,
        $variantClasses,
        $disabled ? 'opacity-60 cursor-not-allowed' : '',
        $class,
    ]);
@endphp

<button
    {{ $attributes->merge([
        'type' => $type,
        'disabled' => $disabled || $loading,
        'class' => $classes,
    ]) }}
>
    @if ($loading)
        <span class="material-symbols-outlined animate-spin text-base">progress_activity</span>
        <span class="sr-only">Loading...</span>
    @else
        @if ($icon && $iconPosition === 'left')
            <span class="material-symbols-outlined text-base">{{ $icon }}</span>
        @endif

        @if ($slot->isNotEmpty())
            <span>{{ $slot }}</span>
        @endif

        @if ($icon && $iconPosition === 'right')
            <span class="material-symbols-outlined text-base">{{ $icon }}</span>
        @endif
    @endif
</button>