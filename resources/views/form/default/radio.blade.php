<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} {{ $errors->has($name) ? ' has-error' : '' }}" {{ $extra ?? '' }}>
    @include('bs3::form.partial.label', ['class' => 'control-label'])
    @foreach($options as $loopKey => $loopValue)
        <div class="radio">
            <label>
                <input type="radio" name="{{$name}}" value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' checked="checked"' : '' }} {!! $attribs or '' !!}> {{$loopValue}}
            </label>
        </div>
    @endforeach

    @include('bs3::form.partial.error')
    @include('bs3::form.partial.info')
</div>