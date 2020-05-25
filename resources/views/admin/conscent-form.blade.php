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
        @include('layouts.successfulmessage')
            <div class="col-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Conscent</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" method="post" action="/save-conscent">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="role" required>
                    <option value="">Select Officer Role</option>
                    @foreach($pick_role as $pick_from_roles_table)
                    <option selected="selected" value="{{$pick_from_roles_table->id}}">{{ $pick_from_roles_table->role }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="name" required>
                    <option value="">Select Vetenary Officer</option>
                    @foreach($pick_user as $pick_from_users_table)
                    <option selected="selected" value="{{$pick_from_users_table->id}}">{{ $pick_from_users_table->name }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Item</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="product_id" required>
                    <option value="">Select Item</option>
                    @foreach($pick_item as $pick_from_items_table)
                    <option selected="selected" value="{{$pick_from_items_table->id}}">{{ $pick_from_items_table->product_id }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Declaration</label>
                    <div class="col-sm-10">
                    <textarea type="text" selected="selected" rows="7" class="form-control" id="inputEmail3" name="declaration"  placeholder="" required></textarea>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-items-on-sell"><button type="button" class="btn btn-warning">Back</button></a>
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
