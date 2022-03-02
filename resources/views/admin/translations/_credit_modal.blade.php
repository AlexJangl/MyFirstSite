@php $id = isset($item) ? $item->id : null; @endphp
<div class="modal fade" id="modal{{ $id }}credit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ isset($item) ? route('admin.translations.update',$item) : route('admin.translations.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                @isset($item) @method('PATCH') @endisset
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modal{{ $id }}showLabel">{!! isset($item) ? trans('trans.editing') : trans('trans.creation') !!}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    @include('admin._include.form.input',['data'=>'key','label'=>'Ключ','lang'=>'en','required'=>true])
                    @include('admin._include.form.input',['data'=>'title_ru','label'=>'Название','lang'=>'ru','required'=>true])
                    @include('admin._include.form.input',['data'=>'title_ua','label'=>'Назва','lang'=>'ua','required'=>true])
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-primary ml-4">{!! trans('trans.save') !!}</button>
                </div>
            </form>
        </div>
    </div>
</div>
