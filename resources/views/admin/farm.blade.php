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
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="card">
            <div class="card-header">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            
            </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                @if(in_array('Can search farm', auth()->user()->getUserPermisions()))
                <form action="/search-farms" method="get">
                        <div class="input-group ">
                          <input class="form-control"  selected="selected" placeholder="Search By name" name="name" id="srch-term" aria-label="Search" required>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                @endif
               </div>
               <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
               @if(in_array('Can add farm', auth()->user()->getUserPermisions()))
               <a href="/display-farm-form" button type="button" class="btn btn-primary">Add Farm</button></a>
               @endif
            </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>District</th>
                  <th>County</th>
                  <th>Subcounty</th>
                  <th>Activity</th>
                  <th>Statement</th>
                  <th>Image</th>
                  @if(in_array('Can see farm action', auth()->user()->getUserPermisions()))
                  <th>Action</th>
                  @endif
                </tr>
                </thead>
                <tbody>
                @if ($display_farms->currentPage() > 1)
                      @php($i =  1 + (($display_farms->currentPage() - 1) * $display_farms->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($display_farms as $index =>$farms)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $farms->farm_name }}</td>
                      <td>{{ $farms->district }}</td>
                      <td>{{ $farms->county }}</td>
                      <td>{{ $farms->village }}</td>
                      <td>{{ $farms->activity }}</td>
                      <td>{{ $farms->statement }}</td>
                      <td>
                      <img src="{{asset('assets/images/'.$farms->image)}}" style="width:60px" height="30px" alt="">
                      </td>
                      @if(in_array('Can edit farms', auth()->user()->getUserPermisions()))
                      <td>
                      <a href="/edit-farm/{{ $farms->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:green;"><i class="fa fa-edit"></i></span></a>
                      @endif
                      @if(in_array('Can delete farms', auth()->user()->getUserPermisions()))
                      <a href="/delete-farm/{{ $farms->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                           
                      </td>
                      @endif
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $display_farms->appends(['name' => $search_query])->links() }}
              @else
              {{ $display_farms->links() }}
              @endif
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
