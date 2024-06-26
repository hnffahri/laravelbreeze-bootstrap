<!-- resources/views/components/input.blade.php -->
@props(['id', 'name', 'class', 'type' => 'text', 'value' => '', 'autocomplete' => 'off'])

<input id="{{ $id }}" class="{{ $class }} form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" autocomplete="{{ $autocomplete }}" />

@error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
