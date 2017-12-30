@if(isset($row))
    <div class="row formbutton">
        <div class="{{ $row }}">
@endif
            <button class="{{ $class ?? 'btn btn-primary' }}" type="{{ $type ?? 'submit' }}">
                @if(isset($icon))
                    <i class="fa fa-{{ $icon }}" aria-hidden="true"></i>
                @endif
                {{ $text ?? $slot }}
                @if(isset($iconAfter))
                    <i class="fa fa-{{ $iconAfter }}" aria-hidden="true"></i>
                @endif
            </button>
@if(isset($row))
        </div>
    </div>
@endif
