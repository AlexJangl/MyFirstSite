@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-outline card-primary">
                        <form action="{{ isset($item) ? route('pricings.update',$item) : route('pricings.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                            @isset($item) @method('PATCH') @endisset
                            @csrf

                            <div class="card-header">
                                <a href="{{ route('admin.pricings.index') }}" class="text-primary mr-2">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>

                                <span class="font-weight-bold">@isset($item) Редактирование @else Создание @endisset пользователя</span>

                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'title','label'=>'Название','placeholder'=>'Введите данные','length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'price','label'=>'Цена','placeholder'=>'Введите данные','length'=>10,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'list_of_benefits','label'=>'Список преймуществ','placeholder'=>'Введите данные','length'=>150, 'required'=>true])
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
                                <button type="submit" class="btn btn-primary ml-4">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


