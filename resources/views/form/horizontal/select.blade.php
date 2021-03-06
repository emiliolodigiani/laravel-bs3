<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('bs3::form.partial.label', ['labelClass' => 'col-sm-2 control-label'])
    <div class="col-sm-10">
        <select class="form-control" id="{{$name}}" name="{{$name}}">
            @if(isset($empty))
                <option value="">{{$empty}}</option>
                @endif
            @foreach($options as $loopKey => $loopValue)
                <option value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' selected="selected"' : '' }}>{{$loopValue}}</option>
            @endforeach
        </select>

        @include('bs3::form.partial.error')
        @include('bs3::form.partial.info')
    </div>
</div>
