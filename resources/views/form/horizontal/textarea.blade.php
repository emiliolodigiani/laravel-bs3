<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    @include('common.form.partial.label', ['labelClass' => 'col-sm-2 control-label'])
    <div class="col-sm-{{isset($labelCols) ? 12 - $labelCols : '10'}}">
            <textarea class="form-control"
                      {!! isset($markdown) && $markdown == false ? '' : ' data-provide="markdown" data-iconlibrary="fa"'!!}  id="{{$id or $name}}"
                      name="{{$name}}" {!! isset($placeholder) ? "placeholder=\"$placeholder\" " : '' !!}style="{{$style ?? ''}}" {!! isset($rows) ? "rows=\"$rows\"" : '' !!}>{{ old($name, $value) }}</textarea>

        @include('common.form.partial.error')
        @include('common.form.partial.info')
    </div>
</div>