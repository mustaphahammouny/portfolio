<x-layouts::app>
    <x-slot name="title">
        @lang('Blogs')
    </x-slot>

    <x-particles>
        <x-particles>
            <x-breadcrumb :title="__('My Blogs')" />
        </x-particles>
    </x-particles>
</x-layouts::app>
