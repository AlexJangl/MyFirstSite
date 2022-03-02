@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row" id="editor">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">

                            <span class="font-weight-bold">Прайсы</span>

                            <div class="card-tools">
                                <a href="{{ route('pricings.create') }}" class="btn btn-outline-primary text-primary mr-2">
                                    Добавить
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table id="example" class="table table-bordered table-striped">

                                <tbody>
                                    @foreach($pricings as $item)
                                        @include('admin.pricings._index_table')
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

@push('scripts')
@endpush

