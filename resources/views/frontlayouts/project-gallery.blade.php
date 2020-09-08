<section class="gallery-area gallery-3-area">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-left">
                        <span>Our Gallery</span>
                        <h3 class="title">Managing our Products for better Yields</h3>
                    </div>
                </div>
            </div>
            <div class="row gallery-active">
            @foreach($show_project_gallery as $gllery)
                <div class="col-lg-4">
                    <div class="gallery-box mt-30">
                        <img src="{{asset('assets/images/'.$gllery->image)}}" style="height:230px;" alt="gallery">
                        <div class="gallery-overlay d-flex justify-content-center align-items-end">
                            <div class="item text-center">
                                <h5 class="title">{{$gllery->title}}</h5>
                                <span>{{$gllery->names}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="col-lg-4">
                    <div class="gallery-box mt-30">
                        <img style="height:275px;" src="{{asset('assets/images/chicks.jpg')}}" alt="gallery">
                        <div class="gallery-overlay d-flex justify-content-center align-items-end">
                            <div class="item text-center">
                                <h5 class="title">Assessing and Managing your Poultry</h5>
                                <span>Birds</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-box mt-30">
                        <img style="height:275px;" src="{{asset('assets/images/cattle treat.jpg')}}" alt="gallery">
                        <div class="gallery-overlay d-flex justify-content-center align-items-end">
                            <div class="item text-center">
                                <h5 class="title">Checking animals health</h5>
                                <span>Animals</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-box mt-30">
                        <img style="height:275px;" src="{{asset('assets/images/ffish.jpg')}}" alt="gallery">
                        <div class="gallery-overlay d-flex justify-content-center align-items-end">
                            <div class="item text-center">
                                <h5 class="title">Fish maintanace & Feeding</h5>
                                <span>Fish</span>
                            </div>
                        </div>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </section>