<button class="btn btn-{{ $type ?? 'default' }} {{ $class ?? '' }}" onclick="document.getElementById('{{ $id }}').submit();">@if(isset($icon))<i class="fa fa-{{$icon}}"></i> @endif{{$text ?? '' }}</button>
<form id="{{ $id }}" method="POST" action="{{ $action }}" style="display: none;">
    {{ csrf_field() }}
    {{ method_field($method ?? 'PATCH') }}
    {{-- lo slot è usato per inserire i campi eventuali di cui fare l'update --}}
    {{ $slot ?? '' }}
</form>
