<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
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
          <a href="/display-documentation" class="btn btn-success btn-block margin-bottom">Documentation</a>

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
                <li class="list-group-item"><a href="/display-front-pages" class="btn-default"><i class="fa fa-map-o"></i> Front pages
                <span class="pull-right text-dangers"></span></a></li>
                <li class="list-group-item"><a href="/display-conclusion" class="btn-default"><i class="fa  fa-gg"></i> Conclusion
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
              <h3 class="box-title text-center"><u>Front Menu Functionality</u></h3>
            </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding m-4">
            <p class=""><b>Blog details</b>-Authorized system user view blog details, search blog, deletes ,can add blog details and can edit blog details.</p>
            <p class=""><b>Comments</b>-Authorized system user should view comments, approves it to be display in the front pages.</p>
            <p class=""><b>Reply</b>-Authorized system user should view replies.</p>
            <p class=""><b>Messages</b>-Authorized system user should view the messages, search messages.</p>
            <p class=""><b>FAQ</b>-Authorized system user should view Frequently Asked Questions, serach ,can add questions, edit and deletequestion(s).</p>
            <p class=""><b>Farms</b>-Authorized system user should view Farms, search farm, edit farms, add farms,and delete farms.</p>
            <p class=""><b>Farmers</b>-Authorized system user should view Farmers, search farmers, add farmers, edit farmers and delete farmers.</p>
            <p class=""><b>Features</b>-Authoized farmers shoild view Features, search features,edit, add features and delete features</p>
            <p class=""><b>Feedback,Gallery, Market products,News,others,proect gallery,serices,we do sevices,sponsor and subscription.</b></p>
            <p>-Authorized system user should view , search, add, edit and deletes</p>
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
