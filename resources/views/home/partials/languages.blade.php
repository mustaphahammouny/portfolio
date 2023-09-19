<section id="languages" class="with-bg">
    <div class="container-md container-xl-custom py-4">
        <x-title :title="__('Languages')" />
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            @foreach ($resume['languages'] as $language)
                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="card card-border card-border-bottom">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 text-primary font-weight-bold">
                                @lang($language['name'])
                            </h4>
                            <p class="font-weight-semibold mb-0">@lang($language['level'])</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
