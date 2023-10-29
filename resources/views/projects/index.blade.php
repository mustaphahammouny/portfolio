<x-layouts::app>
    <x-slot name="title">
        @lang('Projects')
    </x-slot>

    <x-particles>
        <x-breadcrumb title="My projects" />
    </x-particles>

    <section id="projects" class="with-bg">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts">
                        <div class="row row-cols-1 row-cols-md-2">
                            @foreach ($projects as $project)
                                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="200">
                                    <div class="card card-border card-border-bottom">
                                        <img class="card-img-top"
                                            src="{{ Vite::image('projects/' . $project['image']) }}"
                                            alt="{{ $project['name'] }} Project">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1 text-4 text-primary font-weight-bold">
                                                @lang($project['name'])</h4>
                                            <p class="card-text mb-2 pb-1">@lang($project['description'])</p>
                                            <p class="font-weight-semibold mb-0">
                                                @lang('Technologies')
                                            </p>
                                            @foreach ($project['technologies'] as $technology)
                                                <span class="badge badge-primary me-1">
                                                    {{ $technology }}
                                                </span>
                                            @endforeach
                                            <span class="d-block mt-2">
                                                <a href="{{ $project['to'] }}" target="_blank"
                                                    class="read-more text-color-primary font-weight-semibold text-2">
                                                    @lang('Live Preview')
                                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts::app>
