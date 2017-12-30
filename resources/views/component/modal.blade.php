<!-- Button trigger modal -->
<button type="button" class="{{$class ?? 'btn btn-primary btn-lg'}}" data-toggle="modal" data-target="#{{ $id }}">
    {{ $button }}
</button>
@push('footer')
<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $title ?? '' }}</h4>
            </div>
            <div class="modal-body">
                {{ $modalBody ?? ''}}
            </div>
            <div class="modal-footer">
                {{ $modalFooter ?? '' }}
            </div>
        </div>
    </div>
</div>
@endpush