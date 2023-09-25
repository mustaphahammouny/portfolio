<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-container container container-xl-custom">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img width="82" height="40" src="{{ Vite::image('logo.png') }}" alt="Logo" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        @foreach (\App\Constants\Menu::HEADER as $menu)
                                            <li class="dropdown">
                                                <a class="dropdown-item @if (Request::routeIs($menu['to'])) active @endif"
                                                    href="{{ route($menu['to']) }}">
                                                    @lang($menu['name'])
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn btn-sm header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2 ms-0">
                            <div class="header-nav-feature d-inline-flex">
                                <div class="dropdown">
                                    <button class="btn border-0 px-0 dropdown-toggle dropdown-locale" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span
                                            class="fi fi-{{ config('laravellocalization.supportedLocales.' . App::getLocale() . '.logo') }}"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    <span class="fi fi-{{ $properties['logo'] }}"></span>
                                                    @lang($properties['name'])
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="my-auto ms-3">
                                    <a href="javascript:void(0);" class="btn btn-circle btn-switch-mode">
                                        <i class="fas fa-lightbulb"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
