<section class="farmers-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <span>Our Farmers</span>
                        <h3 class="title">Meet Our Honorable Hard Workers</h3>
                    </div>
                </div>
            </div>
            <div class="row farmers-active">
            @foreach($show_farmer_detail as $farmer)
                <div class="col-lg-3">
                    <div class="farmers-item mt-30">
                        <img src="{{asset('images/profile_pictures/'.$farmer->image)}}" style="height:200px;" alt="farmers">
                        <div class="farmers-overlay">
                            <div class="item text-center">
                                <h4 class="title">{{$farmer->name}}</h4>
                                <span>{{$farmer->type_of_farming}}</span>
                                <p class="font-weight-bold text-white">{{$farmer->email}}</p>
                                <p class="font-weight-bold  text-white">{{$farmer->contact}}</p>
                                {{--<ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>