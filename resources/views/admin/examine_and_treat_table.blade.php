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
                @if(in_array('Can search E & T', auth()->user()->getUserPermisions()))
                <form action="/search-examine-treatment" method="get">
                        <div class="input-group ">
                          <input class="form-control"  selected="selected" name="pest" id="myInput" aria-label="Search" required>
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
               @if(in_array('Can add E & T', auth()->user()->getUserPermisions()))
               <a href="/display-add-form" button type="button" class="btn btn-primary">Add E & T Form</button></a>
               @endif
            </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-reponsive no-padding">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Item</th>
                  <th>Sign/Symptom</th>
                  <th>Disease</th>
                  <th>Drug</th>
                  <th>Weight</th>
                  <th>Week</th>
                  <th>Month</th>
                  <th>Bill(shs)</th>
                  <th>Deposit</th>
                  <th>Balance</th>
                  @if(in_array('Can see E & T created by', auth()->user()->getUserPermisions()))
                  <th>Created By</th>
                  @endif
                  @if(in_array('Can see E & T action', auth()->user()->getUserPermisions()))
                  <th>Action</th>
                  @endif
                </tr>
                </thead>
                <tbody id="myTable">
                @if ($show_all->currentPage() > 1)
                      @php($i =  1 + (($show_all->currentPage() - 1) * $show_all->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($show_all as $index =>$treatment)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $treatment->product }}</td>
                      <td>{{ $treatment->signs_symptoms }}</td>
                      <td>{{ $treatment->disease_name }}</td>
                      <td>{{ $treatment->drug_name }}</td>
                      <td>{{ $treatment->weight }}</td>
                      <td>{{ $treatment->week }}</td>
                      <td>{{ $treatment->month }}</td>
                      <td>{{ number_format($treatment->bill) }}</td>
                      <td>{{ number_format($treatment->deposit) }}</td>
                      <td>{{ number_format($treatment->balance) }}</td>
                      @if(in_array('Can see E & T created by name', auth()->user()->getUserPermisions()))
                      <td>{{ $treatment->name }}</td>
                      @endif
                      @if(in_array('Can edit E & T', auth()->user()->getUserPermisions()))
                      <td>
                      <a href="/edit-examine-treatment-form/{{ $treatment->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:blue;"><i class="fa fa-edit"></i></span></a>
                      @endif
                      @if(in_array('Can delete E & T', auth()->user()->getUserPermisions()))
                      <a href="/delete-examine-treatment/{{ $treatment->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                           
                      </td>
                      @endif
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $show_all->appends(['name' => $search_query])->links() }}
              @else
              {{ $show_all->links() }}
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
