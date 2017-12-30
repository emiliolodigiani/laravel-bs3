<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} @include('common.form.partial.errorClass')">
    @include('common.form.partial.label')
    <textarea class="form-control {{$class ?? ''}}"
              {!! isset($markdown) && $markdown == false ? '' : ' data-provide="markdown" data-iconlibrary="fa"'!!}  id="{{$id or $name}}"
              name="{{$name}}" {!! isset($placeholder) ? "placeholder=\"$placeholder\" " : '' !!} style="{{$style ?? ''}}" {!! isset($rows) ? "rows=\"$rows\"" : '' !!}>{{ old($name, $value) }}</textarea>

    @include('common.form.partial.error')
    @include('common.form.partial.info')

</div>