<section class="blog-details-area pt-100 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="blog-details mr-50 mt-30">
                    @foreach($get_item_details_on_sell as $item_details)
                        <div class="blog-details-content">
                            {{--<h2 class="title">Item Detail</h2>--}}
                            <img src="{{asset('items/images/'.$item_details->item_image)}}" style="height:350px; width:700px;" alt="thumb">
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="blog-sidebar mt-30">
                        <div class="blog-news box">
                            <div class="title-item">
                                <h4 class="title">Item Detail</h4>
                            </div>
                            @foreach($get_item_details_on_sell as $item_details)
                            <div class="blog-news-item mt-30">
                                <div class="item">
                                        <h6 class="title">Breed:  <span style="color:blue; text-align: right;">{{$item_details->breed}}</span></h6>
                                        <h6 class="title">Type:   <span style="color:blue;">{{$item_details->category}}</span></h6>
                                        <h6 class="title">Number: <span style="color:blue;">{{$item_details->number}}</span></h6>
                                        <h6 class="title">Price: <span style="color:blue;">{{$item_details->price}}</span></h6>
                                        <h6 class="title">District: <span style="color:blue;">{{$item_details->district}}</span></h6>
                                    <p>
                                    <a href="/sell-and-buy" button class="btn btn-warning text-white">Cancel</button></a>
                                    <a href="/buyers-registration" button class="btn btn-info text-white">Continue</button></a>
                                    </p>
                                    <span></span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
    });
    </script>
    