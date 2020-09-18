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
            @if ($get_items_to_sell->currentPage() > 1)
            @php($i =  1 + (($get_items_to_sell->currentPage() - 1) * $get_items_to_sell->perPage()))
            @else
            @php($i = 1)
            @endif
             @foreach($get_items_to_sell as $item_on_sell)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="what-we-do-item text-center mt-30">
                    <img src="{{asset('items/images/'.$item_on_sell->item_image)}}" style=" width:300px; height:150px;" alt="">
                        <h4 class="title">{{$item_on_sell->product}}</h4>
                        <p class="font-weight-bold">{{$item_on_sell->category}} </p>
                        <span class="text-primary font-weight-bold">Ugx:{{$item_on_sell->price}}</span>
                        <a href="/buyer-view-item-details/{{$item_on_sell->id}}" button type="button" class="btn btn-warning btn-xs">View More</button></a>
                    </div>
                </div>
            @endforeach
            
            </div><br>
            <div class="row justify-content-center">
            @if(isset($search_query))
            {{ $get_items_to_sell->appends(['name' => $search_query])->links() }}
            @else
            {{ $get_items_to_sell->links() }}
            @endif
            </div>
        </div>
    </section>