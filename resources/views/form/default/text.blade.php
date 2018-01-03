<?php
// in caso il nome sia per un vettore tipo 'options[value]' il nome dell'errore torna invece come 'options.value'
// convertiamo quindi il nome per l'uso con le stringhe di errore
$dotName = str_replace('[', '.', str_replace(']', '', $name));
?>
<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group {{ $grid ?? '' }} @include('bs3::form.partial.errorClass', ['name' => $dotName])" {{ $extra ?? '' }} >
    @include('bs3::form.partial.label')
    <?php
    $placeholder = $placeholder ?? '';
    if (is_a($value, 'Carbon\Carbon')) {
        $value = $value->format('Y-m-d');
    }
    ?>
    {!! isset($before) || isset($after) ? '<div class="input-group">' : '' !!}
    {!! isset($before) ? '<div class="input-group-addon">'.$before.'</div>' : '' !!}
    <input type="{{ $type or 'text' }}" class="form-control {{$class ?? ''}}" id="{{$name}}" name="{{$name}}" style="{{$style ?? ''}}" placeholder="{{$placeholder}}" value="{{ old($dotName, $value) }}">
    {!! isset($after) ? '<div class="input-group-addon">'.$after.'</div>' : '' !!}
    {!! isset($before) || isset($after) ? '</div>' : '' !!}

    @include('bs3::form.partial.error')
    @include('bs3::form.partial.info')
</div>
