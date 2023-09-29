<x-layouts::app>
    <x-slot name="title">
        @lang('Home')
    </x-slot>

    @include('home.partials.introduction')

    @include('home.partials.nav')

    @include('home.partials.experiences')

    @include('home.partials.education')

    @include('home.partials.skills')

    @include('home.partials.personality')

    @include('home.partials.languages')
</x-layouts::app>
