@props(['title'])

<section class="border-0 p-relative">
    <div class="particles-wrapper z-index-1">
        <div id="tsparticles"></div>
    </div>
    <div class="container container-xl-custom pb-4">
        {{-- <div class="row"> --}}
            {{ $slot }}
        {{-- </div> --}}
    </div>
</section>
