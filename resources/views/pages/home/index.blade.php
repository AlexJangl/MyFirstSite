@extends('_layout')
@section('content')
    @include('_layouts.intro')

    @include('_layouts.about')

    @include('_layouts.services')

    @include('_layouts.works')

    @include('_layouts.features')

    <div class="latest-blog section bg-grey">
        <div class="title-section">
            <h3>Get <span>Info</span> from Blog</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolore vel voluptatum libero consectetur accusamus! Ipsum qui veniam nemo nisi.</p>
        </div>
    @include('_layouts.blog')
    </div>
@endsection
