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
            data-appear-animation-delay="500" href="{{ route('resume.download') }}" target="_blank">
            <i class="fas fa-download me-1"></i>
            @lang('Download my resume')
        </a>
    </div>
</x-particles>
