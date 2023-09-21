<x-layouts::app>
    <x-slot name="title">
        @lang('Blogs')
    </x-slot>

    <x-particles>
        <div class="row pt-5">
            <div class="col align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-dark">404 - Page Not Found</h1>
            </div>
            <div class="col align-self-center order-1">
                <ul class="breadcrumb d-block text-center">
                    <li><a href="#">Home</a></li>
                    <li class="active">Pages</li>
                </ul>
            </div>
        </div>
        {{-- <div class="col-lg-7 pt-5">
            <h2 class="font-weight-bold text-10 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="500">
                <span class="text-4">
                    @lang('My Blogs')
                </span>
            </h2>
        </div> --}}
    </x-particles>
</x-layouts::app>
