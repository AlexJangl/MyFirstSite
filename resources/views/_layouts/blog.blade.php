
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col col-sm-12 col-12 col-md-4">
                    <div class="content">
                        <img src="{{asset($blog['image'])}}" alt="" class="w-100">

                        <div class="content-text">
                            <h5><a href="">{{$blog['header']}}</a></h5>
                            <span>{{$blog['date']}}</span>
                            <p class="mb-0">{{$blog['content']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


