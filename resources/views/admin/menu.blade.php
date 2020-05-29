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
          <a href="/display-documentation" class="btn btn-success btn-block margin-bottom">Menu Detail</a>

          <div class="box box-solid card pt-2 mb-2 p-2 pl-2">
            <div class="box-header with-border">
              <h5 class="box-title">Table of content</h5>
            </div>
            <div class="box-body">
              <ul class="list-unstyled list-group list-group-unbordered">
                <li class="list-group-item"><a href="/display-login" class="btn-default"><i class="fa fa-user"></i> Registration & Login
                  </a></li>
                <li class="list-group-item"><a href="/display-documentation-dashboard" class="btn-default"><i class="fa fa-envelope-o"></i> Documentation Dashboard
                  <span class="pull-right text-success"></span></a></li>
                <li class="list-group-item"><a href="/display-menu-description" class="btn-default"><i class="fa fa-file-text-o"></i> Menu Description
                   <span class="pull-right text-primary"></span></a></li>
                <li class="list-group-item"><a href="/display-functionality" class="btn-default"><i class="fa fa-filter"></i> Functionality
                 </a>
                </li>
                <li class="list-group-item"><a href="/display-trash" class="btn-default"><i class="fa fa-trash-o"></i> Our Contact
                <span class="pull-right text-dangers"></span></a></li>
                <li class="list-group-item"><a href="/display-reply" class="btn-default"><i class="fa fa-mail-reply-all"></i> Closure
                <span class="pull-right text-danger"></span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class=" card col-lg-9 col-md-9 col-xs-9 col-sm-9 table-responsive no-padding">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-center"><u>Menus in Dashboard</u></h3>
            </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding m-4">
              <p><b><i class="fa  fa-check"></i>Home</b>-Has no sub menus</p>
              <p><b><i class="fa  fa-check"></i>Users</b>-Has Profile,Change password,Employees and Registered users</p>
              <p><b><i class="fa  fa-check"></i>Items</b>-Has Products,Breeds, Categories and Feeds</p>
              <p><b><i class="fa  fa-check"></i>Sell & Buy</b>-Has Market items,Doctors Request Form,Market Prices and Permit</p>
              <p><b><i class="fa  fa-check"></i>Veterenary Services</b>-Has Signs $ symptoms,Diseases,Drugs,Pests,Examination and Treatment</p>
              <p><b><i class="fa  fa-check"></i>Period</b>-Has Months,Weeks and Days</p>
              <p><b><i class="fa  fa-check"></i>Location</b>-Has Districts,Counties and Subcounties</p>
              <p><b><i class="fa  fa-check"></i>Weight</b>-Has no sub menus</p>
              <p><b><i class="fa  fa-check"></i>Reports</b>-Has emergency reports and Doctors Report</p>
              <p><b><i class="fa  fa-check"></i>User Accounts</b>-Has no sub menus</p>
              <p><b><i class="fa  fa-check"></i>Front Pages</b>-Has Blog details,Comments,Messages,FAQ,Farms,Farmers,Features,Feedback,Gallery,Market Products,News,Other,Project Gallery,Recnt news,Reply,Services,We do Services,Subscription,Sponsors </p>
              <p><b><i class="fa  fa-check"></i>Documentation</b>-Has no sub menus</p>
              <p><b>Note</b>-The menus include tables,Forms,editing,Search,Delete</p>
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
