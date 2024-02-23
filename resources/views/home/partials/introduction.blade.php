<x-particles>
    <div class="row text-center text-lg-start">
        <div class="col-lg-7 my-lg-auto mt-4 appear-animation" data-appear-animation="fadeInRightShorter"
            data-appear-animation-delay="500">
            <h2 class="font-weight-bold text-10 line-height-2">
                <span>
                    @lang("Hello, I'm") {{ $resume['info']['name'] }}.
                </span>
                <br />
                <span>
                    @lang($resume['info']['description'])
                </span>
            </h2>
            <a class="btn btn-primary" href="{{ route('resume.download') }}" target="_blank">
                <i class="fas fa-download me-1"></i>
                @lang('Download my resume')
            </a>
        </div>
        <div class="col-lg-5 appear-animation" data-appear-animation="fadeInLeftShorter">
            <img class="img-fluid img-height-500" src="{{ Vite::image('img-web.png') }}" alt="{{ $resume['info']['name'] }}">
        </div>
    </div>
</x-particles>
