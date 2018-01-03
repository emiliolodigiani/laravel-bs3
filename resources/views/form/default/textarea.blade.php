<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} @include('bs3::form.partial.errorClass')">
    @include('bs3::form.partial.label')
    <textarea class="form-control {{$class ?? ''}}"
              {!! isset($markdown) && $markdown == false ? '' : ' data-provide="markdown" data-iconlibrary="fa"'!!}  id="{{$id or $name}}"
              name="{{$name}}" {!! isset($placeholder) ? "placeholder=\"$placeholder\" " : '' !!} style="{{$style ?? ''}}" {!! isset($rows) ? "rows=\"$rows\"" : '' !!}>{{ old($name, $value) }}</textarea>

    @include('bs3::form.partial.error')
    @include('bs3::form.partial.info')

</div>