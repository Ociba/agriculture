<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
    
  <title>Uganda| Sacco system</title>
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
    @include('layouts.breadcrumb')
    <section class="content">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="box box-primary">
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
            <section class="content">
            <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
          <a href="/display-compose" class="btn btn-primary btn-block margin-bottom">Documentation</a>

          <div class="box box-solid card pt-2 mb-2 p-2 pl-2">
            <div class="box-header with-border">
              <h5 class="box-title">Table of content</h5>
            </div>
            <div class="box-body">
              <ul class="list-unstyled list-group list-group-unbordered">
                <li class="list-group-item"><a href="/display-login" class="btn-default"><i class="fa fa-user"></i> Registration & Login
                  </a></li>
                <li class="list-group-item"><a href="/display-documentation-dashboard" class="btn-default"><i class="fa fa-institution"></i> Documentation Dashboard
                  <span class="pull-right text-success"></span></a></li>
                <li class="list-group-item"><a href="/display-draft" class="btn-default"><i class="fa fa-file-text-o"></i> Drafts
                   <span class="pull-right text-primary"></span></a></li>
                <li class="list-group-item"><a href="/display-junk" class="btn-default"><i class="fa fa-filter"></i> Junk
                 </a>
                </li>
                <li class="list-group-item"><a href="/display-trash" class="btn-default"><i class="fa fa-trash-o"></i> Trash
                <span class="pull-right text-dangers"></span></a></li>
                <li class="list-group-item"><a href="/display-reply" class="btn-default"><i class="fa fa-mail-reply-all"></i> Replies
                <span class="pull-right text-danger"></span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class=" box box-solid card pt-2 mb-2 p-2 pl-2">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>
            </div>
            <div class="box box-body">
              <ul class="list-unstyled list-group list-group-unbordered">
                <li class="list-group-item"><a href="#" class="btn-default"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li class="list-group-item"><a href="#" class="btn-default"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li class="list-group-item"><a href="#" class="btn-default"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=" card col-lg-9 col-md-9 col-xs-9 col-sm-9 table-responsive no-padding">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-center"><u>Dashboard</u></h3>
            </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding m-4">
              <p class="text-justify">The dashboard items can be viewed based on the roles of users and Permission given to the particular user.The users are categorized in 8 (Eight) groups for example:</p>
              <p class="text-justify">1.Super admin or Admin</p>
              <p class="text-justify">2.Ministry Official</p>
              <p class="text-justify">3.Veterenary Officer</p>
              <p class="text-justify">4.Agriculture Officer</p>
              <p class="text-justify">5.Fisheries Officer</p>
              <p class="text-justify">6.Forestry Officer</p>
              <p class="text-justify">7.Registered Vet Doctors</p>
              <p class="text-justify">8.Member</p>
              <h3 class="text-center">Image of general dashboard Interface</h3>
              <img src="{{asset('documentation/general.jpg')}}" height="300" width="600" alt="about">
              <h3 class="text-center">Image of Members dashboard Interface</h3>
              <img src="{{asset('documentation/users.jpg')}}" height="300" width="600" alt="about">
            </div>
          </div>
          <!-- /. box -->
        </div>
            </div>
            </section>
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->
          </div>
          </div>
          </section>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  @include('layouts.footer')
</div>
@include('layouts.javascript')
</body>
</html>
