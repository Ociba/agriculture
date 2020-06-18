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
                
                <form action="/search-doctor-req" method="get">
                        <div class="input-group ">
                          <input class="form-control"  selected="selected" id="myInput" name="name" aria-label="Search" required>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
               </div>
               <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
               <a href="/display-doctors-form" button type="button" class="btn btn-primary">Request for Doctor</button></a>
            </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Product</th>
                  <th>Ditrict</th>
                  <th>County</th>
                  <th>Village</th>
                  <th>Contact</th>
                  <th>Condition</th>
                  <th>Number</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody id="myTable">
                @if ($display_all_doctors_requests_details->currentPage() > 1)
                      @php($i =  1 + (($display_all_doctors_requests_details->currentPage() - 1) * $display_all_doctors_requests_details->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($display_all_doctors_requests_details as $index =>$doctors)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $doctors->product }}</td>
                      <td>{{ $doctors->district }}</td>
                      <td>{{ $doctors->county }}</td>
                      <td>{{ $doctors->village }}</td>
                      <td>{{ $doctors->contact }}</td>
                      <td>{{ $doctors->conditions }}</td>
                      <td>{{ $doctors->number }}</td>
                      <td><img src="{{asset('assets/images/'.$doctors->photo)}}" style="width:60px" height="30px" alt=""></td>
                      <td>{{ $doctors->name }}</td>
                      <td>
                      <a href="/edit-doctor-req-form/{{ $doctors->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:blue;"><i class="fa fa-edit"></i></span></a>
                      <a href="/delete-doctors-req/{{ $doctors->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                           
                      </td>
                      
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $display_all_doctors_requests_details->appends(['name' => $search_query])->links() }}
              @else
              {{ $display_all_doctors_requests_details->links() }}
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
