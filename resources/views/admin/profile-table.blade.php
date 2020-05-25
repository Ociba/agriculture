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
                @if(in_array('Can search profile', auth()->user()->getUserPermisions()))
                <form action="/search-profile" method="get">
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
               @if(in_array('Can add profile', auth()->user()->getUserPermisions()))
               <a href="/display-profile-form" button type="button" class="btn btn-primary">Add Image</button></a>
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
                  <th>Image</th>
                  @if(in_array('Can see profile created by', auth()->user()->getUserPermisions()))
                  <th>Created By</th>
                  @endif
                  @if(in_array('Can see profile action', auth()->user()->getUserPermisions()))
                  <th>Action</th>
                  @endif
                </tr>
                </thead>
                <tbody>
                @if ($show_all_profiles->currentPage() > 1)
                      @php($i =  1 + (($show_all_profiles->currentPage() - 1) * $show_all_profiles->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($show_all_profiles as $index =>$profiles)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>
                      <a target="_blank" href="{{asset('images/profile_pictures/'.$profiles->image)}}" style="width:200px" height="100px" alt="">
                      <img src="{{asset('images/profile_pictures/'.$profiles->image)}}" style="width:60px" height="30px" alt="">
                      </a>
                      </td>
                      @if(in_array('Can see profile createdby name', auth()->user()->getUserPermisions()))
                      <td>{{ $profiles->name }}</td>
                      @endif
                      @if(in_array('Can edit profile', auth()->user()->getUserPermisions()))
                      <td>
                      <a href="/change-profile-form" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:blue;"><i class="fa fa-edit"></i></span></a>
                      @endif
                      @if(in_array('Can delete profile', auth()->user()->getUserPermisions()))
                      <a href="/delete-profile/{{ $profiles->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                           
                      </td>
                      @endif
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $show_all_profiles->appends(['name' => $search_query])->links() }}
              @else
              {{ $show_all_profiles->links() }}
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
