<section id="experiences" class="with-bg">
    <div class="container-md container-xl-custom py-4">
        <x-title :title="__('Experiences')" />
        <div class="row mt-4 mt-md-0">
            <div class="col">
                <section class="timeline pb-0 pb-sm-5" id="timeline">
                    <div class="timeline-body">
                        @foreach ($resume['experiences'] as $experience)
                            <article class="timeline-box {{ $loop->index % 2 == 0 ? 'left' : 'right' }}">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-content">
                                                <h2
                                                    class="font-weight-semibold text-5 text-primary line-height-4 mt-2 mb-2">
                                                    @lang($experience['job'])
                                                </h2>
                                                <p class="font-weight-semibold mb-0">
                                                    @lang($experience['company'])
                                                </p>
                                                <p class="font-weight-semibold">
                                                    <i class="far fa-calendar-alt me-1"></i>
                                                    @lang($experience['from']) - @lang($experience['to'])
                                                </p>
                                                <p>@lang($experience['description'])</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-weight-semibold mb-0">
                                                @lang('Technologies')
                                            </p>
                                            @foreach ($experience['technologies'] as $technology)
                                                <span class="badge badge-primary me-1">
                                                    {{ $technology }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
