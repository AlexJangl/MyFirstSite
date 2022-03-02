@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-outline card-primary">
                        <form action="{{ isset($item) ? route('service.update',$item) : route('service.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                            @isset($item) @method('PATCH') @endisset
                            @csrf

                            <div class="card-header">
                                <a href="{{ route('admin.services.index') }}" class="text-primary mr-2">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>

                                <span class="font-weight-bold">@isset($item) Редактирование @else Создание @endisset пользователя</span>

                                <div class="card-tools">
                                    {{--                                    @include('_layouts._tools')--}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'title','label'=>'Название','placeholder'=>'Введите данные','length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'icon','label'=>'Иконка','placeholder'=>'Введите данные','length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'description','label'=>'Описание','placeholder'=>'Введите данные','length'=>150, 'required'=>true])
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
{{--                                @include('_include.statuses')--}}
                                <button type="submit" class="btn btn-primary ml-4">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>

{{--                @if(isset($item))--}}
{{--                    @if(Auth::user()->is_permit('ap_view_logging'))--}}
{{--                        <div class="col-xl-6" id="logs">--}}
{{--                            @include('admin.users._log_card')--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endif--}}
            </div>
        </section>
    </div>
@endsection


