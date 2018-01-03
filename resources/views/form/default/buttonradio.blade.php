<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} {{ $errors->has($name) ? ' has-error' : '' }}" {{ $extra ?? '' }}>
    @include('bs3::form.partial.label', ['labelClass' => 'control-label'])
    <br>
    <div class="{{ $groupClass ?? 'btn-group' }}" data-toggle="buttons">
        @foreach($options as $loopKey => $loopValue)
            <label class="btn {{$btnClass[$loopKey] ?? $btn ?? 'btn-default'}} {{ old($name, $value ) == $loopKey ?  ' active' : '' }} {{$class ?? ''}}" id="label-{{$name}}-{{$loopKey}}">
                <input type="radio" name="{{$name}}" id="{{$name}}-{{$loopKey}}" value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' checked' : '' }}> {{$loopValue}}
            </label>
        @endforeach
    </div>
    @include('bs3::form.partial.error')
    @include('bs3::form.partial.info')

</div>
