<div class="pricing section bg-grey">
    <div class="container">
        <div class="row">
            @foreach($pricings as $pricing)
                <div class="col col-md-4 col-sm-12 col-12">
                    <div class="content">
                        <h5>{{$pricing['title']}}</h5>
                        <h3>{{$pricing['price']}}</h3>
                        <ul>
                            @foreach($pricings_li as $li)
                                <li>{{$li}}</li>
                            @endforeach
                        </ul>
                        <a href="" class="button hbtn hb-fill-right">Get Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
