<div class="form-group">
    @if(!empty($labelName))<label for="{{ $name }}" class="{{ $required ?? '' }} {{ $labelClass ?? '' }}">{{ $labelName }}</label>@endif

    <textarea type="{{ $type ?? 'text' }}" data-role="{{ $tagsinput ?? '' }}" name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}"  maxlength="{{ $maxlength ?? '' }}" @if(!empty($readonly)) readonly @endif @if(!empty($required)) required="" @endif>{{ $value ?? '' }}</textarea>

    @if(!empty($optionalText))<span style="background: #e9fff7; font-size: 12px; cursor: help;" class="py-1 px-2 d-block">{{ $optionalText }}</span>@endif
</div>
