<section id="skills" class="with-bg">
    <div class="container-md container-xl-custom py-4">
        <x-title title="Skills" />
        <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-6 justify-content-center align-items-center">
            @foreach ($resume['skills'] as $skill)
                <div class="col text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <img class="img-fluid" width="100px" src="{{ Vite::image("skills/{$skill['logo']}") }}"
                        alt="{{ $skill['name'] }}" />
                </div>
            @endforeach
        </div>
    </div>    
</section>