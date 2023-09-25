<div class="form-floating mb-3">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="floatingInput" {{ $attributes }} placeholder="name@example.com">
    <label for="floatingInput">{{ $label($name) }}</label>
</div>

{{-- Not exposed method --}}
{{-- @dd($notExposed()) --}}
