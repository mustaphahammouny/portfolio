<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $resume['info']['name'] }}</title>

    <style>
        @page {
            margin: 40px 30px;
        }

        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <main>
        <div id="info">
            <table class="table table-header table-bordered">
                <tbody>
                    <tr>
                        <td>
                            <img src={{ resource_path('images/logo.png') }} />
                        </td>
                        <td>
                            <h2 class="fw-bold text-start">{{ $resume['info']['name'] }}</h2>
                            <p class="text-start">
                                <span>@lang('date of birth'):</span>
                                <span>{{ $resume['info']['birth-date'] }}</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="experiences">

        </div>

        <div id="education">

        </div>

        <div id="skills">

        </div>

        <div id="personality">

        </div>

        <div id="languages">

        </div>

        <div id="interests">

        </div>
    </main>
</body>

</html>
