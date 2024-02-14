<div class="form-group">
    @if(!empty($labelName))<label for="{{ $name }}" class="{{ $required ?? '' }} {{ $labelClass ?? '' }}">{{ $labelName }}</label>@endif

    <input type="{{ $type ?? 'text' }}" data-role="{{ $tagsinput ?? '' }}" name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }}" value="{{ $value ?? '' }}" placeholder="{{ $placeholder ?? '' }}" @if(!empty($accept)) accept="{{ $accept }}" @endif maxlength="{{ $maxlength ?? '' }}"  @if(!empty($onchange)) onchange="{{ $onchange }}" @endif @if(!empty($readonly)) readonly @endif @if(!empty($multiple)) multiple="multiple" @endif @if(!empty($required)) required="" @endif>

    @if(!empty($optionalText))<span style="background: #e9fff7; font-size: 12px; cursor: help;" class="py-1 px-2 d-block">{{ $optionalText }}</span>@endif
</div>
