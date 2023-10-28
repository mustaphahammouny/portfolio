<section id="personality">
    <div class="container-md container-xl-custom py-4">
        <x-title title="Personality" />
        <div class="row row-cols-1 row-cols-sm-2 justify-content-center align-items-center">
            @foreach ($resume['personality'] as $personality)
                <div class="col mb-4">
                    <div class="progress-bars">
                        <div class="progress-label">
                            <span class="text-1">@lang($personality['name'])</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary"
                                data-appear-progress-animation="{{ $personality['level'] }}%">
                                <span class="progress-bar-tooltip">{{ $personality['level'] }}%</span>
                                {{-- {{ $personality['level'] }}% --}}
                            </div>
                        </div>
                    </div>
    
                    {{-- <div class="circular-bar">
                        <div class="circular-bar-chart" data-percent="{{ $personality['level'] }}"
                            data-plugin-options="{'size': 200, 'lineWidth': 5, 'barColor': '#0088CC', 'trackColor': '#CCC'}">
                            <strong>@lang($personality['name'])</strong>
                            <label>{{ $personality['level'] }}%</label>
                        </div>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
</section>
