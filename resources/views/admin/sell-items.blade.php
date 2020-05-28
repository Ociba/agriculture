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
                @if(in_array('Can search items advertised', auth()->user()->getUserPermisions()))
                <form action="/search-items" method="get">
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
               @if(in_array('Can add item details', auth()->user()->getUserPermisions()))
               <a href="/display-sell-item-form" button type="button" class="btn btn-primary">Add Item Details</button></a>
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
                  <th>Product</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Breed</th>
                  <th>Weight</th>
                  <th>Ditrict</th>
                  <th>County</th>
                  <th>Village</th>
                  <th>Category</th>
                  <th>Price(Shs)</th>
                  <th>Number</th>
                  <th>Image</th>
                  @if(in_array('Can see item action', auth()->user()->getUserPermisions()))
                  <th>Action</th>
                  @endif
                </tr>
                </thead>
                <tbody>
                @if ($display_all_items_to_sell->currentPage() > 1)
                      @php($i =  1 + (($display_all_items_to_sell->currentPage() - 1) * $display_all_items_to_sell->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($display_all_items_to_sell as $index =>$items)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $items->product }}</td>
                      <td>{{ $items->name }}</td>
                      <td>{{ $items->contact }}</td>
                      <td>{{ $items->breed }}</td>
                      <td>{{ $items->weight }}</td>
                      <td>{{ $items->district }}</td>
                      <td>{{ $items->county }}</td>
                      <td>{{ $items->village }}</td>
                      <td>{{ $items->category }}</td>
                      <td>{{ $items->price }}</td>
                      <td>{{ $items->number }}</td>
                      <td><img src="{{asset('items/images/'.$items->item_image)}}" style="width:60px" height="30px" alt=""></td>
                      <td>
                      @if(auth()->user()->id == $items->user_id)
                      <a href="/edit-sell-item-form/{{ $items->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:blue;"><i class="fa fa-edit"></i></span></a>
                      <a href="/delete-item/{{ $items->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                      <a href="/view-conscent-form/{{ $items->id }}" data-widget="view conscent" data-toggle="tooltip" title="write conscent">
                      <span style="color:orange;"><i class="fa fa-plus-circle"></i></span></a>
                      @endif
                      <a href="/view-conscent/{{ $items->id }}" data-widget="view conscent" data-toggle="tooltip" title="view conscent and Doctors Report">
                      <span style="color:green;"><i class="fa fa-eye"></i></span></a>

                      </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $display_all_items_to_sell->appends(['name' => $search_query])->links() }}
              @else
              {{ $display_all_items_to_sell->links() }}
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
