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
                <h3 class="card-title">Edit Farm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($edit_farm_detail as $farm)
              <form class="form-horizontal mt-3" method="get" action="/update-farm/{{$farm->id}}">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
                    <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="district" required>
                    <option value="">Select District</option>
                    @foreach($get_districts as $pick_from_district_table)
                    <option selected="selected" value="{{$pick_from_district_table->id}}">{{ $pick_from_district_table->district }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">County</label>
                    <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="county" required>
                    <option value="">Select County</option>
                    @foreach($get_county as $pick_from_county_table)
                    <option selected="selected" value="{{$pick_from_county_table->id}}">{{ $pick_from_county_table->county }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subcounty</label>
                    <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="village" required>
                    <option value="">Select Subcounty</option>
                    @foreach($get_subcounty as $pick_from_village_table)
                    <option selected="selected" value="{{$pick_from_village_table->id}}">{{ $pick_from_village_table->subcounty }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Farm Name</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="farm_name" value="{{$farm->farm_name}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Activity</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="activity" value="{{$farm->activity}}"placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">statement</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="statement" value="{{$farm->statement}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="image" value="{{$farm->image}}" placeholder="" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-farm"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
              @endforeach
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
