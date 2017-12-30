<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
        @include('common.form.partial.label', ['labelClass' => 'col-sm-2 control-label'])
        <div class="col-sm-10">
            @foreach($options as $loopKey => $loopValue)
                <label class="radio-inline">
                    <input type="radio" name="{{$name}}" value="{{$loopKey}}" {{ old($name, $value ) == $loopKey ?  ' checked="checked"' : '' }}> {{$loopValue}}
                </label>
            @endforeach

                @include('common.form.partial.error')
                @include('common.form.partial.info')
        </div>
</div>