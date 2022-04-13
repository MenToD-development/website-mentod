<button class="group flex align-center flex-nowrap py-2 px-3 rounded duration-200
               {{ $colored ?? 'bg-white' }}
               hover:drop-shadow-md hover:-translate-y-1
               active:bg-secondary">

    @if ($icon)
        @include($icon, [
            'class' => 'inline-block h-6 w-6 stroke-secondary duration-200
                        group-active:stroke-primary'
        ])
    @endif

    <span class="hidden lg:inline-block font-sans text-primary {{ $icon ? 'ml-2' : '' }}">
        {{ $slot }}
    </span>

</button>
