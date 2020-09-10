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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f57545a4704467e89ed0a26/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
