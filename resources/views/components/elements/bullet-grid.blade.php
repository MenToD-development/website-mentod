<div class="w-2/3 float-right grid grid-cols-{{ $items }} pr-8">
    @for ($i = 0; $i < ($items * $rows); $i++)
        <div class="relative w-[54px] h-[54px]">
            <figure class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"/>
        </div>
    @endfor
</div>
