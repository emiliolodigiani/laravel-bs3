<a class="btn btn-{{ $type ?? 'default' }} {{ $class ?? '' }}"@if(isset($href)) href="{{ $href }}"@endif @if(isset($target)) target="{{ $target }}"@endif>
    @if(isset($icon))
        <i class="fa fa-{{ $icon }}" aria-hidden="true"></i>
    @endif
    {{ $text ?? $slot ?? '' }}
    @if(isset($iconAfter))
        <i class="fa fa-{{ $iconAfter }}" aria-hidden="true"></i>
    @endif
</a>