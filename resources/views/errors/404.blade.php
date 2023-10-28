<x-layouts::app>
    <x-slot name="title">
        @lang('Page not found')
    </x-slot>

    <x-particles>
        <x-breadcrumb title="Page not found" />
    </x-particles>

    <section id="error" class="with-bg">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <x-title title="We're sorry, but the page you were looking for doesn't exist." />

                    <img class="img-fluid" style="max-width: 500px;" src="{{ Vite::image('404.svg') }}" alt="404">
                </div>
            </div>
        </div>
    </section>
</x-layouts::app>
