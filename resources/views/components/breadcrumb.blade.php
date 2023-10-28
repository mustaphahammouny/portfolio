@props(['title'])

<div class="row row-cols-1 py-5 appear-animation" data-appear-animation="fadeInRightShorter"
    data-appear-animation-delay="500">
    <div class="col align-self-center p-static text-center">
        <h1 class="font-weight-bold text-8 mb-0">@lang($title)</h1>
    </div>
    <div class="col align-self-center">
        <ul class="breadcrumb d-block text-center">
            <li><a href="{{ route('home') }}">@lang('Home')</a></li>
            <li class="active">@lang($title)</li>
        </ul>
    </div>
</div>
