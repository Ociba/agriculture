<section class="feedback-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <span>Our Feedback</span>
                        <h3 class="title">What Our Client’s Say About Product</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                @foreach($display_feedback as $feedback)
                    <div class="feedback-active">
                        <div class="feedback-content">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <div class="feedback-user">
                                        <img style="border-radius:50%; height:60px; width:60px;" src="{{asset('assets/images/'.$feedback->image)}}" alt="feedback">
                                        <span style="color:blue;">{{$feedback->name}}</span>
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-10">
                                    <p>{{$feedback->feedback}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                <a href="/front-page-feedback" button type="submit" class="main-btn">send us your feedback </button></a>
                </div>
            </div>
        </div>
    </section>
    