@if($errors->count())
    <div class="alert alert-danger">
        Ooops, per favore correggi:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ $action }}" method="{{ $method ?? 'post' }}" class="{{ $class ?? '' }}" id="{{ $id ?? '' }}">
    @if(isset($type) && $type == 'update')
        {{ method_field('PATCH') }}
    @endif
    @if(!isset($method) || $method != 'get')
        {{ csrf_field() }}
    @endif

    {{ $slot }}

</form>