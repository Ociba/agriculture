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
    <!-- Breadcrumbs -->
    @include('layouts.breadcrumb')
    <section class="content">
        <div class="row">
        @include('layouts.message')
            <div class="col-12">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Farmers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" method="get" action="/save-farmer">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Users name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" list="names" class="form-control" autocomplete="off" required>
                   <datalist id="names" style="width: 100%;">
                        @foreach($select_username as $pick_from_users_table)
                        <option selected="selected" value="{{$pick_from_users_table->id}}">{{ $pick_from_users_table->name }}</option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Profile</label>
                    <div class="col-sm-10">
                    <input type="text" name="image" list="images" class="form-control" autocomplete="off" required>
                   <datalist id="images" style="width: 100%;">
                        @foreach($select_profile_image as $pick_from_profiles_table)
                        <option selected="selected" value="{{$pick_from_profiles_table->id}}">{{ $pick_from_profiles_table->image }}</option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type of Farming</label>
                    <div class="col-sm-10">
                    <input type="text" name="type_of_farming"class="form-control" autocomplete="off" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-farmers"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
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
