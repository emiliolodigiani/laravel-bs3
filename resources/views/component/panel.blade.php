@if(isset($grid))
    <div class="{{ $grid }}">
        @endif
        <div class="panel panel-{{ $type ?? 'default' }}" @if($id ?? null)id="{{ $id }}"@endif>
            @if($title ?? null)
                <div class="panel-heading">
                    <h3 class="panel-title">
                        @if($titleIcon ?? null)
                            <i class="fa fa-{{$titleIcon}}" aria-hidden="true"></i>
                        @endif
                        {!! $title !!}
                    </h3>
                </div>
            @endif
            @if(isset($slot) && trim($slot) !== '')
                <div class="panel-body">
                    {{ $slot }}
                </div>
            @endif
            @if(isset($table))
                {{ $table }}
            @endif
            @if(isset($footer))
                <div class="panel-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
        @if(isset($grid))
    </div>
@endif