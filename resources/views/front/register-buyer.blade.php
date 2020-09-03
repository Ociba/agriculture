<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agriculture System</title>
   @include('frontlayouts.css')


</head>

<body>
   @include('frontlayouts.search')

    @include('frontlayouts.sidebarmodal')

    @include('frontlayouts.header')

    <section class="page-title-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/07.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h3 class="title">Fill In Form </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form To Continue</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontlayouts.buyers-registration')
    
    @include('frontlayouts.questions')
    
    @include('frontlayouts.footer')
    <div class="back-to-top">
        <a href="#">
            <i class="fal fa-angle-double-up"></i>
        </a>
    </div>
    @include('frontlayouts.javascript')

</body>
</html>
