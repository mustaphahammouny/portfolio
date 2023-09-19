<footer id="footer">
    <div class="container container-xl-custom">
        <div class="row py-5">
            <div class="col text-center">
                <ul
                    class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
                    @foreach (config('resume.socials') as $social)
                        <li class="{{ $social['class'] }}">
                            <a href="{{ $social['external-link'] }}" target="_blank">
                                <i class="{{ $social['icon'] }} text-2"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container container-xl-custom py-2">
            <div class="row row-cols-1 row-cols-lg-2 py-4">
                <div class="col text-center text-lg-start mb-2 mb-lg-0">
                    <p>© {{ config('resume.info.name') }} {{ date('Y') }} - @lang('All Rights Reserved').</p>
                </div>
                <div class="col text-center text-lg-end mb-2 mb-lg-0 pt-4 pt-lg-0">
                    <p>
                        @lang('Made with')
                        <i class="fas fa-heart text-danger mx-1"></i>
                        @lang('By') {{ config('resume.info.name') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
