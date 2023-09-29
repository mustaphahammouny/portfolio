@props(['name', 'label'])

<div class="form-group">
    <label class="form-label mb-1 text-2">@lang($label)</label>
    <textarea class="form-control @error($name) is-invalid @enderror text-3 h-auto py-2" name="{{ $name }}">{{ old($name) }}</textarea>

    @error($name)
        <div class="alert alert-secondary alert-sm mb-0 mt-1">@lang($message)</div>
    @enderror
</div>
