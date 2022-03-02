@extends('_layout')
@section('content')
    @include('_layouts.intro')

    @include('pages.abouts.about')

    @include('pages.services._service')

    @include('_layouts.works')

    @include('pages.abouts.features')

    <div class="latest-blog section bg-grey">
        <div class="title-section">
            <h3>Get <span>Info</span> from Blog</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolore vel voluptatum libero consectetur accusamus! Ipsum qui veniam nemo nisi.</p>
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                        @include('pages.blogs._blog_card')
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
