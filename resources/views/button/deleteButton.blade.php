@if($inline ?? false)
    <div style="display: inline-block;">
@endif
<form class="form-inline" method="POST" action="{{ $route }}"@if(isset($confirm)) onsubmit='return confirm("{{$confirm}}");'@endif>
    {{ csrf_field() }}
    {{ method_field($method ?? 'DELETE') }}
    <button class="{{ $class or 'btn btn-danger'}}"><i class="fa fa-{{$icon or 'trash'}}"></i> {{$text or 'elimina' }}</button>
</form>
@if($inline ?? false)
    </div>
@endif