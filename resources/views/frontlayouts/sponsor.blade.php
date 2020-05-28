<section class="sponsor-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sponsor-box">
                        <span>Best Sponsor</span>
                        <h3 class="title">Our World Wide Partnership</h3>
                        <ul class="d-flex justify-content-between">
                            <li><img src="{{asset('assets/images/brand-1.png')}}" alt="brand"></li>
                            <li><img src="{{asset('assets/images/brand-2.png')}}" alt="brand"></li>
                            <li><img src="{{asset('assets/images/brand-3.png')}}" alt="brand"></li>
                        </ul>
                        <ul class="d-flex justify-content-between">
                            <li><img src="{{asset('assets/images/brand-4.png')}}" alt="brand"></li>
                            <li><img src="{{asset('assets/images/brand-5.png')}}" alt="brand"></li>
                            <li><img src="{{asset('assets/images/brand-6.png')}}" alt="brand"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletters-box">
                        <span>Newsletters</span>
                        <h3 class="title">Subscribe Our Newsletters</h3>
                        <form action="/save-subscription" method="get">
                        @csrf
                            <div class="input-box mb-20">
                                <input type="email" name="email" placeholder="Enter Email Address" required>
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <button typr="submit" class="main-btn">subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>