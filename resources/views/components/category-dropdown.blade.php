<x-dropdown>
    <x-slot name="trigger">
        <button
            class="inline-flex w-full flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-left text-sm font-semibold lg:w-32">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="pointer-events-none absolute" style="right: 12px"></x-icon>
        </button>
    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}"
            :active="isset($currentCategory) && $currentCategory->is($category)"
            >{{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
