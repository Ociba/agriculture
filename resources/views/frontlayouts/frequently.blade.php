<section class="faq-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-7">
                    <div class="faq-content">
                        <span>FAQ</span>
                        <h3 class="title">Frequently Ask Questions</h3>
                        <p class="text-justify">These are the most asked quesions from our customers, buyers and sellers concerning the transaction and the system,please for more information send us message through our contacts.</p>
                        {{--<a class="main-btn" href="#">get a quote</a>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            FAQ selected  Edition ?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">We thank you for the questions you asked and appreciate your effort to have such questions so far these are the question we have received from you , we shall adjust accordingly</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            
                                            {{$display_frequently_asked_questions[0]["question"] }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">{{$display_frequently_asked_questions[0]["reply"] }}}}</p> <i class="fa fa-user"></i> admin
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{$display_frequently_asked_questions[1]["question"] }} 
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">{{$display_frequently_asked_questions[1]["reply"] }}</p> <i class="fa fa-user"></i> admin
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        {{$display_frequently_asked_questions[2]["question"] }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">{{$display_frequently_asked_questions[2]["reply"] }}</p> <i class="fa fa-user"></i> admin
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        {{$display_frequently_asked_questions[3]["question"] }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">{{$display_frequently_asked_questions[3]["reply"] }}</p> <i class="fa fa-user"></i> admin
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        {{$display_frequently_asked_questions[4]["question"] }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">{{$display_frequently_asked_questions[4]["reply"] }}</p> <i class="fa fa-user"></i> admin
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>