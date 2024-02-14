<div class="form-group">
    @if(!empty($labelName))<label for="{{ $name }}" class="{{ $required ?? '' }} {{ $labelClass ?? '' }}">{{ $labelName }}</label>@endif

    <select name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }} form-control-md"  @if(!empty($required)) required="" @endif @if(!empty($onchange)) onchange="{{ $onchange }}" @endif @if(!empty($multiple)) multiple="multiple" @endif>

        {{ $slot }}

    </select>
</div>
