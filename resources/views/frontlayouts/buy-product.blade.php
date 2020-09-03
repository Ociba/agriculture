<section class="what-we-do-area">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="section-title text-center">
                        <span>Choose Item To Buy</span>
                        <h3 class="title">item(s) on sell Now</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
             @foreach($get_items_to_sell as $item_on_sell)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('items/images/'.$item_on_sell->item_image)}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">{{$item_on_sell->product}}</h4>
                        <p>{{$item_on_sell->category}} </p>
                        <span class="text-primary font-weight-bold">Ugx:{{$item_on_sell->price}}</span>
                        <a href="/buyer-view-item-details/{{$item_on_sell->id}}">view more</button></a>
                    </div>
                </div>
            @endforeach
            {{--
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/shop-thumb.jpg')}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">Advertise your Products</h4>
                        <p>Display your Products sample</p>
                        <span class="text-primary font-weight-bold">Ugx:102,000</span>
                        <a href="/buyer-view-item-details">view more</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/gallery-item-8.jpg')}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">Demonstration</h4>
                        <p>Connect you with Farmers</p>
                        <span class="text-primary font-weight-bold">Ugx:40,000</span>
                        <a href="/buyer-view-item-details">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/cattle treat.JPG')}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">Treatment</h4>
                        <p>Connect you nearest Vetenary,Agricultural officer for</p>
                        <span class="text-primary font-weight-bold">Ugx:125,000</span>
                        <a href=/buyer-view-item-details">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/gran2.jpg')}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">Security & Safety</h4>
                        <p>Advice on how to harvest and keep dry crops for long time to avoid losses</p>
                        <span class="text-primary font-weight-bold">Ugx:55,000</span>
                        <a href="/buyer-view-item-details">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('assets/images/tractor.jpg')}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">Modern Equipment</h4>
                        <p>Linkinng farmers to buy modern farming equipments</p>
                        <span class="text-primary font-weight-bold">Ugx:375,000</span>
                        <a href="/buyer-view-item-details">view more</a>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </section>