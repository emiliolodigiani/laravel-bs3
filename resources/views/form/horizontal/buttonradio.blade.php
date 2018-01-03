<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('bs3::form.partial.label', ['labelClass' => 'col-sm-2 control-label'])
    <div class="col-sm-10">
        <div class="btn-group btn-evidenza_" data-toggle="buttons">
            @foreach($options as $loopKey => $loopValue)
                <label class="btn btn-default {{ old($name, $value ) == $loopKey ?  ' active' : '' }}">
                    <input type="radio" name="{{$name}}" value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' checked' : '' }}> {{$loopValue}}
                </label>
            @endforeach
        </div>
        @include('bs3::form.partial.error')
        @include('bs3::form.partial.info')
    </div>
</div>
