@extends('_layout')
@section('content')
    <div class="header-title">
        <div class="container">
            <h3>Our Blog</h3>
        </div>
    </div>
    <div class="blog section bg-grey">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    @include('pages.blogs._blog_card')
                @endforeach
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="" class="active">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
        </div>
    </div>
@endsection
