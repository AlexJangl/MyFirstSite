<div class="pricing section bg-grey">
    <div class="container">
        <div class="row">
            @foreach($pricings as $pricing)
                <div class="col col-md-4 col-sm-12 col-12">
                    <div class="content">
                        <h5>{{$pricing->title}}</h5>
                        <h3>$ {{$pricing->price}}</h3>
                        @php
                            $pricingsList = Str::of($pricing->list_of_benefits)->explode(' ');
                        @endphp
                        <ul>
                            @for($i = 0; $i < $pricingsList->count(); $i++)
                                <li>{{$pricingsList[$i]}}</li>
                            @endfor
                        </ul>
                        <a href="" class="button hbtn hb-fill-right">Get Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
