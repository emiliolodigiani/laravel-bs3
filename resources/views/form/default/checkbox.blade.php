<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
        <div class="checkbox">
            <label>
                <input type="hidden" value="0" name="{{$name}}"/>
                <input type="checkbox" name="{{$name}}" {{ old($name, $value ) == '1' ?  ' checked' : '' }} value="1">
                {{$label ?? ''}}
            </label>
        </div>
        @include('common.form.partial.error')
        @include('common.form.partial.info')
</div>