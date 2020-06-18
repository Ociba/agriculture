<section class="feedback-massage-area pt-130 pb-130">
        <div class="container">
            @include('layouts.message')
            <div class="row">
            <div class="col-lg-12">
                    <div class="feedback-massage">
                        <div class="row justify-content-end">
                            <div class="col-lg-8">
                                <div class="feedback-massage-item ml-35">
                                    <form action="/save-feedback" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="massage-title">
                                                    <h3 class="title">send us your feedback</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-1 mt-20">
                                                    <input type="text" name="name" placeholder="Your Full Name" required>
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                    <input type="email" name="email" placeholder="Your Email" required>
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <input type="file" name="image" placeholder="Your image" accept="jpgpng,.gif,JPG,PNG">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <textarea name="feedback" id="#" cols="30" rows="10" placeholder="Write Feedback Message"></textarea>
                                                    <i class="far fa-pen"></i>
                                                    <button type="submit" class="main-btn">send feedback message </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>