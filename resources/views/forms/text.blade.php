<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
    </label>
    <input
        type="text"
        name="{{ $name }}"
        placeholder="{{ $label }}"
        value="{{ old($name) }}"
        class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" />
    @if($errors->has($name))
        <span class="invalid-feedback">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>
