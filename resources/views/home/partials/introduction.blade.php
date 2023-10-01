<x-particles>
    <div class="row">
        <div class="col-lg-7 my-auto appear-animation" data-appear-animation="fadeInRightShorter"
            data-appear-animation-delay="500">
            <h2 class="font-weight-bold text-10 line-height-2">
                <span class="text-4">
                    @lang("Hello, I'm") {{ $resume['info']['name'] }}.
                    @lang("I'm a")
                    @lang($resume['info']['job'])
                    @lang('from')
                    @lang($resume['info']['country']).
                </span>
            </h2>
            <a class="btn btn-primary" href="{{ route('resume.download') }}" target="_blank">
                <i class="fas fa-download me-1"></i>
                @lang('Download my resume')
            </a>
        </div>
        <div class="col-lg-5 appear-animation" data-appear-animation="fadeInLeftShorter">
            <img class="img-fluid" src="{{ Vite::image('img-web.png') }}" alt="Image">
        </div>
    </div>
</x-particles>
