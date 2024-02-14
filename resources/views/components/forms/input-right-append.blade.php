<div class="input-group {{ $parent_class ?? '' }} mb-3">
    <input type="{{ $type ?? 'text' }}" class="form-control {{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}" name="{{ $name }}" required>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="{{ $icon }}"></span>
        </div>
      </div>
  </div>