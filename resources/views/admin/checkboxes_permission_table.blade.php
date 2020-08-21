<!DOCTYPE html>
<html>
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
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Select Permission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" action="/assign-permissions/{{request()->route()->id}}" method="get">
                            @csrf
                            <div class="card-body table-responsive no-padding">
                            <div class="form-group row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group row">
                                    <ul class="list-unstyled col-lg-12 col-md-12 col-xs-12 col-sm-12" id="myDiv">
                                        <li><input type="checkbox" id="select_all"/> All Permissions</li>
                                        @if ($select_all_permissions->currentPage() > 1)
                                        @php($i =  1 + (($select_all_permissions->currentPage() - 1) * $select_all_permissions->perPage()))
                                        @else
                                        @php($i = 1)
                                        @endif
                                        @foreach($select_all_permissions as $picking_from_database)
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" class="checkbox checkbox-primary" name="user_permisions[]" value="{{$picking_from_database->id}}" /> {{ $picking_from_database->permission }}
                                            </label>
                                        </div>
                                        @endforeach
                                        @if(isset($search_query))
                                    {{ $select_all_permissions->appends(['name' => $search_query])->links() }}
                                    @else
                                    {{ $select_all_permissions->links() }}
                                    @endif
                                    </ul>
                                </div>
                                <div class="form-group row">
                                    <button type="button" class="btn btn-warning mr-1"><a href="/roles" style="color:white;">Back</a></button>
                                    
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>
                            </div>
                            </div>
                    </form>
            </div>
        </div>
            <!-- /.card -->
            </div>
            </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  @include('layouts.footer')
</div>
@include('layouts.javascript')
</body> 
</html>