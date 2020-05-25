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

    @include('frontlayouts.about')
    @include('frontlayouts.about-section')
    @include('frontlayouts.services')
    @include('frontlayouts.farmers')
    @include('frontlayouts.about-count')

    @include('frontlayouts.frequently')
    @include('frontlayouts.feedback')
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
