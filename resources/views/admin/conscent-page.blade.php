<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Uganda| Agriculture system</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
  @include('layouts.topnavbar')
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('layouts.sidebartoptext')

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Breadcrumbs -->
    @include('layouts.breadcrumb')
    <!-- /.Breadcrumbs -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        @if(sizeof($display_all_conscent_details) > 0)
          @foreach($display_all_conscent_details as $conscent)
            <div class="card-body">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Conscent Document</h3>
            </div>
            <div class="box-body">
            <div class="text-justify">
              <p>Dear Customer,<span class="pull-right"></span></p>
              <p>{{$conscent->created_at}}</p>
              <p><b>RE:<u>TO APPROVE AND CONFIRM WHAT IS TO BE SOLD</u></b></p>
              <p>I hereby confirm that the animals/crops were checked by <b>{{$conscent->role}}</b><br>
              Mr/Ms/Mrs/sis/Rev <b>{{$conscent->name}}</b> his/her Contact(s) is <b>{{$conscent->contact}}</b></p>
              <p>Therefore {{$conscent->declaration}}</p>
              <p>Thank You</p>
              </div>
            </div>
          @endforeach
        @else
        <p class="text-center">{{$noconscent_available}}</p>
        @endif
        
        <!-- /.box-footer-->
      </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          </div>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.javascript')
</body>
</html>
