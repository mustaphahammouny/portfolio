<x-layouts::app>
    <x-slot name="title">
        @lang('Home')
    </x-slot>

    <x-particles>
        <div class="col-lg-7 pt-5">
            <h2 class="font-weight-bold text-10 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="500">
                <span class="text-4">
                    @lang("Hello, I'm") {{ $resume['info']['name'] }}.
                    @lang("I'm a Full Stack developer from")
                    @lang($resume['info']['country']).
                </span>
            </h2>
            <a class="btn btn-primary appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="500" href="{{ route('resume.download') }}">
                <i class="fas fa-download me-1"></i>
                @lang('Download my resume')
            </a>
        </div>
    </x-particles>

    @include('home.partials.nav')

    @include('home.partials.experiences')

    @include('home.partials.education')

    @include('home.partials.skills')

    @include('home.partials.personality')

    @include('home.partials.languages')

    @include('home.partials.contact')
</x-layouts::app>
