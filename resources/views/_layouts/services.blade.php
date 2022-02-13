<div class="services section bg-grey">
    <div class="container">
        <div class="title-section">
            <h3>Construction <span>Service</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolore vel voluptatum libero consectetur accusamus! Ipsum qui veniam nemo nisi.</p>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col col-md-4 col-sm-12 col-12">
                    <div class="content" @if($loop->index == 1 || $loop->index == 4) class = "content-center" @endif">
                        <i class="{{$service['icon']}}"></i>
                        <h5>{{$service['header']}}</h5>
                        <p class="mb-0">{{$service['content']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
