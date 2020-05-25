<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Agriculture System</title>
   @include('frontlayouts.css')


</head>

<body>
    
   @include('frontlayouts.search')

    @include('frontlayouts.sidebarmodal')

    @include('frontlayouts.header')

    @include('frontlayouts.banner')

    @include('frontlayouts.feature')
    @include('frontlayouts.services')
    @include('frontlayouts.store')

   @include('frontlayouts.gallery')

    @include('frontlayouts.feedback')

    @include('frontlayouts.frequently')
    @include('frontlayouts.news-blog')
    @include('frontlayouts.sponsor')
    
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
