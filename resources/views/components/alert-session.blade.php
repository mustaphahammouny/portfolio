@if ($status = session('status'))
    @if ($status == 'success')
        <div class="alert alert-success alert-sm alert-dismissible" role="alert">
            @lang(session('message'))
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @else
        <div class="alert alert-danger alert-sm alert-dismissible" role="alert">
            @lang(session('message'))
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endif
