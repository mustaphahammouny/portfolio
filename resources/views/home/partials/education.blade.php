<section id="education">
    <div class="container-md container-xl-custom py-4">
        <x-title title="Education" />
        <div class="row row-cols-1">
            @foreach ($resume['education'] as $education)
                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="card card-border card-border-bottom">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 text-primary font-weight-bold">
                                @lang($education['level']) - @lang($education['option'])
                            </h4>
                            <p class="font-weight-semibold mb-0">
                                @lang($education['school'])
                            </p>
                            <p class="font-weight-semibold">
                                <i class="far fa-calendar-alt me-1"></i>
                                @lang($education['from']) - @lang($education['to'])
                            </p>
                            <p class="card-text">
                                @lang($education['description'])
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>