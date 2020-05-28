<section class="contact-massage-area pt-130 pb-130">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                    <div class="contact-massage">
                        <div class="row justify-content-end">
                            <div class="col-lg-8">
                                <div class="contact-massage-item ml-35">
                                    <form action="save-message" method="get">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="massage-title">
                                                    <h3 class="title">send Message</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-1 mt-20">
                                                    <input type="text" name="name" placeholder="Your Full Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                    <input type="email" name="email" placeholder="Your Email">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <input type="text" name="subject" placeholder="Your Subject">
                                                    <i class="far fa-edit"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <textarea name="message" id="#" cols="30" rows="10" placeholder="Write Message"></textarea>
                                                    <i class="far fa-pen"></i>
                                                    <button type="submit" class="main-btn">send message </button>
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