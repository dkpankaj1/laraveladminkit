{{-- Input Field ::Begin --}}
<input {{ $attributes->merge(['class' => 'form-control']) }}
    type="{{ $type }}" id="{{ $id ?? $name }}" name="{{ $name }}" value="{{ old($name, $value ?? '') }}"
    placeholder="{{ $placeholder ?? '' }}">
{{-- Input Field ::Begin --}}


{{-- Input Error ::Begin --}}
@error($name)
    <div class="invalid-feedback d-block my-1 text-danger">✖ {{ $message }}</div>
@enderror
{{-- Input Error ::Begin --}}
