@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row" id="editor">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">

                            <span class="font-weight-bold">Сервисы</span>

                            <div class="card-tools">
                                <a href="{{ route('service.create') }}" class="btn btn-outline-primary text-primary mr-2">
                                    Добавить
                                    {{--                                <i class="far fa-plus-square"></i>--}}
                                </a>
                                {{--                                @include('_layouts._tools')--}}
                            </div>
                        </div>
                        <div class="card-body">
                            {{--                            @include('_include._table_columns_select')--}}
                                                        <table id="example" class="table table-bordered table-striped">
                            {{--                                @include('_include._table_thead')--}}
                                                            <tbody>
                                                                @foreach($services as $item)
                                                                    @include('admin.services._index_table')
                                                                @endforeach
                                                            </tbody>
                            {{--                                @include('_include._table_tfoot')--}}
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    {{--    @include('_layouts._table_properties')--}}
@endpush

