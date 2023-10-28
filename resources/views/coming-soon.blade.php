<x-layouts::app>
    <x-slot name="title">
        @lang('Coming soon')
    </x-slot>

    <x-particles>
        <x-breadcrumb title="Coming soon" />
    </x-particles>

    <section id="projects" class="with-bg">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <x-title title="This page is under development." />

                    <img class="img-fluid" style="max-width: 500px;" src="{{ Vite::image('under-development.png') }}" alt="Under development">
                </div>
            </div>
        </div>
    </section>
</x-layouts::app>
