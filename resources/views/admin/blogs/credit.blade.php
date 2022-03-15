@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-outline card-primary">
                        <form action="{{ isset($item) ? route('blogs.update',$item) : route('blogs.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                            @isset($item) @method('PATCH') @endisset
                            @csrf

                            <div class="card-header">
                                <a href="{{ route('admin.blogs.index') }}" class="text-primary mr-2">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>

                                <span class="font-weight-bold">@isset($item) Редактирование @else Создание @endisset пользователя</span>

                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        @include('admin._include.add_images', ['N_photo'=>2, 'addPhoto'=>true, 'aspectRatio'=>41/35, 'default_img'=>'admin/img/png/no-logo.png'])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'title','label'=>'Название','placeholder'=>'Введите данные','length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'text','label'=>'Текст','placeholder'=>'Введите данные','length'=>10,'required'=>true])
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


