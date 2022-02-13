@extends('_layout')
@section('content')
    <div class="header-title">
        <div class="container">
            <h3>Contact us</h3>
        </div>
    </div>
    <!-- end header-title -->

    <!-- maps -->
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.842968851481!2d144.95371311531892!3d-37.817146979751726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1586683251112!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- end maps -->

    <!-- contact -->
    <div class="contact section">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 col-12">
                    <ul>
                        <li><i class="fa fa-envelope"></i> astylers97@gmail.com</li>
                        <li><i class="fa fa-phone"></i> +61 3 8376 6284</li>
                        <li class="map"><i class="fa fa-map-marker"></i> <p>121 King Street, Melbourne Victoria 3000 Australia</p></li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-12 col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div class="col">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        <input type="text" placeholder="Subject">
                        <textarea cols="30" rows="10">Your Message</textarea>
                        <button class="button hbtn hb-fill-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
