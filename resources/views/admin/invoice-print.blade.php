<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Uganda | Agriculture system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.stylecss')
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice mr-3">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
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
      <div class="col-4 invoice-col">
      <strong>From</strong>
        <address>
        <strong>{{$permit->sellers_name}}</strong><br>
        <strong>District:</strong>{{$permit->from_destination}}<br>
        <strong>ID No:</strong> {{$permit->sellers_ID}}<br>
        <strong>Phone:</strong> {{$permit->contact}}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-4 invoice-col">
      <strong>To</strong>
        <address>
        <strong>{{$permit->buyers_name}}</strong><br>
        <strong>District:</strong> {{$permit->to_destination}}<br>
        <strong>ID No:</strong> {{$permit->buyer_ID}}<br>
        <strong>Phone:</strong> {{$permit->buyers_contact}}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-4 invoice-col">
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
      <div class="col-12 table-responsive">
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
              <td>cleared</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
      <p class="lead"><strong>Local Council:</strong></p>
          <p><strong>Name of LC1:</strong>{{$permit->local_council_one_name}}</p>
          <p><strong>Phone Number:</strong>{{$permit->phone_number}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
      </div>
      <!-- /.col -->
      <div class="col-6">
      <p class="lead"><strong>{{$permit->role}}</strong></p>
          <p><strong>Officers'Name:</strong>{{$permit->vet_officer}}</p>
          <p><strong>Phone Number:</strong>{{$permit->vet_contact}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
        </div>
      </div>
      <!-- /.col -->
    </div>
    @endforeach
    <div class="row text-center">
    <button type="button" class="btn btn-warning" style="margin-right: 5px;">
            <i class="fa fa-warning" style="color:red;"></i> Note:&nbsp;Copy is Valid with original Stamp and sign for responsible person
      </button>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 13:15:58 GMT -->
</html>