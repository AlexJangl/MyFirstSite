<div class="features section">
    <div class="container">
        <div class="title-section">
            <h3>Our <span>Campany</span> Features</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolore vel voluptatum libero consectetur accusamus! Ipsum qui veniam nemo nisi.</p>
        </div>
        <div class="row">

            <div class="col col-sm-12 col-12 col-md-6">
                <div class="content">
                    <h4>We always give the best</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sed quo laudantium quae soluta magni architecto, voluptate quasi quidem error, dolorum accusamus modi quaerat eos autem.</p>
                </div>
                @foreach($features as $feature)
                    <div class="content" @if($loop->last) class = "pb-0" @endif>
                        <div class="icon">
                            <i class = {{$feature['icon']}}></i>
                        </div>
                        <div class="content-text">
                            <h5>{{$feature['header']}} </h5>
                            <p class="mb-0">{{$feature['content']}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col col-sm-12 col-12 col-md-6">
                <img src="{{asset('images/features.jpg')}}" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
