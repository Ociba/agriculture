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
    <section class="content">
        <div class="row">
        @include('layouts.message')
            <div class="col-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Employees</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" method="get" action="/save-employee" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                     <input type="text" name="name" list="names" class="form-control" autocomplete="off">
                    <datalist id="names" style="width: 100%;">
                        @foreach($get_user_name as $pick_from_user_table)
                        <option selected="selected" value="{{$pick_from_user_table->id}}">{{ $pick_from_user_table->name }}</option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                    <input type="file" selected="selected" class="form-control"  name="qualification" accept=".pdf"  maxFileSize="2048 KiB" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="experience"  placeholder="" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-employees-details"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
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
