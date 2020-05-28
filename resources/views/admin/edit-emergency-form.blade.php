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
                <h3 class="card-title">Edit Reports</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($edit_emergency as $emergency)
              <form class="form-horizontal mt-3" method="get" action="/update-emergency/{{$emergency->id}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                    <input type="text" name="product" list="products" class="form-control" autocomplete="off">
                    <datalist id="products" style="width: 100%;">
                        @foreach($pick_product as $pick_from_products_table)
                        <option selected="selected" value="{{$pick_from_products_table->product}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                    <input type="text" name="role" list="roles" class="form-control" autocomplete="off">
                    <datalist id="roles" style="width: 100%;">
                        @foreach($pick_role as $pick_from_roles_table)
                        <option selected="selected" value="{{$pick_from_roles_table->role}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Problem</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="problem" value="{{$emergency->problem}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
                    <div class="col-sm-10">
                    <input type="text" name="district" list="districts" class="form-control" autocomplete="off">
                    <datalist id="districts" style="width: 100%;">
                        @foreach($pick_district as $pick_from_district_table)
                        <option selected="selected" value="{{$pick_from_district_table->district}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">County</label>
                    <div class="col-sm-10">
                    <input type="text" name="county" list="counties" class="form-control" autocomplete="off">
                    <datalist id="counties" style="width: 100%;">
                        @foreach($pick_county as $pick_from_county_table)
                        <option selected="selected" value="{{$pick_from_county_table->county}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Village</label>
                    <div class="col-sm-10">
                    <input type="text" name="village" list="villages" class="form-control" autocomplete="off">
                    <datalist id="villages" style="width: 100%;">
                        @foreach($pick_village as $pick_from_village_table)
                        <option selected="selected" value="{{$pick_from_village_table->village}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                 
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of Gardens</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="affected_number" value="{{$emergency->affected_number}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new btn btn-success"><i class="fa fa-paperclip"></i> Select image</span>
                            <span class="fileupload-exists btn-purple"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="default" name="image" accept=".png, .jpg, .jpeg"/>
                            </span>
                            
                    </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-emergency-reports"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
              @endforeach
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
