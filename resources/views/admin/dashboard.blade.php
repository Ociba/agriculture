<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Uganda | Agriculture system</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.topnavbar')
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Agriculture System</span>
    </a>

    
    @include('layouts.sidebar')
    
  </aside>

  
  <div class="content-wrapper">
    
    @include('layouts.breadcrumb')
    <section class="content">
      <div class="container-fluid">
        @include('layouts.cards')
      </div>
      
                    </div>
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('layouts.javascript')

</body>
</html>
