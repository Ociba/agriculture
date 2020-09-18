<section class="contact-massage-area-buyer pt-130 pb-130">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                    @include('layouts.errormessage')
                    <div class="contact-massage">
                        <div class="row justify-content-end">
                            <div class="col-lg-8">
                                <div class="contact-massage-item ml-35">
                                <form method="get" action="/register-buyer">
                                    @csrf
                                    
                                       @foreach($get_item_id as $item)
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="massage-title text-center">
                                                    <a href="{{ route('login') }}"><h5>If you have an account with us already <span style="color:blue;"> click here</span></h5></a>
                                                    <h3 class="title">OR</h3>
                                                    <h3 class="title">Fill in the Form</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-1 mt-20">
                                                    <input id="name" type="text" class="" name="name" value="" required autocomplete="off" autofocus placeholder="Your Full Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                    <input id="email" type="email" class="" name="email" value="" required autocomplete="off" placeholder="Your Email">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <input id="contact" type="text" class="" name="contact" value="" required autocomplete="off" placeholder="Your Contact">
                                                    <i class="far fa-edit"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                <input id="password" type="password" class="" name="password" required autocomplete="off" placeholder="Password" >
                                                    <i class="far fa-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="off" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <input type="hidden" class="" name="" value="{{$item->id}}" required autocomplete="off" placeholder="">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <button type="submit" class="main-btn">Click Now </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>