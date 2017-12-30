<form class="form-inline" method="POST" action="{{ $action }}" style="display: inline-block;">
    {{ csrf_field() }}
    {{ method_field($method ?? 'PATCH') }}
    {{ $slot ?? '' }}
    <button class="{{ $class or 'btn btn-default'}}">@if(isset($icon))<i class="fa fa-{{$icon}}"></i> @endif{{$text ?? '' }}</button>
</form>
