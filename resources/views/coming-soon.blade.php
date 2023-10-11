<x-layouts::app>
    <x-slot name="title">
        @lang('Projects')
    </x-slot>

    <x-particles>
        <x-breadcrumb :title="__('My projects')" />
    </x-particles>

    <section id="projects" class="with-bg">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <x-title :title="__('Project page is under development')" />

                    <img class="img-fluid" style="max-width: 500px;" src="{{ Vite::image('under-development.png') }}" alt="Under development">
                </div>
            </div>
        </div>
    </section>
</x-layouts::app>
