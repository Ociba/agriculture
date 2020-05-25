<section class="blog-details-area pt-100 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="blog-details mr-50 mt-30">
                        @foreach($display_blog_detail as $detail)
                        <div class="blog-details-content">
                            <h2 class="title">We appreciate your comments, views for the success of this application And Push Notifications</h2>
                            <div class="info d-sm-flex d-block justify-content-between align-items-center">
                                <ul class="info-blog">
                                    <li><i class="far fa-user"></i> {{$detail->name}}</li>
                                    <li><i class="far fa-calendar-alt"></i> {{ date('F d, Y', strtotime($detail->created_at))}} {{Carbon\Carbon::parse($detail->created_at)->diffForHumans()}}</li>
                                </ul>
                                <ul class="social">
                                    <li><span>Share Now</span></li>
                                    <li><a href="{{$detail->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$detail->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$detail->google}}"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                            <p>{{$detail->title}}</p>
                            <img src="{{asset('assets/images/tomatoes.jpg')}}" alt="thumb">
                        </div>
                        <div class="blog-details-quote">
                           <div class="quote">
                                <p>{{$detail->statement}}</p>
                                
                           </div>
                           @endforeach
                           <p class="text">Conveniently customize proactive Production services for leveraged products without globally continually aggregate frictionlent without globally wellies richard.

                            Authoritatively plagiarize synergistic total linkage before cost effective leadership skills. Proactively innovate distributed be practices through seamless deliverables. Uniquely maximize granular benefits before exceptional deliverables.</p>
                           <div class="blog-tag-share d-sm-flex d-block justify-content-between align-items-center mb-80">
                               <ul class="tag">
                                   <li><span>Popular Tag :</span></li>
                                   <li><a href="#">Agriculture, </a></li>
                                   <li><a href="#"> Organic Fertilizers, </a></li>
                                   <li><a href="#">Food</a></li>
                               </ul>
                               <ul class="social">
                                   <li><span>Share </span></li>
                                   <li><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i> </a></li>
                                   <li><a href="#"><i class="fab fa-google-plus-g"></i> </a></li>
                                   <li><a href="#"><i class="fab fa-instagram"></i> </a></li>
                               </ul>
                           </div>
                           <div class="row">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                   <div class="blog-details-box-1 bg_cover" style="background-image: url({{asset('assets/images/blog-box.jpg')}})">
                                       <h4 class="title">Improving market and Agricultural Prices</h4>
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                   <div class="blog-details-box-1 blog-details-box-2">
                                       <h4 class="title">Let us now share our comments for Agricultural betterment</h4>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="blog-details-box">
                            <img style="border-radius:50%; width:70px; height:70px;" src="{{asset('assets/images/james ociba.png')}}" alt="user">
                            <h4 class="title">Ociba James</h4>
                            <p>It is our pleasure to receive your comments and ideas so that it helps us to adjust and develop our agricultural sector for the more production to meet the world market demands and quality, therefore i encourage to participate.</p>
                            <ul>
                                <li><a href="ocibajames@yahoo.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="ocibajames@gmail.com"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog-comments">
                            <div class="comments-title">
                                <h3 class="title">Client’s Comments</h3>
                            </div>
                            <div class="blog-comments-item">
                            @foreach($display_comments as $comment)
                                <div class="item justify">
                                    <img style="border-radius:50%; width:70px; height:70px;" src="{{asset('assets/images/'.$comment->photo)}}" alt="comments">
                                    <h5 class="title">{{$comment->name}} <span>{{ date('d F, Y', strtotime($comment->created_at))}} {{ date('g:ia', strtotime($comment->created_at))}}</span></h5>
                                    <p>{{$comment->comment}}</p>
                                    <a href="#">Reply Commet</a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="blog-massage mt-70">
                            <div class="massage-title">
                                <h3 class="title">Send A Message</h3>
                            </div>
                            <form action="/save-comment" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="blog-massage-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-md-6">
                                        <div class="input-box mt-30">
                                            <input type="text" name="name" placeholder="Your Full Name">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-md-6">
                                        <div class="input-box mt-30">
                                            <input type="email" name="email" placeholder="Your Email ">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box mt-30">
                                            <textarea name="comment" id="#" cols="30" rows="10" placeholder="Write comment"></textarea>
                                            <i class="far fa-pen"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box mt-30">
                                            <input type="file" name="photo" placeholder="Your Email ">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="input-box mt-30">
                                    <button type="submit" class="main-btn">send message</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="blog-sidebar mt-30">
                        <div class="blog-news box">
                            <div class="title-item">
                                <h4 class="title">Recent News</h4>
                            </div>
                            @foreach($show_recent_news as $recent_news)
                            <div class="blog-news-item mt-30">
                                <div class="item">
                                    <a href="#">
                                        <h6 class="title">{{$recent_news->title}} </h6>
                                    </a>
                                    <span>{{ date('d F, Y',($recent_news->created_at))}}</span>
                                    <img src="{{asset('assets/images/'.$recent_news->image)}}" alt="news">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="blog-category box">
                            <div class="title-item">
                                <h4 class="title">Other Category</h4>
                            </div>
                            <div class="blog-category-item">
                            @foreach($display_others as $others)
                                <ul>
                                    <li><a href="#"><span>{{$others->title}}</span> <span>({{$others->number}})</span></a></li>
                                </ul>
                            @endforeach
                            </div>
                        </div>
                        <div class="blog-tag box">
                            <div class="title-item">
                                <h4 class="title">Popular Tag</h4>
                            </div>
                            <div class="blog-tag-item mt-30">
                                <ul>
                                    <li><a href="#">Cleaning</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Booking</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Car</a></li>
                                    <li><a href="#">House</a></li>
                                    <li><a href="#">Apartment</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Washing</a></li>
                                    <li><a href="#">Agency</a></li>
                                    <li><a href="#">Listing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-add mt-40">
                            <img src="{{asset('assets/images/bee.jpg')}}"  height="450" alt="blog">
                            <div class="blog-add-overlay d-flex justify-content-center align-items-center">
                                <div class="blog-add-content text-center">
                                    <h3 class="title">Work  Together</h3>
                                    <p>For more information on Farming contact us and we shall get back to you in the shortest time.</p>
                                    <a class="main-btn" href="/contact">contact us <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    