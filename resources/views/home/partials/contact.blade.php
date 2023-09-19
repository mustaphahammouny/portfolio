<section id="contact">
    <div class="container-md container-xl-custom py-4">
        <x-title :title="__('Contact')" />
        <div class="featured-boxes featured-boxes-flat">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="featured-box featured-box-primary featured-box-effect-2">
                        <div class="box-content box-content-border-bottom">
                            <i class="icon-featured fas fa-phone-alt"></i>
                            <h4 class="font-weight-semi-bold mt-3">@lang('Phone')</h4>
                            <a href="tel:${{ $resume['info']['phone'] }}" target="_blank" class="text-primary text-nowrap mb-0">
                                {{ $resume['info']['phone'] }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="featured-box featured-box-primary featured-box-effect-2">
                        <div class="box-content box-content-border-bottom">
                            <i class="icon-featured far fa-envelope"></i>
                            <h4 class="font-weight-semi-bold mt-3">@lang('Email')</h4>
                            <a href="mailto:${{ $resume['info']['email'] }}" target="_blank" class="text-primary text-nowrap mb-0">
                                {{ $resume['info']['email'] }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="featured-box featured-box-primary featured-box-effect-2">
                        <div class="box-content box-content-border-bottom">
                            <i class="icon-featured fab fa-linkedin"></i>
                            <h4 class="font-weight-semi-bold mt-3">
                                @lang('LinkedIn')
                            </h4>
                            <a href="https://linkedin.com/in/mustapha-hammouny-a619b1147" target="_blank"
                                class="text-primary text-nowrap mb-0">
                                {{ $resume['info']['name'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>