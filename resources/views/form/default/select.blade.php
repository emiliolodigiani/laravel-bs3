<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} @include('bs3::form.partial.errorClass')" {{ $extra ?? '' }}>
    @include('bs3::form.partial.label', ['labelClass' => 'control-label'])

        <select class="form-control {{$class ?? ''}}" id="{{$name}}" name="{{$name}}">
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
