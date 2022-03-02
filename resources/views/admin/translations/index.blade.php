@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row" id="editor">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <a class="text-primary mx-2" data-toggle="modal" data-target="#modalcredit">
                                <i class="far fa-plus-square"></i>
                            </a>
                            @include('admin.translations._credit_modal')

                            <span class="font-weight-bold">Переводы</span>

                            <div class="card-tools">
                                {{--                                @include('_layouts._tools')--}}
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center align-middle">
                                        #id
                                    </th>
                                    <th>
                                        Ключ
                                    </th>
                                    <th>
                                        <img src="{{ asset('admin/img/flag_ru.png') }}" class="mr-3" height="20" alt="">Название
                                    </th>
                                    <th>
                                        <img src="{{ asset('admin/img/flag_ua.png') }}" class="mr-3" height="20" alt="">Назва
                                    </th>
                                    {{--                                        <th>--}}
                                    {{--                                            <img src="{{ asset('img/png/flag_en.png') }}" class="mr-3" height="20" alt="">Title--}}
                                    {{--                                        </th>--}}
                                    <th class="text-center align-middle">
                                        <i class="fas fa-cog"></i>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($translations as $translation)
                                    @include('admin.translations._table',['item'=>$translation])
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
