<div class="form-group">
    @if(!empty($labelName))<label for="{{ $name }}" class="{{ $required ?? '' }} {{ $labelClass ?? '' }}">{{ $labelName }}</label>@endif

    <div class="input-group">
        <input type="{{ $type ?? 'password' }}" name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}" @if(!empty($required)) required="" @endif>
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary">
                <i class="fas fa-eye toggle-password text-white" toggle="#{{ $name }}"
                    style="cursor: pointer;"></i>
            </span>
        </div>
    </div>
</div>