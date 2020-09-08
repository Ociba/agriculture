<section class="what-we-do-area">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="section-title text-center">
                        <span>What We Do</span>
                        <h3 class="title">Why Choose Agriculture Uganda</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($we_do_services as $service)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/'.$service->image)}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">{{$service->subject}}</h4>
                        <p>{{$service->statement}} </p>
                        {{--<a href="#">read more</a>--}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>