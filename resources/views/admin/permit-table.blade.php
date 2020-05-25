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
    <section class="invoice mr-3">
      <!-- title row -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            @foreach($display_permits as $permit)
          <h2 class="page-header">
            <i class="fa fa-leaf"></i> Permit.
            <small class="pull-right">Date: {{$permit->created_at}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 invoice-col">
         <b> From</b>
          <address>
            <strong>{{$permit->sellers_name}}</strong><br>
            <strong>District:</strong> {{$permit->from_destination}}<br>
            <strong>ID No:</strong> {{$permit->sellers_ID}}<br>
            <strong>Phone:</strong> {{$permit->contact}}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 invoice-col">
         <b> To</b>
          <address>
            <strong>{{$permit->buyers_name}}</strong><br>
            <strong>District:</strong> {{$permit->to_destination}}<br>
            <strong>ID No:</strong> {{$permit->buyer_ID}}<br>
            <strong>Phone:</strong> {{$permit->buyers_contact}}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 invoice-col">
          <b>Invoice <span style="color:red;">#00{{$permit->id}}</span></b><br>
          <br>
          <b>Item No.:</b> {{$permit->Number_of_items}}<br>
          <b>Item:</b> <img src="{{asset('images/profile_pictures/'.$permit->item_image)}}" style="width:60px" height="30px" alt=""><br>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="card-body table-responsive col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Number</th>
              <th>Description</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>{{$permit->product}}</td>
              <td>{{$permit->Number_of_items}}</td>
              <td>{{$permit->description}}</td>
              <td>Cleared</td>
            </tr>
            </tbody>
          </table>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
          <p class="lead"><strong>Local Council:</strong></p>
          <p><strong>Name of LC1:</strong>{{$permit->local_council_one_name}}</p>
          <p><strong>Phone Number:</strong>{{$permit->phone_number}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
        </div>
        <!-- /.col -->
        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
          <p class="lead"><strong>{{$permit->role}}</strong></p>
          <p><strong>Officers'Name:</strong>{{$permit->vet_officer}}</p>
          <p><strong>Phone Number:</strong>{{$permit->vet_contact}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-122">
          <a href="/invoice-print" button class="btn btn-success"><i class="fa fa-print"></i> Print</button></a>
          <div class="pull-right">
          <button type="button" class="btn btn-warning pull-right" style="margin-right: 5px;">
            <i class="fa fa-warning" style="color:red;"></i> Note:&nbsp;Copy is Valid with original Stamp and sign for responsible person
          </button>
          </div>
        </div>
      </div>
      @endforeach
    </section>
    <div class="clearfix"></div>
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
