<?php
// in caso il nome sia per un vettore tipo 'options[value]' il nome dell'errore torna invece come 'options.value'
// convertiamo quindi il nome per l'uso con le stringhe di errore
$dotName = str_replace('[', '.', str_replace(']', '', $name));
?>
<?php $value = $value ?? (isset($model) && $model != null ? $model->$name : ''); ?>
<div class="form-group @include('bs3::form.partial.errorClass', ['name' => $dotName])">
    @include('bs3::form.partial.label', ['labelClass' => 'col-sm-2 control-label'])
    <div class="col-sm-10">
        <?php
        $placeholder = $placeholder ?? '';
        if (is_a($value, 'Carbon\Carbon')) {
            $value = $value->format('Y-m-d');
        }
        ?>
        {!! isset($before) || isset($after) ? '<div class="input-group">' : '' !!}
        {!! isset($before) ? '<div class="input-group-addon">'.$before.'</div>' : '' !!}
        <input type="{{ $type or 'text' }}" class="form-control" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{ old($dotName, $value) }}">
        {!! isset($after) ? '<div class="input-group-addon">'.$after.'</div>' : '' !!}
        {!! isset($before) || isset($after) ? '</div>' : '' !!}
        @include('bs3::form.partial.error', ['name' => $dotName])
        @include('bs3::form.partial.info')
    </div>
</div>