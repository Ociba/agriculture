<section class="features-3-item-area pt-120">
        <div class="container">
           <div class="row">
               <div class="col-lg-5">
                   <div class="features-item-title">
                       <span>Our Features</span>
                       <h3 class="title">Explore Our Best Features</h3>
                   </div>
               </div>
               <div class="col-lg-7">
                   <div class="features-item-text text-justify">
                       <p>Only what you need is to go <a href="www.agricug.com"></a>Register then login then access our services like sell your product by filling the form correctly, if buyer please check the contact then connect with the seller using his phone contact or reach to us and advertise your products.</p>
                       {{--<a href="#">continue reading</a>--}}
                   </div>
               </div>
           </div>
            <div class="row">
               @foreach($features_services as $feature)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="features-items">
                        <div class="item mt-30">
                        <img src="{{asset('assets/images/'.$feature->image)}}" style="height:150px; width:250px;" alt="">
                            <h4 class="title">{{$feature->title}}</h4>
                            <p>{{$feature->statement}}</p>
                            {{--<a href="#">read more</a>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>