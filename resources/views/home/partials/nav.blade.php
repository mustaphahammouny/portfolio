<section id="nav" class="with-bg border-0 py-4">
    <div class="container">
        <div class="row">
            <div class="col text-center pt-2">
                <div class="d-inline-block">
                    @foreach (\App\Constants\Menu::RESUME as $menu)
                        <a href="{{ $menu['to'] }}"
                            class="btn btn-modern btn-light font-weight-bold me-2 mb-2">
                            @lang($menu['name'])
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>