<button class="group flex align-center flex-nowrap py-2 px-3 rounded duration-200
               {{ $color ? `bg-{$color}` : 'bg-white' }}
    hover:drop-shadow-md hover:-translate-y-1
    active:bg-secondary">

    @if ($icon)
        @if ($color === 'transparent')
            @include($icon, [
                'class' => 'inline-block h-6 w-6 stroke-white duration-200
                            group-active:stroke-primary'
            ])
        @else
            @include($icon, [
                'class' => 'inline-block h-6 w-6 stroke-secondary duration-200
                            group-active:stroke-primary'
            ])
        @endif
    @endif

    @if (!$textShowMobile)
        <span class="hidden lg:inline-block font-sans text-primary {{ $icon ? 'ml-2' : '' }}">
            {{ $slot }}
        </span>
    @else
        <span class="inline-block font-sans text-primary {{ $icon ? 'ml-2' : '' }}">
            {{ $slot }}
        </span>
    @endif

</button>
