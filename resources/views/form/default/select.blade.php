<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} @include('common.form.partial.errorClass')" {{ $extra ?? '' }}>
    @include('common.form.partial.label', ['labelClass' => 'control-label'])

        <select class="form-control {{$class ?? ''}}" id="{{$name}}" name="{{$name}}">
            @if(isset($empty))
                <option value="">{{$empty}}</option>
                @endif
            @foreach($options as $loopKey => $loopValue)
                <option value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' selected="selected"' : '' }}>{{$loopValue}}</option>
            @endforeach
        </select>

        @include('common.form.partial.error')
        @include('common.form.partial.info')

</div>
