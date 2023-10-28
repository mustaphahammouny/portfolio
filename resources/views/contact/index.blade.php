<x-layouts::app>
    <x-slot name="title">
        @lang('Contact')
    </x-slot>

    <x-particles>
        <x-breadcrumb title="Contact" />
    </x-particles>

    <section id="form-contact" class="with-bg">
        <div class="container-md container-xl-custom py-4">
            <x-title title="Send me a message" />
            <div class="row">
                <div class="col">
                    <x-alert-session />

                    <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col">
                                <x-input name="full_name" label="Full Name" />
                            </div>
                            <div class="col">
                                <x-input name="email" label="Email" type="email" />
                            </div>
                        </div>

                        <div class="row row-cols-1">
                            <div class="col">
                                <x-input name="subject" label="Subject" />
                            </div>
                            <div class="col">
                                <x-textarea name="message" label="Message" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-primary btn-modern">
                                    <i class="far fa-paper-plane me-1"></i>
                                    @lang('Send')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container-md container-xl-custom py-4">
            <x-title title="Contact Info" />
            <div class="featured-boxes featured-boxes-flat">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="featured-box featured-box-primary featured-box-effect-2">
                            <div class="box-content box-content-border-bottom">
                                <i class="icon-featured fas fa-phone-alt"></i>
                                <h4 class="font-weight-semi-bold mt-3">@lang('Phone')</h4>
                                <a href="tel:${{ $info['phone'] }}" target="_blank"
                                    class="text-primary text-nowrap mb-0">
                                    {{ $info['phone'] }}
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
                                <a href="mailto:${{ $info['email'] }}" target="_blank"
                                    class="text-primary text-nowrap mb-0">
                                    {{ $info['email'] }}
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
                                    {{ $info['name'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts::app>
