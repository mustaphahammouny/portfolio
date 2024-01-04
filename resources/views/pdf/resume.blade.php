<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $resume['info']['name'] }}</title>

    @php
        // $primary = '#044b20';
        $primary = '#0088CC';
    @endphp

    <style>
        @page {
            margin: 0 1rem;
        }

        body {
            font-family: "Poppins", Arial, sans-serif;
            font-size: 0.8rem;
            font-weight: 400;
        }

        .mt-0 {
            margin-top: 0;
        }

        .mt-1 {
            margin-top: 0.5rem;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .mb-1 {
            margin-bottom: 0.5rem;
        }

        .ms-1 {
            margin-left: 0;
        }

        .me-1 {
            margin-right: 0;
        }

        .my-0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .pt-2 {
            padding-top: 1rem;
        }

        .pb-2 {
            padding-bottom: 1rem;
        }

        .pe-2 {
            padding-right: 1rem;
        }

        .px-2 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-1 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .py-2 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .w-30 {
            width: 30%;
        }

        .w-50 {
            width: 50%;
        }

        .w-70 {
            width: 70%;
        }

        .w-100 {
            width: 100%;
        }

        .h-100 {
            height: 100%;
        }

        .bg-primary {
            background-color: {{ $primary }};
        }

        .text-center {
            text-align: center;
        }

        .align-middle {
            vertical-align: middle;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-white {
            color: white;
        }

        .text-muted {
            color: #6c757d;
        }

        .text-primary {
            color: {{ $primary }};
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .align-top {
            vertical-align: top;
        }

        .fw-bold {
            font-weight: 700;
        }

        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            /* white-space: nowrap; */
            vertical-align: baseline;
            border-radius: 0.375rem;
            margin-bottom: 0.5rem;
        }

        .bb-1 {
            padding-bottom: 0.5rem;
            border-bottom: 0.12rem solid {{ $primary }};
        }

        .table-timeline {
            padding-left: 1rem;
            border-left: 0.2rem solid {{ $primary }};
        }

        .table-timeline .timeline-item {
            position: relative;
        }

        .timeline-item::before {
            content: "";
            display: inline-block;
            position: absolute;
            left: 10px;
            /* left: 238px; */
            /* top: -2px; */
            width: 12px;
            height: 12px;
            background: white;
            border-radius: 50%;
            border: 4px solid {{ $primary }};
        }

        .progress {
            display: flex;
            border-radius: 5px;
            height: 10px;
            background: #dbdbdb;
            overflow: visible;
        }

        .progress-bar {
            box-shadow: none;
            position: relative;
            border-radius: 5px;
            height: 10px;
            overflow: visible;
            background-color: {{ $primary }};
        }
        
        .icon::before {
            display: inline-block;
            content: "";
            width: 20px;
            height: 20px;
            background-size: cover;
            vertical-align: middle; 
            margin-right: 5px;
        }

        .icon-mark::before {
            background-image: url({{ resource_path('images/icons/mark.png') }});
        }

        .icon-phone::before {
            background-image: url({{ resource_path('images/icons/phone.png') }});
        }

        .icon-enveloppe::before {
            background-image: url({{ resource_path('images/icons/enveloppe.png') }});
        }

        .circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            background-color: #f0f0f0;
        }

        .circle img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <table class="w-100">
        <tr>
            <td class="w-70 align-top pe-2">
                <div id="experiences">
                    <h2 class="text-primary bb-1">@lang('Experiences')</h2>
                    <table class="w-100 table-timeline">
                        <tbody>
                            @foreach ($resume['experiences'] as $experience)
                                <tr class="timeline-item">
                                    <td class="w-100">
                                        <h3 class="my-0">
                                            @lang($experience['job'])
                                        </h3>
                                    </td>
                                    <td class="text-muted text-end text-nowrap">
                                        @lang($experience['from']) - @lang($experience['to'])
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-muted">
                                        @lang($experience['company'])
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="py-1">
                                        @lang($experience['description'])
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" @if (!$loop->last) class="pb-2" @endif>
                                        <h5 class="fw-bold mt-0 mb-1">@lang('Technologies')</h5>
                                        @foreach ($experience['technologies'] as $technology)
                                            <span class="badge bg-primary">
                                                {{ $technology }}
                                            </span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div id="education">
                    <h2 class="text-primary bb-1">@lang('Education')</h2>
                    <table class="w-100 table-timeline">
                        <tbody>
                            @foreach ($resume['education'] as $education)
                                <tr class="timeline-item">
                                    <td class="w-100">
                                        <h3 class="my-0">
                                            @lang($education['level']) - @lang($education['option'])
                                        </h3>
                                    </td>
                                    <td class="text-muted text-end text-nowrap">
                                        @lang($education['from']) - @lang($education['to'])
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-muted">
                                        <p class="mt-1">@lang($education['school'])</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </td>
            <td class="w-30 align-top">
                <div id="info" class="pt-2 text-center">
                    <div class="circle mx-auto">
                        <img src={{ resource_path('images/img-resume.png') }} />
                    </div>
                    <h2 class="text-primary bb-1">{{ $resume['info']['name'] }}</h2>
                    <h3 class="mb-0 text-muted">@lang($resume['info']['job'])</h3>
                </div>

                <div id="contact">
                    <div class="px2">
                        <h2 class="text-primary bb-1">@lang('Contact')</h2>
                        <p class="mt-0 mb-1">
                            <i class="icon icon-enveloppe"></i>
                            <span class="text-muted align-middle">mustapha.hammouny@gmail.com</span>
                        </p>
                        <p class="mt-0 mb-1">
                            <i class="icon icon-phone"></i>
                            <span class="text-muted align-middle">{{ $resume['info']['phone'] }}</span>
                        </p>
                        <p class="mt-0 mb-1">
                            <i class="icon icon-mark"></i>
                            <span class="text-muted align-middle">
                                {{ \App\Constants\Resume::fullAddress() }}
                            </span>
                        </p>
                    </div>
                </div>

                <div id="skills">
                    <h2 class="text-primary bb-1">@lang('Skills')</h2>
                    <div class="px-2">
                        @foreach ($resume['skills'] as $skill)
                            <span class="badge bg-primary">
                                {{ $skill['name'] }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div id="personality">
                    <h2 class="text-primary bb-1">@lang('Personality')</h2>
                    <div class="px-2">
                        @foreach ($resume['personality'] as $personality)
                            <span class="fw-bold">@lang($personality['name'])</span>
                            <div class="progress mb-1">
                                <div class="progress-bar" style="width: {{ $personality['level'] }}%;">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="languages">
                    <h2 class="text-primary bb-1">@lang('Languages')</h2>
                    <div class="px-2">
                        @foreach ($resume['languages'] as $language)
                            <p class="mt-0 mb-1">
                                <span class="fw-bold">@lang($language['name']):</span>
                                <span class="text-muted">@lang($language['level'])</span>
                            </p>
                        @endforeach
                    </div>
                </div>

                <div id="interests">
                    <h2 class="text-primary bb-1">@lang('Interests')</h2>
                    <div class="px-2">
                        @foreach ($resume['interests'] as $interest)
                            <span class="fw-bold mb-1 me-1">
                                @lang($interest)
                            </span>
                        @endforeach
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
