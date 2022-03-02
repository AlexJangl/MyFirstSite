@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row">
                <div class="col-xl-6" id="editor">
                    <div class="card card-outline card-primary">
                        <form action="@isset($item){{ route('admin.users.update',$item) }}@else{{ route('admin.users.store') }}@endisset" class="was-validated" method="POST" enctype="multipart/form-data">
                            @isset($item) @method('PATCH') @endisset
                            @csrf

                            <div class="card-header">
                                <a href="{{ route('admin.users.index') }}" class="text-primary mr-2">
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
                                        @include('admin._include.form.input',['data'=>'surname','label'=>'Фамилия','placeholder'=>'Введите данные','min'=>0,'length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'name','label'=>'Имя','placeholder'=>'Введите данные','min'=>0,'length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'patronymic','label'=>'Отчество','placeholder'=>'Введите данные','min'=>0,'length'=>150])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'one_box_id','type'=>'number','label'=>'id учетный записи в OneBox','placeholder'=>'Введите данные','min'=>0,'length'=>150])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'phone','label'=>'Телефон','placeholder'=>'Введите данные','min'=>0,'length'=>19, 'datamask'=>'phone'])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'email','type'=>'email','label'=>'E-mail','placeholder'=>'Введите данные','min'=>0,'length'=>150])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'login','label'=>'Логин','placeholder'=>'Введите данные','min'=>0,'length'=>150,'required'=>true])
                                    </div>
{{--                                    @if(Auth::user()->is_permit('ap_view_logging'))--}}
                                        <div class="col-12 mb-3">
                                            @include('admin._include.form.input',['data'=>'password','type'=>'password','value'=>'','label'=>'Пароль '.(Route::is('*create') ? null : '(не трожь без надобности)'),'placeholder'=>'Введите данные','length'=>150,'required'=>(Route::is('*create') ? true : null)])
                                        </div>
{{--                                    @endif--}}
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


