@props(['title'])

<section class="border-0 p-relative">
    <div class="particles-wrapper">
        <div id="tsparticles"></div>
    </div>
    <div class="container container-xl-custom p-relative">
        {{ $slot }}
    </div>
</section>
