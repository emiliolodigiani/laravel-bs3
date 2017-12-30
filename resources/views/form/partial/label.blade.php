@if(isset($label))
    <label for="{{$name}}" class="{{ $labelClass ?? '' }}">
    @if($label == 't')
        {{__('validation.attributes.'.$name)}}
    @else
        {{$label}}
    @endif
    </label>
@endif